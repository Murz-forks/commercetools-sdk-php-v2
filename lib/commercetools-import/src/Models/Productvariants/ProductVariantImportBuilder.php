<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceBuilder;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceBuilder;
use stdClass;

/**
 * @implements Builder<ProductVariantImport>
 */
final class ProductVariantImportBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?bool
     */
    private $isMasterVariant;

    /**

     * @var ?AttributeCollection
     */
    private $attributes;

    /**

     * @var ?ImageCollection
     */
    private $images;

    /**

     * @var ?AssetCollection
     */
    private $assets;

    /**
     * @deprecated
     * @var ?bool
     */
    private $publish;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @var null|ProductKeyReference|ProductKeyReferenceBuilder
     */
    private $product;

    /**
     * <p>User-defined unique identifier. If a <a href="/../api/projects/products#productvariant">ProductVariant</a> with this <code>key</code> exists on the specified <code>product</code>, it will be updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>ProductVariant.sku</code>.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Maps to <code>ProductVariant.isMasterVariant</code>.</p>
     *

     * @return null|bool
     */
    public function getIsMasterVariant()
    {
        return $this->isMasterVariant;
    }

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.
     * The referenced attribute must be defined in an already existing ProductType in the project, or the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be <code>unresolved</code>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <p>Maps to <code>ProductVariant.images</code>.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>Maps to <code>ProductVariant.assets</code>.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * <p>If <code>publish</code> is set to either <code>true</code> or <code>false</code>, both staged and current projections are set to the same value provided by the import data.
     * If <code>publish</code> is not set, the staged projection is set to the provided import data, but the current projection stays unchanged.
     * However, if the import data contains no update, that is, if it matches the staged projection of the existing Product, the import induces no change in the existing Product whether <code>publish</code> is set or not.</p>
     *
     * @deprecated
     * @return null|bool
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * <ul>
     * <li>Set to <code>false</code> to update both the <a href="/../api/projects/productProjections#current--staged">current and staged projections</a> of the <a href="/../api/projects/products#product">Product</a> with the new Product Variant data.</li>
     * <li>Leave empty or set to <code>true</code> to only update the staged projection.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>The <a href="/../api/projects/products#productvariant">Product</a> to which this Product Variant belongs. Maps to <code>ProductVariant.product</code>.
     * The Reference to the <a href="/../api/projects/products#product">Product</a> with which the ProductVariant is associated.
     * If referenced Product does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Product is created.</p>
     *

     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param ?bool $isMasterVariant
     * @return $this
     */
    public function withIsMasterVariant(?bool $isMasterVariant)
    {
        $this->isMasterVariant = $isMasterVariant;

        return $this;
    }

    /**
     * @param ?AttributeCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @param ?ImageCollection $images
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param ?AssetCollection $assets
     * @return $this
     */
    public function withAssets(?AssetCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }

    /**
     * @param ?bool $publish
     * @return $this
     */
    public function withPublish(?bool $publish)
    {
        $this->publish = $publish;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?ProductKeyReference $product
     * @return $this
     */
    public function withProduct(?ProductKeyReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductKeyReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    public function build(): ProductVariantImport
    {
        return new ProductVariantImportModel(
            $this->key,
            $this->sku,
            $this->isMasterVariant,
            $this->attributes,
            $this->images,
            $this->assets,
            $this->publish,
            $this->staged,
            $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product
        );
    }

    public static function of(): ProductVariantImportBuilder
    {
        return new self();
    }
}
