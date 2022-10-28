<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChangeStagedQuoteStateChange>
 */
final class ChangeStagedQuoteStateChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?string
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $previousValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**

     * @return null|string
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**

     * @return null|string
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?string $nextValue
     * @return $this
     */
    public function withNextValue(?string $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?string $previousValue
     * @return $this
     */
    public function withPreviousValue(?string $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }


    public function build(): ChangeStagedQuoteStateChange
    {
        return new ChangeStagedQuoteStateChangeModel(
            $this->change,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): ChangeStagedQuoteStateChangeBuilder
    {
        return new self();
    }
}
