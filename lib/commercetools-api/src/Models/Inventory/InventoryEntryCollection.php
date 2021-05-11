<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<InventoryEntry>
 * @method InventoryEntry current()
 * @method InventoryEntry at($offset)
 */
class InventoryEntryCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert InventoryEntry $value
     * @psalm-param InventoryEntry|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InventoryEntryCollection
     */
    public function add($value)
    {
        if (!$value instanceof InventoryEntry) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryEntry
     */
    protected function mapper()
    {
        return function (int $index): ?InventoryEntry {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InventoryEntry $data */
                $data = InventoryEntryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
