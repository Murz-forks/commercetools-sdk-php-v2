<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSearchProjectNotIndexedError extends ErrorObject
{
    /**
     * <p><code>&quot;ResourceNotFound&quot;</code></p>
     *

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Project not yet indexed&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
