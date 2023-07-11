<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetCustomLineItemShippingDetailsAction extends OrderUpdateAction
{
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}
