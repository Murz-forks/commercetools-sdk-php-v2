<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLEnumKeyDoesNotExistErrorModel extends JsonObjectModel implements GraphQLEnumKeyDoesNotExistError
{
    public const DISCRIMINATOR_VALUE = 'EnumKeyDoesNotExist';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $conflictingEnumKey;

    /**
     *
     * @var ?string
     */
    protected $conflictingAttributeName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $conflictingEnumKey = null,
        ?string $conflictingAttributeName = null,
        ?string $code = null
    ) {
        $this->conflictingEnumKey = $conflictingEnumKey;
        $this->conflictingAttributeName = $conflictingAttributeName;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>Conflicting enum key.</p>
     *
     *
     * @return null|string
     */
    public function getConflictingEnumKey()
    {
        if (is_null($this->conflictingEnumKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONFLICTING_ENUM_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->conflictingEnumKey = (string) $data;
        }

        return $this->conflictingEnumKey;
    }

    /**
     * <p>Name of the conflicting Attribute.</p>
     *
     *
     * @return null|string
     */
    public function getConflictingAttributeName()
    {
        if (is_null($this->conflictingAttributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONFLICTING_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->conflictingAttributeName = (string) $data;
        }

        return $this->conflictingAttributeName;
    }


    /**
     * @param ?string $conflictingEnumKey
     */
    public function setConflictingEnumKey(?string $conflictingEnumKey): void
    {
        $this->conflictingEnumKey = $conflictingEnumKey;
    }

    /**
     * @param ?string $conflictingAttributeName
     */
    public function setConflictingAttributeName(?string $conflictingAttributeName): void
    {
        $this->conflictingAttributeName = $conflictingAttributeName;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
