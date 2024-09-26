<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductVariantTailoringModel extends JsonObjectModel implements ProductVariantTailoring
{
    /**
     *
     * @var ?int
     */
    protected $id;

    /**
     *
     * @var ?ImageCollection
     */
    protected $images;

    /**
     *
     * @var ?AssetCollection
     */
    protected $assets;

    /**
     *
     * @var ?ProductTailoringAttributeCollection
     */
    protected $attributes;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $id = null,
        ?ImageCollection $images = null,
        ?AssetCollection $assets = null,
        ?ProductTailoringAttributeCollection $attributes = null
    ) {
        $this->id = $id;
        $this->images = $images;
        $this->assets = $assets;
        $this->attributes = $attributes;
    }

    /**
     * <p>The <code>id</code> of the tailored <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *
     *
     * @return null|int
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (int) $data;
        }

        return $this->id;
    }

    /**
     * <p>Images of the tailored Product Variant.
     * If present, these images will override the images of the corresponding <a href="ctp:api:type:ProductVariant">ProductVariant</a> in total.</p>
     *
     *
     * @return null|ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_IMAGES);
            if (is_null($data)) {
                return null;
            }
            $this->images = ImageCollection::fromArray($data);
        }

        return $this->images;
    }

    /**
     * <p>Media assets of the tailored Product Variant.
     * If present, these assets will override the assets of the corresponding <a href="ctp:api:type:ProductVariant">ProductVariant</a> in total.</p>
     *
     *
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSETS);
            if (is_null($data)) {
                return null;
            }
            $this->assets = AssetCollection::fromArray($data);
        }

        return $this->assets;
    }

    /**
     * <p>Attributes of the tailored Product Variant.
     * If present, these Attributes are selectively merged into the <code>attributes</code> of the corresponding <a href="ctp:api:type:ProductVariant">ProductVariant</a>:</p>
     * <ul>
     * <li>If the ProductVariant contains an Attribute with the same <code>name</code>, its <code>value</code> is overwritten,</li>
     * <li>otherwise the Attribute and its value are added to the ProductVariant.</li>
     * </ul>
     *
     *
     * @return null|ProductTailoringAttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = ProductTailoringAttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }


    /**
     * @param ?int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void
    {
        $this->assets = $assets;
    }

    /**
     * @param ?ProductTailoringAttributeCollection $attributes
     */
    public function setAttributes(?ProductTailoringAttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
}
