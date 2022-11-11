<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PriceChangedError extends ErrorObject
{
    public const FIELD_LINE_ITEMS = 'lineItems';
    public const FIELD_SHIPPING = 'shipping';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Plain text description of the reason for the Price change. For example, <code>&quot;The price or tax of some line items changed at the time of placing the order: $lineItems.&quot;</code>.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Unique identifiers of the Line Items for which the Price or <a href="ctp:api:type:TaxRate">TaxRate</a> has changed.</p>
     *

     * @return null|array
     */
    public function getLineItems();

    /**
     * <p><code>true</code> if the <a href="ctp:api:type:ShippingRate">ShippingRate</a> has changed.</p>
     *

     * @return null|bool
     */
    public function getShipping();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?array $lineItems
     */
    public function setLineItems(?array $lineItems): void;

    /**
     * @param ?bool $shipping
     */
    public function setShipping(?bool $shipping): void;
}
