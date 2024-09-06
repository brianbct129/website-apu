<?php

namespace Lunar\Base;

use Illuminate\Support\Collection;
use Lunar\Models\TaxClass;

interface Purchasable
{
    /**
     * Get the purchasable prices.
     *
     * @return \Illuminate\Support\Collection<\Lunar\Models\Price>
     */
    public function getPrices(): Collection;

    /**
     * Return the purchasable unit quantity.
     */
    public function getUnitQuantity(): int;

    /**
     * Return the purchasable tax class.
     */
    public function getTaxClass(): TaxClass;

    /**
     * Return the purchasable tax reference.
     *
     * @return string|null
     */
    public function getTaxReference();

    /**
     * Return what type of purchasable this is, i.e. physical,digital,shipping.
     *
     * @return string
     */
    public function getType();

    /**
     * Return the description for the purchasable.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Return the option for this purchasable.
     *
     * @return string|null
     */
    public function getOption();

    /**
     * Return a unique string which identifies the purchasable item.
     *
     * @return string
     */
    public function getIdentifier();

    /**
     * Returns whether the purchasable item is shippable.
     *
     * @return bool
     */
    public function isShippable();

    /**
     * Return the thumbnail for the purchasable item.
     *
     * @return string
     */
    public function getThumbnail();

    /**
     * Return whether the purchasable can be fulfilled at a given quantity
     */
    public function canBeFulfilledAtQuantity(int $quantity): bool;

    /**
     * Returns the total inventory the purchasable has available
     */
    public function getTotalInventory(): int;
}
