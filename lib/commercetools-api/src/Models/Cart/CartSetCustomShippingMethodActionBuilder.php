<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\ShippingMethod\ShippingRateDraft;
use Commercetools\Api\Models\ShippingMethod\ShippingRateDraftBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetCustomShippingMethodAction>
 */
final class CartSetCustomShippingMethodActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $shippingMethodName;

    /**

     * @var null|ShippingRateDraft|ShippingRateDraftBuilder
     */
    private $shippingRate;

    /**

     * @var null|TaxCategoryResourceIdentifier|TaxCategoryResourceIdentifierBuilder
     */
    private $taxCategory;

    /**

     * @var null|ExternalTaxRateDraft|ExternalTaxRateDraftBuilder
     */
    private $externalTaxRate;

    /**

     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>Name of the custom Shipping Method.</p>
     *

     * @return null|string
     */
    public function getShippingMethodName()
    {
        return $this->shippingMethodName;
    }

    /**
     * <p>Determines the shipping price.</p>
     *

     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        return $this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate;
    }

    /**
     * <p>Tax Category used to determine the Tax Rate when the Cart has the <code>Platform</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

    /**
     * <p>External Tax Rate for the <code>shippingRate</code> to be set if the Cart has the <code>External</code> <a href="ctp:api:type:TaxMode">TaxMode</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        return $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate;
    }

    /**
     * <p>Custom Fields for the custom Shipping Method.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $shippingMethodName
     * @return $this
     */
    public function withShippingMethodName(?string $shippingMethodName)
    {
        $this->shippingMethodName = $shippingMethodName;

        return $this;
    }

    /**
     * @param ?ShippingRateDraft $shippingRate
     * @return $this
     */
    public function withShippingRate(?ShippingRateDraft $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     * @return $this
     */
    public function withExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withShippingRate() instead
     * @return $this
     */
    public function withShippingRateBuilder(?ShippingRateDraftBuilder $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }

    /**
     * @deprecated use withTaxCategory() instead
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @deprecated use withExternalTaxRate() instead
     * @return $this
     */
    public function withExternalTaxRateBuilder(?ExternalTaxRateDraftBuilder $externalTaxRate)
    {
        $this->externalTaxRate = $externalTaxRate;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): CartSetCustomShippingMethodAction
    {
        return new CartSetCustomShippingMethodActionModel(
            $this->shippingMethodName,
            $this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate,
            $this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->externalTaxRate instanceof ExternalTaxRateDraftBuilder ? $this->externalTaxRate->build() : $this->externalTaxRate,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): CartSetCustomShippingMethodActionBuilder
    {
        return new self();
    }
}
