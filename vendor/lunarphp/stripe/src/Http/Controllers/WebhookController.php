<?php

namespace Lunar\Stripe\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Lunar\Stripe\Concerns\ConstructsWebhookEvent;
use Lunar\Stripe\Jobs\ProcessStripeWebhook;
use Lunar\Stripe\Models\StripePaymentIntent;
use Stripe\Exception\SignatureVerificationException;
use Stripe\Exception\UnexpectedValueException;

final class WebhookController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $secret = config('services.stripe.webhooks.lunar');
        $stripeSig = $request->header('Stripe-Signature');

        try {
            $event = app(ConstructsWebhookEvent::class)->constructEvent(
                $request->getContent(),
                $stripeSig,
                $secret
            );
        } catch (UnexpectedValueException|SignatureVerificationException $e) {
            Log::error(
                $error = $e->getMessage()
            );

            return response()->json([
                'webhook_successful' => false,
                'message' => $error,
            ], 400);
        }

        $paymentIntent = $event->data->object->id;
        $orderId = $event->data->object->metadata?->order_id;

        // Is this payment intent already being processed?
        $paymentIntentModel = StripePaymentIntent::where('intent_id', $paymentIntent)->first();

        if (! $paymentIntentModel?->processing_at) {
            $paymentIntentModel?->update([
                'event_id' => $event->id,
            ]);
            ProcessStripeWebhook::dispatch($paymentIntent, $orderId)->delay(
                now()->addSeconds(5)
            );
        }

        return response()->json([
            'webhook_successful' => true,
            'message' => 'Webook handled successfully',
        ]);
    }
}
