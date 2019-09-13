<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethods;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyShippingMethodsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyShippingMethodsGet_withShippingMethodId' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get()
                        ->withShippingMethodId('shipping-methodId');
                },
                'get',
                '/{projectKey}/shipping-methods?shipping-methodId=shipping-methodId',
            ],
            'ByProjectKeyShippingMethodsGet_withCountry' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get()
                        ->withCountry('country');
                },
                'get',
                '/{projectKey}/shipping-methods?country=country',
            ],
            'ByProjectKeyShippingMethodsGet_withState' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get()
                        ->withState('state');
                },
                'get',
                '/{projectKey}/shipping-methods?state=state',
            ],
            'ByProjectKeyShippingMethodsGet_withCurrency' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get()
                        ->withCurrency('currency');
                },
                'get',
                '/{projectKey}/shipping-methods?currency=currency',
            ],
            'ByProjectKeyShippingMethodsGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '/{projectKey}/shipping-methods?expand=expand',
            ],
            'ByProjectKeyShippingMethodsGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '/{projectKey}/shipping-methods?where=where',
            ],
            'ByProjectKeyShippingMethodsGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '/{projectKey}/shipping-methods?sort=sort',
            ],
            'ByProjectKeyShippingMethodsGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '/{projectKey}/shipping-methods?limit=limit',
            ],
            'ByProjectKeyShippingMethodsGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '/{projectKey}/shipping-methods?offset=offset',
            ],
            'ByProjectKeyShippingMethodsGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/shipping-methods?withTotal=withTotal',
            ],
            'ByProjectKeyShippingMethodsGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                'get',
                '/{projectKey}/shipping-methods',
            ],
            'ByProjectKeyShippingMethodsPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '/{projectKey}/shipping-methods?expand=expand',
            ],
            'ByProjectKeyShippingMethodsPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                'post',
                '/{projectKey}/shipping-methods',
            ]
        ];
    }
    
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}