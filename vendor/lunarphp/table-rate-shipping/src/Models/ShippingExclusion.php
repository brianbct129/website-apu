<?php

namespace Lunar\Shipping\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Lunar\Base\BaseModel;
use Lunar\Shipping\Factories\ShippingExclusionFactory;

class ShippingExclusion extends BaseModel implements Contracts\ShippingExclusion
{
    use HasFactory;

    /**
     * Define which attributes should be
     * protected from mass assignment.
     *
     * @var array
     */
    protected $guarded = [];

    protected $casts = [];

    /**
     * Return a new factory instance for the model.
     */
    protected static function newFactory()
    {
        return ShippingExclusionFactory::new();
    }

    /**
     * Return the shipping zone relationship.
     */
    public function list(): BelongsTo
    {
        return $this->belongsTo(ShippingZone::modelClass());
    }

    /**
     * Return the purchasable relationship.
     */
    public function purchasable(): MorphTo
    {
        return $this->morphTo('purchasable');
    }
}
