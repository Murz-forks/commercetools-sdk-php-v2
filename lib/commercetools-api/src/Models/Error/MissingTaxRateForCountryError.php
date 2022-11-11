<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MissingTaxRateForCountryError extends ErrorObject
{
    public const FIELD_TAX_CATEGORY_ID = 'taxCategoryId';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_STATE = 'state';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Tax category $taxCategoryId is missing a tax rate for country $countriesAndStates.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:TaxCategory">TaxCategory</a>.</p>
     *

     * @return null|string
     */
    public function getTaxCategoryId();

    /**
     * <p>Country code of the geographic location.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * <p>State within the country, such as Texas in the United States.</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $taxCategoryId
     */
    public function setTaxCategoryId(?string $taxCategoryId): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;
}
