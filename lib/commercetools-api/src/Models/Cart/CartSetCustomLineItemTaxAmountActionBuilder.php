<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetCustomLineItemTaxAmountAction>
 */
final class CartSetCustomLineItemTaxAmountActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $customLineItemId;

    /**

     * @var null|ExternalTaxAmountDraft|ExternalTaxAmountDraftBuilder
     */
    private $externalTaxAmount;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount()
    {
        return $this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount;
    }

    /**
     * @param ?string $customLineItemId
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @param ?ExternalTaxAmountDraft $externalTaxAmount
     * @return $this
     */
    public function withExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;

        return $this;
    }

    /**
     * @deprecated use withExternalTaxAmount() instead
     * @return $this
     */
    public function withExternalTaxAmountBuilder(?ExternalTaxAmountDraftBuilder $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;

        return $this;
    }

    public function build(): CartSetCustomLineItemTaxAmountAction
    {
        return new CartSetCustomLineItemTaxAmountActionModel(
            $this->customLineItemId,
            $this->externalTaxAmount instanceof ExternalTaxAmountDraftBuilder ? $this->externalTaxAmount->build() : $this->externalTaxAmount
        );
    }

    public static function of(): CartSetCustomLineItemTaxAmountActionBuilder
    {
        return new self();
    }
}
