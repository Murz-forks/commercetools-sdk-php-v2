<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentSetMethodInfoMethodAction extends PaymentUpdateAction
{
    public const FIELD_METHOD = 'method';

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getMethod();

    /**
     * @param ?string $method
     */
    public function setMethod(?string $method): void;
}
