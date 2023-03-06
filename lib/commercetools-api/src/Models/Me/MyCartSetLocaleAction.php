<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartSetLocaleAction extends MyCartUpdateAction
{
    public const FIELD_LOCALE = 'locale';

    /**
     * <p>Value to set.
     * Must be one of the <a href="ctp:api:type:Project">Project</a>'s <code>languages</code>.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;
}
