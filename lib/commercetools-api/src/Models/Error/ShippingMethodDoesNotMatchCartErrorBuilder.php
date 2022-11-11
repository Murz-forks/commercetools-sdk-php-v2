<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShippingMethodDoesNotMatchCartError>
 */
final class ShippingMethodDoesNotMatchCartErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p><code>&quot;The predicate does not match the cart.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }


    public function build(): ShippingMethodDoesNotMatchCartError
    {
        return new ShippingMethodDoesNotMatchCartErrorModel(
            $this->message
        );
    }

    public static function of(): ShippingMethodDoesNotMatchCartErrorBuilder
    {
        return new self();
    }
}
