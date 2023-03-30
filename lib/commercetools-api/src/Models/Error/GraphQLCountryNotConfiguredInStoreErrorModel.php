<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLCountryNotConfiguredInStoreErrorModel extends JsonObjectModel implements GraphQLCountryNotConfiguredInStoreError
{
    public const DISCRIMINATOR_VALUE = 'CountryNotConfiguredInStore';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?array
     */
    protected $storeCountries;

    /**
     *
     * @var ?string
     */
    protected $country;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $storeCountries = null,
        ?string $country = null,
        ?string $code = null
    ) {
        $this->storeCountries = $storeCountries;
        $this->country = $country;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>Countries configured for the Store.</p>
     *
     *
     * @return null|array
     */
    public function getStoreCountries()
    {
        if (is_null($this->storeCountries)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_STORE_COUNTRIES);
            if (is_null($data)) {
                return null;
            }
            $this->storeCountries = $data;
        }

        return $this->storeCountries;
    }

    /**
     * <p>The country that is not configured for the Store but referenced on the Cart or Order.</p>
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
     * @param ?array $storeCountries
     */
    public function setStoreCountries(?array $storeCountries): void
    {
        $this->storeCountries = $storeCountries;
    }

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
