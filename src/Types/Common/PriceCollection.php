<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface PriceCollection extends Collection {
    /**
     * @param $index
     * @return Price
     */
    public function at($index);

    /**
     * @return Price
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Price
     */
    public function map($data, $index);
}
