<?php


namespace Commercetools\IntegrationTest\migration;


use Commercetools\Api\Models\Category\Category as CategoryV2;
use Commercetools\Api\Models\Category\CategoryChangeNameAction;
use Commercetools\Api\Models\Category\CategoryChangeNameActionModel;
use Commercetools\Api\Models\Category\CategoryUpdateActionCollection;
use Commercetools\Api\Models\Category\CategoryUpdateBuilder;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\MapperSequence;
use Commercetools\Core\Builder\Request\RequestBuilder;
use Commercetools\Core\Model\Category\Category as CategoryV1;
use Commercetools\Core\Model\Common\LocalizedString;
use Commercetools\Core\Request\Categories\Command\CategoryChangeNameAction as CategoryChangeNameActionV1;

class UpdateCommand extends MigrationService implements MigrationInterface
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function v1()
    {
        $client = $this->clientV1();

        /** @var CategoryV1 $category */
        $request = RequestBuilder::of()->categories()->update($category)
                    ->addAction(CategoryChangeNameActionV1::ofName(
                            LocalizedString::ofLangAndText('en', 'name')
                        )
                    );
        $response = $this->executeV1($client, $request);
        $result = $request->mapFromResponse($response);

        return $result;
    }

    /**
     * @throws \Commercetools\Exception\InvalidArgumentException
     */
    public function v2()
    {
        $builder = $this->builderV2();

        $newName = LocalizedStringBuilder::of()->put('en', "new-name")->build();
        $updateAction = new CategoryChangeNameActionModel();
        $updateAction->setName($newName);
        $updateActionCollection = new CategoryUpdateActionCollection();
        $updateActionCollection->add($updateAction);
        /** @var CategoryV2 $category */
        $request = $builder->with()->categories()->withId($category->getId())
            ->post(
                CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build()
            );

        return $request->execute();
    }
}
