<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetParcelCustomTypeAction extends OrderUpdateAction
{
    public const FIELD_PARCEL_ID = 'parcelId';
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * @return null|string
     */
    public function getParcelId();

    /**
     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * @return null|FieldContainer
     */
    public function getFields();

    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void;

    /**
     * @param ?TypeResourceIdentifier $type
     */
    public function setType(?TypeResourceIdentifier $type): void;

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void;
}
