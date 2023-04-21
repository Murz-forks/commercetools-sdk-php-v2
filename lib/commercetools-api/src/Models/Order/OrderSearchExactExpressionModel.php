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
final class OrderSearchExactExpressionModel extends JsonObjectModel implements OrderSearchExactExpression
{
    /**
     *
     * @var ?OrderSearchAnyValue
     */
    protected $exact;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchAnyValue $exact = null
    ) {
        $this->exact = $exact;
    }

    /**
     *
     * @return null|OrderSearchAnyValue
     */
    public function getExact()
    {
        if (is_null($this->exact)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXACT);
            if (is_null($data)) {
                return null;
            }

            $this->exact = OrderSearchAnyValueModel::of($data);
        }

        return $this->exact;
    }


    /**
     * @param ?OrderSearchAnyValue $exact
     */
    public function setExact(?OrderSearchAnyValue $exact): void
    {
        $this->exact = $exact;
    }
}
