<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderFromCartDraft extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_CART = 'cart';
    public const FIELD_VERSION = 'version';
    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_PURCHASE_ORDER_NUMBER = 'purchaseOrderNumber';
    public const FIELD_PAYMENT_STATE = 'paymentState';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';
    public const FIELD_ORDER_STATE = 'orderState';
    public const FIELD_STATE = 'state';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Unique identifier of the Cart from which you can create an Order.</p>
     *
     * @deprecated
     * @return null|string
     */
    public function getId();

    /**
     * <p>ResourceIdentifier of the Cart from which the Order is created.</p>
     *

     * @return null|CartResourceIdentifier
     */
    public function getCart();

    /**
     * <p>Expected version of the Cart from which the Order is created.
     * If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>String that uniquely identifies an order.
     * It can be used to create more human-readable (in contrast to ID) identifier for the order.
     * It should be unique across a project.
     * Once it's set it cannot be changed.
     * For easier use on Get, Update and Delete actions we suggest assigning order numbers that match the regular expression <code>[a-z0-9_-]{2,36}</code>.</p>
     *

     * @return null|string
     */
    public function getOrderNumber();

    /**
     * <p>Identifier for a purchase order, usually in a B2B context.
     * The Purchase Order Number is typically entered by the <a href="/quotes-overview#buyer">Buyer</a> and can also be used with <a href="/quotes-overview">Quotes</a>.</p>
     *

     * @return null|string
     */
    public function getPurchaseOrderNumber();

    /**
     * <p>Payment state for the Order.</p>
     *

     * @return null|string
     */
    public function getPaymentState();

    /**
     * <p>Shipment state for the Order.</p>
     *

     * @return null|string
     */
    public function getShipmentState();

    /**
     * <p>Order will be created with <code>Open</code> status by default.</p>
     *

     * @return null|string
     */
    public function getOrderState();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:State">State</a> indicating the Order's state.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * <p><a href="/../api/projects/custom-fields">Custom Fields</a> for the Order. The Custom Field type must match the type of the Custom Fields in the referenced <a href="/../api/projects/carts#cart">Cart</a>.
     * If specified, the Custom Fields are merged with the Custom Fields on the referenced <a href="/../api/projects/carts#cart">Cart</a> and added to the Order.
     * If empty, the Custom Fields on the referenced <a href="/../api/projects/carts#cart">Cart</a> are added to the Order automatically.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?CartResourceIdentifier $cart
     */
    public function setCart(?CartResourceIdentifier $cart): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void;

    /**
     * @param ?string $purchaseOrderNumber
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): void;

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void;

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void;

    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void;

    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
