<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;

interface ProductVariantPatch extends JsonObject
{
    public const FIELD_PRODUCT_VARIANT = 'productVariant';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <a href="/../api/projects/products#productvariant">ProductVariant</a> to which this patch is applied.
     * The Reference to the <a href="/../api/projects/products#productvariant">ProductVariant</a> with which the ProductVariantPatch is associated.
     * If referenced ProductVariant does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary ProductVariant is created.</p>
     *

     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant();

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.</p>
     * <ul>
     * <li>The referenced Attribute must be defined in an existing <a href="/../api/projects/productTypes#producttype">ProductType</a>, or the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be <code>validationFailed</code>.</li>
     * <li>Setting the value of a non-required Attribute to <code>null</code> will remove the Attribute.</li>
     * <li>Attempting to set a <code>null</code> value to a required Attribute will make the import operation fail with an <a href="/error#invalidoperation">InvalidOperation</a> error.</li>
     * <li>Importing <a href="/product-variant#localizabletextattribute">LocalizableTextAttributes</a> or <a href="/product-variant#localizabletextsetattribute">LocalizableTextSetAttributes</a> follows an override pattern, meaning that omitted localized fields will be deleted, new fields will be created, and existing fields will be updated. You can also delete localized fields by setting their value to <code>null</code>.</li>
     * </ul>
     *

     * @return null|Attributes
     */
    public function getAttributes();

    /**
     * <p>If <code>false</code>, the attribute changes are applied to both <a href="/../api/projects/productProjections#current--staged">current and staged projected representations</a> of the <a href="/../api/projects/products#product">Product</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?ProductVariantKeyReference $productVariant
     */
    public function setProductVariant(?ProductVariantKeyReference $productVariant): void;

    /**
     * @param ?Attributes $attributes
     */
    public function setAttributes(?Attributes $attributes): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
