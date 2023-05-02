<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class OrderSearchDateRangeValueModel extends JsonObjectModel implements OrderSearchDateRangeValue
{
    /**
     *
     * @var ?string
     */
    protected $field;

    /**
     *
     * @var ?int
     */
    protected $boost;

    /**
     *
     * @var ?string
     */
    protected $customType;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $gte;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lte;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?int $boost = null,
        ?string $customType = null,
        ?DateTimeImmutable $gte = null,
        ?DateTimeImmutable $lte = null
    ) {
        $this->field = $field;
        $this->boost = $boost;
        $this->customType = $customType;
        $this->gte = $gte;
        $this->lte = $lte;
    }

    /**
     *
     * @return null|string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD);
            if (is_null($data)) {
                return null;
            }
            $this->field = (string) $data;
        }

        return $this->field;
    }

    /**
     *
     * @return null|int
     */
    public function getBoost()
    {
        if (is_null($this->boost)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_BOOST);
            if (is_null($data)) {
                return null;
            }
            $this->boost = (int) $data;
        }

        return $this->boost;
    }

    /**
     *
     * @return null|string
     */
    public function getCustomType()
    {
        if (is_null($this->customType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOM_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->customType = (string) $data;
        }

        return $this->customType;
    }

    /**
     *
     * @return null|DateTimeImmutable
     */
    public function getGte()
    {
        if (is_null($this->gte)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_GTE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->gte = $data;
        }

        return $this->gte;
    }

    /**
     *
     * @return null|DateTimeImmutable
     */
    public function getLte()
    {
        if (is_null($this->lte)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LTE);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lte = $data;
        }

        return $this->lte;
    }


    /**
     * @param ?string $field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * @param ?int $boost
     */
    public function setBoost(?int $boost): void
    {
        $this->boost = $boost;
    }

    /**
     * @param ?string $customType
     */
    public function setCustomType(?string $customType): void
    {
        $this->customType = $customType;
    }

    /**
     * @param ?DateTimeImmutable $gte
     */
    public function setGte(?DateTimeImmutable $gte): void
    {
        $this->gte = $gte;
    }

    /**
     * @param ?DateTimeImmutable $lte
     */
    public function setLte(?DateTimeImmutable $lte): void
    {
        $this->lte = $lte;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[OrderSearchDateRangeValue::FIELD_GTE]) && $data[OrderSearchDateRangeValue::FIELD_GTE] instanceof \DateTimeImmutable) {
            $data[OrderSearchDateRangeValue::FIELD_GTE] = $data[OrderSearchDateRangeValue::FIELD_GTE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[OrderSearchDateRangeValue::FIELD_LTE]) && $data[OrderSearchDateRangeValue::FIELD_LTE] instanceof \DateTimeImmutable) {
            $data[OrderSearchDateRangeValue::FIELD_LTE] = $data[OrderSearchDateRangeValue::FIELD_LTE]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
