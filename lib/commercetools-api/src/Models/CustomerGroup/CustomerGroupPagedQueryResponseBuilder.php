<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerGroupPagedQueryResponse>
 */
final class CustomerGroupPagedQueryResponseBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $offset;

    /**
     * @var ?int
     */
    private $limit;

    /**
     * @var ?int
     */
    private $count;

    /**
     * @var ?int
     */
    private $total;

    /**
     * @var ?CustomerGroupCollection
     */
    private $results;

    /**
     * <p>The offset supplied by the client or the server default.
     * It is the number of elements skipped, not a page number.</p>
     *
     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>The number of results requested in the query request.</p>
     *
     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>The actual number of results returned.</p>
     *
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>The total number of results matching the query.
     * This number is an estimation that is not <a href="/general-concepts#strong-consistency">strongly consistent</a>.
     * This field is returned by default.
     * For improved performance, calculating this field can be deactivated by using the query parameter <code>withTotal=false</code>.
     * When the results are filtered with a <a href="/predicates/query">Query Predicate</a>, <code>total</code> is subject to a <a href="/contract#queries">limit</a>.</p>
     *
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>The array of <a href="ctp:api:type:CustomerGroup">CustomerGroups</a> matching the query.</p>
     *
     * @return null|CustomerGroupCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param ?int $total
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param ?CustomerGroupCollection $results
     * @return $this
     */
    public function withResults(?CustomerGroupCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): CustomerGroupPagedQueryResponse
    {
        return new CustomerGroupPagedQueryResponseModel(
            $this->offset,
            $this->limit,
            $this->count,
            $this->total,
            $this->results
        );
    }

    public static function of(): CustomerGroupPagedQueryResponseBuilder
    {
        return new self();
    }
}
