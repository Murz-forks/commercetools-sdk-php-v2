<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\StandalonePrice\StandalonePriceUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StandalonePriceUpdateActionCollection<StandalonePriceSetValidFromAction>
 * @method StandalonePriceSetValidFromAction current()
 * @method StandalonePriceSetValidFromAction end()
 * @method StandalonePriceSetValidFromAction at($offset)
 */
class StandalonePriceSetValidFromActionCollection extends StandalonePriceUpdateActionCollection
{
    /**
     * @psalm-assert StandalonePriceSetValidFromAction $value
     * @psalm-param StandalonePriceSetValidFromAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetValidFromActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetValidFromAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetValidFromAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetValidFromAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetValidFromAction $data */
                $data = StandalonePriceSetValidFromActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
