<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InvalidJsonInputError extends ErrorObject
{
    public const FIELD_DETAILED_ERROR_MESSAGE = 'detailedErrorMessage';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Request body does not contain valid JSON.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Further explanation about why the JSON is invalid.</p>
     *

     * @return null|string
     */
    public function getDetailedErrorMessage();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $detailedErrorMessage
     */
    public function setDetailedErrorMessage(?string $detailedErrorMessage): void;
}
