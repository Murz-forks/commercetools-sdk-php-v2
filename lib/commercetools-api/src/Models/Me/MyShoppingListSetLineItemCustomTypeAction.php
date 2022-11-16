<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyShoppingListSetLineItemCustomTypeAction extends MyShoppingListUpdateAction
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * <p>Unique identifier of an existing <a href="ctp:api:type:ShoppingListLineItem">ShoppingListLineItem</a> in the <a href="ctp:api:type:ShoppingList">ShoppingList</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the ShoppingListLineItem with <a href="/../api/projects/custom-fields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the ShoppingListLineItem.</p>
     *

     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> fields for the ShoppingListLineItem.</p>
     *

     * @return null|FieldContainer
     */
    public function getFields();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?TypeResourceIdentifier $type
     */
    public function setType(?TypeResourceIdentifier $type): void;

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void;
}
