<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\PagedQueryResponseModel;

use Commercetools\Types\PagedQueryResponse;
use Commercetools\Types\Common\ResourceCollection;

class ShippingMethodPagedQueryResponseModel extends PagedQueryResponseModel implements ShippingMethodPagedQueryResponse {
    /**
     * @var ShippingMethodCollection
     */
    protected $results;

    /**
     * @return ShippingMethodCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(ShippingMethodPagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ShippingMethodCollection::class, null);
            }
            $value = $this->mapData(ShippingMethodCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param ResourceCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        $this->results = $results;

        return $this;
    }

}
