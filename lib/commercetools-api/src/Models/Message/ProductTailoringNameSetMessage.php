<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringNameSetMessage extends Message
{
    public const FIELD_STORE = 'store';
    public const FIELD_PRODUCT_KEY = 'productKey';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_NAME = 'name';
    public const FIELD_OLD_NAME = 'oldName';

    /**
     * <p>The Store to which the Product Tailoring belongs.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * <p>User-defined unique identifier of the Product this Product Tailoring belongs to.</p>
     *

     * @return null|string
     */
    public function getProductKey();

    /**
     * <p>Reference to the Product the Product Tailoring belongs to.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>The name of the <a href="ctp:api:type:ProductTailoring">Product Tailoring</a> after the <a href="ctp:api:type:ProductTailoringSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>The name of the <a href="ctp:api:type:ProductTailoring">ProductTailoring</a> before the <a href="ctp:api:type:ProductTailoringSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getOldName();

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;

    /**
     * @param ?string $productKey
     */
    public function setProductKey(?string $productKey): void;

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $oldName
     */
    public function setOldName(?LocalizedString $oldName): void;
}
