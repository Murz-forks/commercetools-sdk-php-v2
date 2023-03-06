<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetBillingAddressAction>
 */
final class CartSetBillingAddressActionBuilder implements Builder
{
    /**

     * @var null|BaseAddress|BaseAddressBuilder
     */
    private $address;

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|BaseAddress
     */
    public function getAddress()
    {
        return $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address;
    }

    /**
     * @param ?BaseAddress $address
     * @return $this
     */
    public function withAddress(?BaseAddress $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @deprecated use withAddress() instead
     * @return $this
     */
    public function withAddressBuilder(?BaseAddressBuilder $address)
    {
        $this->address = $address;

        return $this;
    }

    public function build(): CartSetBillingAddressAction
    {
        return new CartSetBillingAddressActionModel(
            $this->address instanceof BaseAddressBuilder ? $this->address->build() : $this->address
        );
    }

    public static function of(): CartSetBillingAddressActionBuilder
    {
        return new self();
    }
}
