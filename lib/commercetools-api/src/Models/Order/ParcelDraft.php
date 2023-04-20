<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ParcelDraft extends JsonObject
{
    public const FIELD_MEASUREMENTS = 'measurements';
    public const FIELD_TRACKING_DATA = 'trackingData';
    public const FIELD_ITEMS = 'items';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_KEY = 'key';

    /**

     * @return null|ParcelMeasurements
     */
    public function getMeasurements();

    /**

     * @return null|TrackingData
     */
    public function getTrackingData();

    /**
     * <p>The delivery items contained in this parcel.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * <p>Custom Fields of this parcel.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>User-defined unique identifier of the Parcel.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?ParcelMeasurements $measurements
     */
    public function setMeasurements(?ParcelMeasurements $measurements): void;

    /**
     * @param ?TrackingData $trackingData
     */
    public function setTrackingData(?TrackingData $trackingData): void;

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
