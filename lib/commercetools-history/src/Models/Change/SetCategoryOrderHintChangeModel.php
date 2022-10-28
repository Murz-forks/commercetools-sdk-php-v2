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
     * @var ?string
     */
    protected $catalogData;

    /**
     *
     * @var ?string
     */
    protected $categoryId;

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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $catalogData = null,
        ?string $categoryId = null,
        ?CategoryOrderHints $previousValue = null,
        ?CategoryOrderHints $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->catalogData = $catalogData;
        $this->categoryId = $categoryId;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
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
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>setCategoryOrderHint</code></p>
     *
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
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
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
            $this->catalogData =  (string) $data;
        }

        return $this->catalogData;
    }

    /**
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
            $this->categoryId =  (string) $data;
        }

        return $this->categoryId;
    }

    /**
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

            $this->previousValue =  CategoryOrderHintsModel::of($data);
        }

        return $this->previousValue;
    }

    /**
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

            $this->nextValue =  CategoryOrderHintsModel::of($data);
        }

        return $this->nextValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
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



}
