<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\LocalizedEnumValue;

interface RemoveLocalizedEnumValuesChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|LocalizedEnumValue
     */
    public function getPreviousValue();

    /**
     * <p>Name of the updated <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
     *

     * @return null|string
     */
    public function getAttributeName();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?LocalizedEnumValue $previousValue
     */
    public function setPreviousValue(?LocalizedEnumValue $previousValue): void;

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;
}
