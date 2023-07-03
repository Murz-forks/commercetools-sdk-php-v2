<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\CategoryOrderHints;
use Commercetools\History\Models\Common\CategoryOrderHintsModel;

/**
 * @internal
 */
final class SetCategoryOrderHintChangeModel extends JsonObjectModel implements SetCategoryOrderHintChange
{

    public const DISCRIMINATOR_VALUE = 'SetCategoryOrderHintChange';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     *
     * @var ?CategoryOrderHints
     */
    protected $previousValue;

    /**
     *
     * @var ?CategoryOrderHints
     */
    protected $nextValue;

    /**
     *
     * @var ?string
     */
    protected $catalogData;

    /**
     *
     * @var ?string
     */
    protected $categoryId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?CategoryOrderHints $previousValue = null,
        ?CategoryOrderHints $nextValue = null,
        ?string $catalogData = null,
        ?string $categoryId = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->catalogData = $catalogData;
        $this->categoryId = $categoryId;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change = (string) $data;
        }

        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *
     *
     * @return null|CategoryOrderHints
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue = CategoryOrderHintsModel::of($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|CategoryOrderHints
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue = CategoryOrderHintsModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     * <ul>
     * <li><code>staged</code>, if the staged <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * <li><code>current</code>, if the current <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * </ul>
     *
     *
     * @return null|string
     */
    public function getCatalogData()
    {
        if (is_null($this->catalogData)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CATALOG_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->catalogData = (string) $data;
        }

        return $this->catalogData;
    }

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:Category">Category</a>.</p>
     *
     *
     * @return null|string
     */
    public function getCategoryId()
    {
        if (is_null($this->categoryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CATEGORY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->categoryId = (string) $data;
        }

        return $this->categoryId;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?CategoryOrderHints $previousValue
     */
    public function setPreviousValue(?CategoryOrderHints $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?CategoryOrderHints $nextValue
     */
    public function setNextValue(?CategoryOrderHints $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?string $catalogData
     */
    public function setCatalogData(?string $catalogData): void
    {
        $this->catalogData = $catalogData;
    }

    /**
     * @param ?string $categoryId
     */
    public function setCategoryId(?string $categoryId): void
    {
        $this->categoryId = $categoryId;
    }



}
