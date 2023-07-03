<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeEnumValueLabelChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_VALUE_KEY = 'valueKey';

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

     * @return null|string
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|string
     */
    public function getNextValue();

    /**
     * <p>Name of the updated <a href="ctp:api:type:FieldDefinition">FieldDefinition</a>.</p>
     *

     * @return null|string
     */
    public function getFieldName();

    /**
     * <p>Key of the updated values.</p>
     *

     * @return null|string
     */
    public function getValueKey();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $previousValue
     */
    public function setPreviousValue(?string $previousValue): void;

    /**
     * @param ?string $nextValue
     */
    public function setNextValue(?string $nextValue): void;

    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void;

    /**
     * @param ?string $valueKey
     */
    public function setValueKey(?string $valueKey): void;
}
