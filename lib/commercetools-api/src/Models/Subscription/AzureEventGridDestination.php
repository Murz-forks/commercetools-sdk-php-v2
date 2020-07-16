<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AzureEventGridDestination extends Destination
{
    public const FIELD_URI = 'uri';
    public const FIELD_ACCESS_KEY = 'accessKey';

    /**
     * @return null|string
     */
    public function getUri();

    /**
     * @return null|string
     */
    public function getAccessKey();

    /**
     * @param ?string $uri
     */
    public function setUri(?string $uri): void;

    /**
     * @param ?string $accessKey
     */
    public function setAccessKey(?string $accessKey): void;
}
