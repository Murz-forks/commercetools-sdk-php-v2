<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Types;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomFieldLocalizedStringType>
 */
final class CustomFieldLocalizedStringTypeBuilder implements Builder
{
    public function build(): CustomFieldLocalizedStringType
    {
        return new CustomFieldLocalizedStringTypeModel(
        );
    }

    public static function of(): CustomFieldLocalizedStringTypeBuilder
    {
        return new self();
    }
}
