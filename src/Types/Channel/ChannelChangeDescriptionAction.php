<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Common\LocalizedString;

interface ChannelChangeDescriptionAction extends ChannelUpdateAction {
    const FIELD_DESCRIPTION = 'description';

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

}
