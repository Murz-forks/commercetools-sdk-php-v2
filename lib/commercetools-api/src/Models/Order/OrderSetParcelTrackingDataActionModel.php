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
use stdClass;

/**
 * @internal
 */
final class OrderSetParcelTrackingDataActionModel extends JsonObjectModel implements OrderSetParcelTrackingDataAction
{
    public const DISCRIMINATOR_VALUE = 'setParcelTrackingData';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $parcelId;

    /**
     *
     * @var ?string
     */
    protected $parcelKey;

    /**
     *
     * @var ?TrackingData
     */
    protected $trackingData;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $parcelId = null,
        ?string $parcelKey = null,
        ?TrackingData $trackingData = null,
        ?string $action = null
    ) {
        $this->parcelId = $parcelId;
        $this->parcelKey = $parcelKey;
        $this->trackingData = $trackingData;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> is required for this update action.</p>
     *
     *
     * @return null|string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PARCEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->parcelId = (string) $data;
        }

        return $this->parcelId;
    }

    /**
     * <p>Either <code>parcelId</code> or <code>parcelKey</code> is required for this update action.</p>
     *
     *
     * @return null|string
     */
    public function getParcelKey()
    {
        if (is_null($this->parcelKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PARCEL_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->parcelKey = (string) $data;
        }

        return $this->parcelKey;
    }

    /**
     *
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        if (is_null($this->trackingData)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TRACKING_DATA);
            if (is_null($data)) {
                return null;
            }

            $this->trackingData = TrackingDataModel::of($data);
        }

        return $this->trackingData;
    }


    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void
    {
        $this->parcelId = $parcelId;
    }

    /**
     * @param ?string $parcelKey
     */
    public function setParcelKey(?string $parcelKey): void
    {
        $this->parcelKey = $parcelKey;
    }

    /**
     * @param ?TrackingData $trackingData
     */
    public function setTrackingData(?TrackingData $trackingData): void
    {
        $this->trackingData = $trackingData;
    }
}
