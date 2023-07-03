<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\Money;

interface SetOrderTotalTaxChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_TAX_MODE = 'taxMode';

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

     * @return null|Money
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Money
     */
    public function getNextValue();

    /**
     * <p><code>&quot;ExternalAmount&quot;</code></p>
     *

     * @return null|string
     */
    public function getTaxMode();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?Money $previousValue
     */
    public function setPreviousValue(?Money $previousValue): void;

    /**
     * @param ?Money $nextValue
     */
    public function setNextValue(?Money $nextValue): void;

    /**
     * @param ?string $taxMode
     */
    public function setTaxMode(?string $taxMode): void;
}
