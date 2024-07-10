<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitAddressCustomTypeSetMessagePayload>
 */
final class BusinessUnitAddressCustomTypeSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $customFields;

    /**

     * @var ?string
     */
    private $oldTypeId;

    /**

     * @var ?string
     */
    private $addressId;

    /**
     * <p>The Custom Fields that were set.</p>
     *

     * @return null|CustomFields
     */
    public function getCustomFields()
    {
        return $this->customFields instanceof CustomFieldsBuilder ? $this->customFields->build() : $this->customFields;
    }

    /**
     * <p><code>id</code> of the previous <a href="ctp:api:type:Type">Custom Type</a>. Absent if there was no previous Custom Type present.</p>
     *

     * @return null|string
     */
    public function getOldTypeId()
    {
        return $this->oldTypeId;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Address">Address</a> on which the Custom Field was set.</p>
     *

     * @return null|string
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * @param ?CustomFields $customFields
     * @return $this
     */
    public function withCustomFields(?CustomFields $customFields)
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * @param ?string $oldTypeId
     * @return $this
     */
    public function withOldTypeId(?string $oldTypeId)
    {
        $this->oldTypeId = $oldTypeId;

        return $this;
    }

    /**
     * @param ?string $addressId
     * @return $this
     */
    public function withAddressId(?string $addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

    /**
     * @deprecated use withCustomFields() instead
     * @return $this
     */
    public function withCustomFieldsBuilder(?CustomFieldsBuilder $customFields)
    {
        $this->customFields = $customFields;

        return $this;
    }

    public function build(): BusinessUnitAddressCustomTypeSetMessagePayload
    {
        return new BusinessUnitAddressCustomTypeSetMessagePayloadModel(
            $this->customFields instanceof CustomFieldsBuilder ? $this->customFields->build() : $this->customFields,
            $this->oldTypeId,
            $this->addressId
        );
    }

    public static function of(): BusinessUnitAddressCustomTypeSetMessagePayloadBuilder
    {
        return new self();
    }
}
