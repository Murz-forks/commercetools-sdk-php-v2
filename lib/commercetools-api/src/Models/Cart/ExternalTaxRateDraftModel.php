<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\TaxCategory\SubRateCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ExternalTaxRateDraftModel extends JsonObjectModel implements ExternalTaxRateDraft
{
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?float
     */
    protected $amount;

    /**
     *
     * @var ?bool
     */
    protected $includedInPrice;

    /**
     *
     * @var ?string
     */
    protected $country;

    /**
     *
     * @var ?string
     */
    protected $state;

    /**
     *
     * @var ?SubRateCollection
     */
    protected $subRates;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?float $amount = null,
        ?bool $includedInPrice = null,
        ?string $country = null,
        ?string $state = null,
        ?SubRateCollection $subRates = null
    ) {
        $this->name = $name;
        $this->amount = $amount;
        $this->includedInPrice = $includedInPrice;
        $this->country = $country;
        $this->state = $state;
        $this->subRates = $subRates;
    }

    /**
     * <p>Name of the Tax Rate.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Percentage in the range of 0-1.</p>
     * <ul>
     * <li>If no <code>subRates</code> are specified, a value must be defined.</li>
     * <li>If <code>subRates</code> are specified, this can be omitted or its value must be the sum of all <code>subRates</code> amounts.</li>
     * </ul>
     *
     *
     * @return null|float
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->amount = (float) $data;
        }

        return $this->amount;
    }

    /**
     * <ul>
     * <li>If set to <code>false</code>, the related price is considered the net price and the provided <code>amount</code> is applied to calculate the gross price.</li>
     * <li>If set to <code>true</code>, the related price is considered the gross price, and the provided <code>amount</code> is applied to calculate the net price.</li>
     * </ul>
     *
     *
     * @return null|bool
     */
    public function getIncludedInPrice()
    {
        if (is_null($this->includedInPrice)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_INCLUDED_IN_PRICE);
            if (is_null($data)) {
                return null;
            }
            $this->includedInPrice = (bool) $data;
        }

        return $this->includedInPrice;
    }

    /**
     * <p>Country for which the tax applies.</p>
     *
     *
     * @return null|string
     */
    public function getCountry()
    {
        if (is_null($this->country)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->country = (string) $data;
        }

        return $this->country;
    }

    /**
     * <p>State within the specified country.</p>
     *
     *
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * <p>For countries (such as the US) where the total tax is a combination of multiple taxes (such as state and local taxes). The total of all subrates must equal the TaxRate <code>amount</code>.</p>
     *
     *
     * @return null|SubRateCollection
     */
    public function getSubRates()
    {
        if (is_null($this->subRates)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SUB_RATES);
            if (is_null($data)) {
                return null;
            }
            $this->subRates = SubRateCollection::fromArray($data);
        }

        return $this->subRates;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?float $amount
     */
    public function setAmount(?float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @param ?bool $includedInPrice
     */
    public function setIncludedInPrice(?bool $includedInPrice): void
    {
        $this->includedInPrice = $includedInPrice;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?SubRateCollection $subRates
     */
    public function setSubRates(?SubRateCollection $subRates): void
    {
        $this->subRates = $subRates;
    }
}
