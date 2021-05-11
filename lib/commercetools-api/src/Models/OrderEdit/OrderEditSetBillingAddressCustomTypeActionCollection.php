<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\OrderEdit\OrderEditUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderEditUpdateActionCollection<OrderEditSetBillingAddressCustomTypeAction>
 * @method OrderEditSetBillingAddressCustomTypeAction current()
 * @method OrderEditSetBillingAddressCustomTypeAction at($offset)
 */
class OrderEditSetBillingAddressCustomTypeActionCollection extends OrderEditUpdateActionCollection
{
    /**
     * @psalm-assert OrderEditSetBillingAddressCustomTypeAction $value
     * @psalm-param OrderEditSetBillingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetBillingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetBillingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetBillingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditSetBillingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditSetBillingAddressCustomTypeAction $data */
                $data = OrderEditSetBillingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
