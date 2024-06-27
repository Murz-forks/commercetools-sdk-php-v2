<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerPagedSearchResponse extends JsonObject
{
    public const FIELD_TOTAL = 'total';
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_RESULTS = 'results';

    /**
     * <p>Total number of results matching the query.</p>
     *

     * @return null|int
     */
    public function getTotal();

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|int
     */
    public function getOffset();

    /**
     * <p>Search result containing the Customers matching the search query.</p>
     *

     * @return null|CustomerSearchResultCollection
     */
    public function getResults();

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?CustomerSearchResultCollection $results
     */
    public function setResults(?CustomerSearchResultCollection $results): void;
}
