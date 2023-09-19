<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApprovalRuleSetNameAction>
 */
final class ApprovalRuleSetNameActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**
     * <p>New name to set for the Approval Rule.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }


    public function build(): ApprovalRuleSetNameAction
    {
        return new ApprovalRuleSetNameActionModel(
            $this->name
        );
    }

    public static function of(): ApprovalRuleSetNameActionBuilder
    {
        return new self();
    }
}
