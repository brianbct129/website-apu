@props(['product'])

<a class="block group"
   href="{{ route('product.view', $product->defaultUrl->slug) }}"
   wire:navigate
>
    <div class="overflow-hidden rounded-lg aspect-w-1 aspect-h-1">
        @if ($product->thumbnail)
            <img class="object-cover transition-transform duration-300 group-hover:scale-105"
                 src="{{ $product->thumbnail->getUrl('medium') }}"
                 alt="{{ $product->translateAttribute('name') }}" />
        @endif
    </div>

    <strong class="mt-2 text-sm font-medium">
        {{ $product->translateAttribute('name') }}
    </strong>

    <p class="mt-1 text-sm text-gray-600">
        <span class="sr-only">
            Price
        </span>

        <x-product-price :product="$product" />
    </p>
</a>
