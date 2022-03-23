<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class HighPrecisionMoneyDraftModel extends JsonObjectModel implements HighPrecisionMoneyDraft
{
    public const DISCRIMINATOR_VALUE = 'highPrecision';
    /**
     * @var ?int
     */
    protected $centAmount;

    /**
     * @var ?string
     */
    protected $currencyCode;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $fractionDigits;

    /**
     * @var ?int
     */
    protected $preciseAmount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $centAmount = null,
        ?string $currencyCode = null,
        ?int $fractionDigits = null,
        ?int $preciseAmount = null
    ) {
        $this->centAmount = $centAmount;
        $this->currencyCode = $currencyCode;
        $this->fractionDigits = $fractionDigits;
        $this->preciseAmount = $preciseAmount;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|int
     */
    public function getCentAmount()
    {
        if (is_null($this->centAmount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_CENT_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->centAmount = (int) $data;
        }

        return $this->centAmount;
    }

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     * @return null|string
     */
    public function getCurrencyCode()
    {
        if (is_null($this->currencyCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CURRENCY_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->currencyCode = (string) $data;
        }

        return $this->currencyCode;
    }

    /**
     * <p>The platform supports two different types of Money, one for amounts in cent precision and another one for sub-cent amounts up to 12 fraction digits.</p>
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
     * <p>Must be equal to the default number of fraction digits for the specified currency.</p>
     *
     * @return null|int
     */
    public function getFractionDigits()
    {
        if (is_null($this->fractionDigits)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_FRACTION_DIGITS);
            if (is_null($data)) {
                return null;
            }
            $this->fractionDigits = (int) $data;
        }

        return $this->fractionDigits;
    }

    /**
     * <p>amount in 1 / (10 ^ <code>fractionDigits</code>) of a currency.</p>
     *
     * @return null|int
     */
    public function getPreciseAmount()
    {
        if (is_null($this->preciseAmount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PRECISE_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->preciseAmount = (int) $data;
        }

        return $this->preciseAmount;
    }


    /**
     * @param ?int $centAmount
     */
    public function setCentAmount(?int $centAmount): void
    {
        $this->centAmount = $centAmount;
    }

    /**
     * @param ?string $currencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @param ?int $fractionDigits
     */
    public function setFractionDigits(?int $fractionDigits): void
    {
        $this->fractionDigits = $fractionDigits;
    }

    /**
     * @param ?int $preciseAmount
     */
    public function setPreciseAmount(?int $preciseAmount): void
    {
        $this->preciseAmount = $preciseAmount;
    }
}
