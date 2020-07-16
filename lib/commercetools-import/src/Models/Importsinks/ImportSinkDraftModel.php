<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ImportSinkDraftModel extends JsonObjectModel implements ImportSinkDraft
{
    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $resourceType;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $version = null,
        ?string $key = null,
        ?string $resourceType = null
    ) {
        $this->version = $version;
        $this->key = $key;
        $this->resourceType = $resourceType;
    }

    /**
     * <p>The version of this resource.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>The unique key of the import sink.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>The type of import resource sent to this import sink.</p>
     *
     * @return null|string
     */
    public function getResourceType()
    {
        if (is_null($this->resourceType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RESOURCE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->resourceType = (string) $data;
        }

        return $this->resourceType;
    }


    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void
    {
        $this->resourceType = $resourceType;
    }
}
