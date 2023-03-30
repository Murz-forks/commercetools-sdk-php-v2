<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLObjectNotFoundError>
 */
final class GraphQLObjectNotFoundErrorBuilder implements Builder
{
    public function build(): GraphQLObjectNotFoundError
    {
        return new GraphQLObjectNotFoundErrorModel(
        );
    }

    public static function of(): GraphQLObjectNotFoundErrorBuilder
    {
        return new self();
    }
}
