<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Search\SearchQuery;
use Commercetools\Api\Models\Search\SearchSortingCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchRequest extends JsonObject
{
    public const FIELD_QUERY = 'query';
    public const FIELD_SORT = 'sort';
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_MARK_MATCHING_VARIANTS = 'markMatchingVariants';
    public const FIELD_PRODUCT_PROJECTION_PARAMETERS = 'productProjectionParameters';
    public const FIELD_FACETS = 'facets';
    public const FIELD_POST_FILTER = 'postFilter';

    /**
     * <p>The search query against <a href="/../api/projects/product-search#searchable-product-fields">searchable Product fields</a>.</p>
     *

     * @return null|SearchQuery
     */
    public function getQuery();

    /**
     * <p>Controls how results to your query are sorted. If not provided, the results are sorted by relevance in descending order.</p>
     *

     * @return null|SearchSortingCollection
     */
    public function getSort();

    /**
     * <p>The maximum number of search results to be returned.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>The number of search results to be skipped in the response for pagination.</p>
     *

     * @return null|int
     */
    public function getOffset();

    /**
     * <p>The search can return Products where not all Product Variants match the search criteria. If <code>true</code>, the response will include a field called <code>matchingVariants</code> that contains the <code>sku</code> of Product Variants that match the search query. If the query does not specify any variant-level criteria, <code>matchingVariants</code> will be null signifying that all Product Variants are a match.</p>
     *

     * @return null|bool
     */
    public function getMarkMatchingVariants();

    /**
     * <p>Set this field to <code>{}</code> to get the <a href="ctp:api:type:ProductProjection">ProductProjection</a> included in the <a href="ctp:api:type:ProductSearchResult">ProductSearchResult</a>.
     * Include query parameters for controlling <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> or <a href="/../api/projects/productProjections#projection-dimensions">projections</a> according to your needs.
     * If not set, the result does not include the Product Projection.</p>
     *

     * @return null|ProductSearchProjectionParams
     */
    public function getProductProjectionParameters();

    /**
     * <p>Set this field to request <a href="/../api/projects/product-search#facets">facets</a>.</p>
     *

     * @return null|ProductSearchFacetExpressionCollection
     */
    public function getFacets();

    /**
     * <p>Specify an additional filter on the result of the <code>query</code> after the API calculated <code>facets</code>.
     * This feature assists you in implementing faceted search.</p>
     *

     * @return null|SearchQuery
     */
    public function getPostFilter();

    /**
     * @param ?SearchQuery $query
     */
    public function setQuery(?SearchQuery $query): void;

    /**
     * @param ?SearchSortingCollection $sort
     */
    public function setSort(?SearchSortingCollection $sort): void;

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?bool $markMatchingVariants
     */
    public function setMarkMatchingVariants(?bool $markMatchingVariants): void;

    /**
     * @param ?ProductSearchProjectionParams $productProjectionParameters
     */
    public function setProductProjectionParameters(?ProductSearchProjectionParams $productProjectionParameters): void;

    /**
     * @param ?ProductSearchFacetExpressionCollection $facets
     */
    public function setFacets(?ProductSearchFacetExpressionCollection $facets): void;

    /**
     * @param ?SearchQuery $postFilter
     */
    public function setPostFilter(?SearchQuery $postFilter): void;
}
