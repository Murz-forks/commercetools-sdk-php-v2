<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerGroupSetCustomFieldAction extends CustomerGroupUpdateAction
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getName();

    /**
     * <p>Value must be of type <a href="/../api/projects/custom-fields#value">Value</a>.
     * If <code>value</code> is absent or <code>null</code>, this field will be removed if it exists.
     * Trying to remove a field that does not exist will fail with an <a href="/../api/errors#400-bad-request-1">InvalidOperation</a> error.
     * If <code>value</code> is provided, set the <code>value</code> of the field defined by the <code>name</code>.</p>
     *
     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
