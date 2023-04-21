**Api changes**

<details>
<summary>Added Enum(s)</summary>

- added enum `direct-discount` to type `ReferenceTypeId`
</details>


<details>
<summary>Added Property(s)</summary>

- added property `shippingKey` to type `Cart`
- added property `shippingCustomFields` to type `Cart`
- added property `shippingKey` to type `StagedOrder`
- added property `shippingCustomFields` to type `StagedOrder`
- added property `shippingKey` to type `Order`
- added property `shippingCustomFields` to type `Order`
- added property `field` to type `OrderSearchSorting`
- added property `language` to type `OrderSearchSorting`
- added property `order` to type `OrderSearchSorting`
- added property `mode` to type `OrderSearchSorting`
- added property `filter` to type `OrderSearchSorting`
- added property `mode` to type `ProductSelection`
- added property `mode` to type `ProductSelectionDraft`
- added property `key` to type `TaxRate`
- added property `key` to type `TaxRateDraft`
- added property `taxRateKey` to type `TaxCategoryRemoveTaxRateAction`
- added property `taxRateKey` to type `TaxCategoryReplaceTaxRateAction`
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `discount` of type `DiscountedLineItemPortion` from type `CartDiscountReference` to `Reference`
- :warning: changed property `productSelection` of type `ProductSelectionCreatedMessage` from type `ProductSelectionType` to `ProductSelection`
- :warning: changed property `productSelection` of type `ProductSelectionCreatedMessagePayload` from type `ProductSelectionType` to `ProductSelection`
</details>


<details>
<summary>MarkDeprecated Property(s)</summary>

- marked property `IndividualExclusionProductSelectionType::type` as deprecated
- marked property `IndividualProductSelectionType::type` as deprecated
- marked property `ProductSelection::type` as deprecated
- marked property `ProductSelectionDraft::type` as deprecated
- marked property `ProductSelectionType::type` as deprecated
</details>


<details>
<summary>Required Property(s)</summary>

- changed property `type` of type `ProductSelection` to be optional
- changed property `taxRateId` of type `TaxCategoryRemoveTaxRateAction` to be optional
- changed property `taxRateId` of type `TaxCategoryReplaceTaxRateAction` to be optional
</details>


<details>
<summary>MarkDeprecated Type(s)</summary>

- marked type `IndividualExclusionProductSelectionType` as deprecated
- marked type `IndividualProductSelectionType` as deprecated
- marked type `ProductSelectionType` as deprecated
- marked type `ProductSelectionTypeEnum` as deprecated
</details>


<details>
<summary>Added Type(s)</summary>

- added type `DirectDiscountReference`
- added type `OrderSearchAndExpression`
- added type `OrderSearchAnyValue`
- added type `OrderSearchCompoundExpression`
- added type `OrderSearchDateRangeExpression`
- added type `OrderSearchDateRangeValue`
- added type `OrderSearchExactExpression`
- added type `OrderSearchExistsExpression`
- added type `OrderSearchFilterExpression`
- added type `OrderSearchFullTextExpression`
- added type `OrderSearchFullTextValue`
- added type `OrderSearchLongRangeExpression`
- added type `OrderSearchLongRangeValue`
- added type `OrderSearchMatchType`
- added type `OrderSearchNotExpression`
- added type `OrderSearchNumberRangeExpression`
- added type `OrderSearchNumberRangeValue`
- added type `OrderSearchOrExpression`
- added type `OrderSearchPrefixExpression`
- added type `OrderSearchQueryExpression`
- added type `OrderSearchQueryExpressionValue`
- added type `OrderSearchSortMode`
- added type `OrderSearchSortOrder`
- added type `OrderSearchStringValue`
- added type `OrderSearchWildCardExpression`
- added type `ProductSelectionMode`
</details>

