**Api changes**

<details>
<summary>Added Property(s)</summary>

- added property `attributedTo` to type `CreatedBy`
- added property `attributedTo` to type `LastModifiedBy`
- added property `postFilter` to type `ProductSearchRequest`
</details>


<details>
<summary>Required Property(s)</summary>

- :warning: changed property `stores` of type `BusinessUnitSetStoresAction` to be required
- :warning: changed property `stores` of type `CartDiscountSetStoresAction` to be required
- :warning: changed property `stores` of type `Customer` to be required
- :warning: changed property `stores` of type `CustomerSetStoresAction` to be required
- changed property `isOnStock` of type `ProductVariantAvailability` to be optional
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `value` of type `DirectDiscountDraft` from type `CartDiscountValue` to `CartDiscountValueDraft`
- :warning: changed property `custom` of type `MyBusinessUnitDraft` from type `CustomFields` to `CustomFieldsDraft`
- :warning: changed property `custom` of type `MyCompanyDraft` from type `CustomFields` to `CustomFieldsDraft`
- :warning: changed property `custom` of type `MyDivisionDraft` from type `CustomFields` to `CustomFieldsDraft`
- :warning: changed property `totalPrice` of type `OrderLineItemDiscountSetMessage` from type `Money` to `CentPrecisionMoney`
- :warning: changed property `value` of type `StandalonePriceValueChangedMessage` from type `Money` to `TypedMoney`
- :warning: changed property `oldValue` of type `StandalonePriceValueChangedMessage` from type `Money` to `TypedMoney`
- :warning: changed property `totalPrice` of type `OrderLineItemDiscountSetMessagePayload` from type `Money` to `CentPrecisionMoney`
- :warning: changed property `value` of type `StandalonePriceValueChangedMessagePayload` from type `Money` to `TypedMoney`
- :warning: changed property `oldValue` of type `StandalonePriceValueChangedMessagePayload` from type `Money` to `TypedMoney`
- :warning: changed property `price` of type `ShippingRate` from type `TypedMoney` to `CentPrecisionMoney`
- :warning: changed property `freeAbove` of type `ShippingRate` from type `TypedMoney` to `CentPrecisionMoney`
</details>


<details>
<summary>Removed Method(s)</summary>

- :warning: removed method `$apiRoot->withProjectKey()->products()->search()->head()`
</details>


<details>
<summary>Added Type(s)</summary>

- added type `Attribution`
- added type `AttributionSource`
- added type `StagedOrderSetShippingCustomFieldAction`
- added type `StagedOrderSetShippingCustomTypeAction`
- added type `OrderSetShippingCustomFieldAction`
- added type `OrderSetShippingCustomTypeAction`
</details>

**Import changes**

<details>
<summary>Added Property(s)</summary>

- added property `staged` to type `PriceImport`
- added property `staged` to type `ProductVariantImport`
</details>


<details>
<summary>MarkDeprecated Property(s)</summary>

- marked property `PriceImport::publish` as deprecated
- marked property `ProductVariantImport::publish` as deprecated
</details>


<details>
<summary>Added Resource(s)</summary>

- added resource `/{projectKey}/discount-codes`
- added resource `/{projectKey}/discount-codes/import-containers`
- added resource `/{projectKey}/discount-codes/import-containers/{importContainerKey}`
</details>


<details>
<summary>Added Method(s)</summary>

- added method `$apiRoot->withProjectKeyValue()->discountCodes()->importContainers()->withImportContainerKeyValue()->post()`
</details>


<details>
<summary>Added Enum(s)</summary>

- added enum `discount-code` to type `ImportResourceType`
</details>


<details>
<summary>Added Type(s)</summary>

- added type `DiscountCodeImportRequest`
- added type `DiscountCodeImport`
</details>

