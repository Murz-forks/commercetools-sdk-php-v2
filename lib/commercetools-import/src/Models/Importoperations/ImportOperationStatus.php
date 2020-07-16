<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;

interface ImportOperationStatus extends JsonObject
{
    public const FIELD_OPERATION_ID = 'operationId';
    public const FIELD_STATE = 'state';
    public const FIELD_ERRORS = 'errors';

    /**
     * <p>Id of the import operation.</p>
     *
     * @return null|string
     */
    public function getOperationId();

    /**
     * <p>Validation state of the import operation.</p>
     *
     * @return null|string
     */
    public function getState();

    /**
     * <p>Validation errors for the import operation.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    /**
     * @param ?string $operationId
     */
    public function setOperationId(?string $operationId): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;

    /**
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void;
}
