<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<RemoveParcelFromDeliveryChange>
 * @method RemoveParcelFromDeliveryChange current()
 * @method RemoveParcelFromDeliveryChange at($offset)
 */
class RemoveParcelFromDeliveryChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveParcelFromDeliveryChange $value
     * @psalm-param RemoveParcelFromDeliveryChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveParcelFromDeliveryChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveParcelFromDeliveryChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveParcelFromDeliveryChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveParcelFromDeliveryChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveParcelFromDeliveryChange $data */
                $data = RemoveParcelFromDeliveryChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
