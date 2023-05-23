<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssociateRoleChangeBuyerAssignableActionModel extends JsonObjectModel implements AssociateRoleChangeBuyerAssignableAction
{
    public const DISCRIMINATOR_VALUE = 'changeBuyerAssignable';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?bool
     */
    protected $buyerAssignable;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $buyerAssignable = null,
        ?string $action = null
    ) {
        $this->buyerAssignable = $buyerAssignable;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>The new value of the <code>buyerAssignable</code> field of the AssociateRole.</p>
     *
     *
     * @return null|bool
     */
    public function getBuyerAssignable()
    {
        if (is_null($this->buyerAssignable)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_BUYER_ASSIGNABLE);
            if (is_null($data)) {
                return null;
            }
            $this->buyerAssignable = (bool) $data;
        }

        return $this->buyerAssignable;
    }


    /**
     * @param ?bool $buyerAssignable
     */
    public function setBuyerAssignable(?bool $buyerAssignable): void
    {
        $this->buyerAssignable = $buyerAssignable;
    }
}
