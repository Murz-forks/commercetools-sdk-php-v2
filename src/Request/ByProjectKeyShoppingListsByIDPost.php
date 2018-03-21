<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\ApiRequest;
use Commercetools\Types\ShoppingList\ShoppingList;

use Commercetools\Base\ResultMapper;
use Psr\Http\Message\ResponseInterface;
use Commercetools\Types\ShoppingList\ShoppingListUpdate;


class ByProjectKeyShoppingListsByIDPost extends ApiRequest
{
    const RESULT_TYPE = ShoppingList::class;

    /**
     * @param $projectKey
     * @param $ID
     * @param $body
     * @param array $headers
     */
    public function __construct($projectKey, $ID, ShoppingListUpdate $body, array $headers = [])
    {
        $uri = sprintf('/%s/shopping-lists/%s', $projectKey, $ID);
        parent::__construct('post', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @param ResponseInterface $response
     * @param ResultMapper $mapper
     * @return ShoppingList
     */
    public function map(ResponseInterface $response, ResultMapper $mapper):  ShoppingList
    {
        return parent::map($response, $mapper);
    }

    /**
     * @param $expand
     * @return ByProjectKeyShoppingListsByIDPost
     */
    public function withExpand($expand): ByProjectKeyShoppingListsByIDPost
    {
        return $this->withQueryParam('expand', $expand);
    }

}
