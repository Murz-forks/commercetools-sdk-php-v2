<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Common\Address;

interface OrderSetShippingAddressAction extends OrderUpdateAction {
    const FIELD_ADDRESS = 'address';

    /**
     * @return Address
     */
    public function getAddress();

    /**
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address);

}
