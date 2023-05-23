<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\AssociateRole\AssociateRoleResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRoleAssignmentDraft extends JsonObject
{
    public const FIELD_ASSOCIATE_ROLE = 'associateRole';
    public const FIELD_INHERITANCE = 'inheritance';

    /**
     * <p>Role the Associate holds within a Business Unit.</p>
     *

     * @return null|AssociateRoleResourceIdentifier
     */
    public function getAssociateRole();

    /**
     * <p>Determines whether the AssociateRoleAssignment can be inherited by child Business Units.</p>
     *

     * @return null|string
     */
    public function getInheritance();

    /**
     * @param ?AssociateRoleResourceIdentifier $associateRole
     */
    public function setAssociateRole(?AssociateRoleResourceIdentifier $associateRole): void;

    /**
     * @param ?string $inheritance
     */
    public function setInheritance(?string $inheritance): void;
}
