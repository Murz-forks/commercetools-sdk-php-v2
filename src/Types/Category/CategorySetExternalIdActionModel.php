<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Category\CategoryUpdateActionModel;

class CategorySetExternalIdActionModel extends CategoryUpdateActionModel implements CategorySetExternalIdAction {
    const DISCRIMINATOR_VALUE = 'setExternalId';

    /**
     * @var string
     */
    protected $externalId;

    /**
     * @return string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            $value = $this->raw(CategorySetExternalIdAction::FIELD_EXTERNAL_ID);
            $value = (string)$value;
            $this->externalId = $value;
        }
        return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId)
    {
        $this->externalId = (string)$externalId;

        return $this;
    }

}
