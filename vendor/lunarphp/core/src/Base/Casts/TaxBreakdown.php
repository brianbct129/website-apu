<?php

namespace Lunar\Base\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Contracts\Database\Eloquent\SerializesCastableAttributes;
use Lunar\Base\ValueObjects\Cart\TaxBreakdownAmount;
use Lunar\DataTypes\Price;
use Lunar\Models\Currency;
use Spatie\LaravelBlink\BlinkFacade;

class TaxBreakdown implements CastsAttributes, SerializesCastableAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return \Lunar\Base\ValueObjects\Cart\TaxBreakdown
     */
    public function get($model, $key, $value, $attributes)
    {
        $breakdown = new \Lunar\Base\ValueObjects\Cart\TaxBreakdown;

        $breakdown->amounts = collect(
            json_decode($value, false)
        )->mapWithKeys(function ($amount, $key) {
            $currency = BlinkFacade::once("currency_{$amount->currency_code}", function () use ($amount) {
                return Currency::whereCode($amount->currency_code)->first();
            });

            return [
                $key => new TaxBreakdownAmount(
                    price: new Price($amount->value, $currency),
                    identifier: $amount->identifier,
                    description: $amount->description,
                    percentage: $amount->percentage,
                ),
            ];
        });

        return $breakdown;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  Price  $value
     * @param  array  $attributes
     * @return array
     *
     * @throws \Exception
     */
    public function set($model, $key, $value, $attributes)
    {
        if ($value && ! is_a($value, \Lunar\Base\ValueObjects\Cart\TaxBreakdown::class)) {
            throw new \Exception('Tax breakdown must be instance of Lunar\Base\ValueObjects\Cart\TaxBreakdown');
        }

        if (! $value) {
            return [];
        }

        return [
            $key => $value->amounts->map(function ($item) {
                return [
                    'description' => $item->description,
                    'identifier' => $item->identifier,
                    'percentage' => $item->percentage,
                    'value' => $item->price->value,
                    'currency_code' => $item->price->currency->code,
                ];
            })->toJson(),
        ];
    }

    /**
     * Get the serialized representation of the value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array<string, mixed>  $attributes
     */
    public function serialize($model, $key, $value, $attributes)
    {
        return json_encode(
            $this->set($model, $key, $value, $attributes)
        );
    }
}
