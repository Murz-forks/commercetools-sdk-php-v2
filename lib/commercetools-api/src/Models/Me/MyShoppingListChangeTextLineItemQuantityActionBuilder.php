<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyShoppingListChangeTextLineItemQuantityAction>
 */
final class MyShoppingListChangeTextLineItemQuantityActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $textLineItemId;

    /**

     * @var ?int
     */
    private $quantity;

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update.</p>
     *

     * @return null|string
     */
    public function getTextLineItemId()
    {
        return $this->textLineItemId;
    }

    /**
     * <p>New value to set. If <code>0</code>, the TextLineItem is removed from the ShoppingList.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param ?string $textLineItemId
     * @return $this
     */
    public function withTextLineItemId(?string $textLineItemId)
    {
        $this->textLineItemId = $textLineItemId;

        return $this;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


    public function build(): MyShoppingListChangeTextLineItemQuantityAction
    {
        return new MyShoppingListChangeTextLineItemQuantityActionModel(
            $this->textLineItemId,
            $this->quantity
        );
    }

    public static function of(): MyShoppingListChangeTextLineItemQuantityActionBuilder
    {
        return new self();
    }
}
