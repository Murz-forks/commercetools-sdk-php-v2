<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use stdClass;

/**
 * @extends ErrorObjectCollection<RequiredFieldError>
 * @method RequiredFieldError current()
 * @method RequiredFieldError at($offset)
 */
class RequiredFieldErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert RequiredFieldError $value
     * @psalm-param RequiredFieldError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RequiredFieldErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof RequiredFieldError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RequiredFieldError
     */
    protected function mapper()
    {
        return function (int $index): ?RequiredFieldError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RequiredFieldError $data */
                $data = RequiredFieldErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
