<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodRemoveShippingRateAction extends ShippingMethodUpdateAction
{
    public const FIELD_ZONE = 'zone';
    public const FIELD_SHIPPING_RATE = 'shippingRate';

    /**
     * <p><a href="ctp:api:type:Zone">Zone</a> from which the ShippingRate should be removed.</p>
     *

     * @return null|ZoneResourceIdentifier
     */
    public function getZone();

    /**
     * <p>Value to remove from <code>shippingRates</code>.</p>
     *

     * @return null|ShippingRateDraft
     */
    public function getShippingRate();

    /**
     * @param ?ZoneResourceIdentifier $zone
     */
    public function setZone(?ZoneResourceIdentifier $zone): void;

    /**
     * @param ?ShippingRateDraft $shippingRate
     */
    public function setShippingRate(?ShippingRateDraft $shippingRate): void;
}
