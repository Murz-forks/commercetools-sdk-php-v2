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
- added property `parcelKey` to type `StagedOrderAddParcelToDeliveryAction`
- added property `parcelKey` to type `StagedOrderRemoveParcelFromDeliveryAction`
- added property `parcelKey` to type `StagedOrderSetParcelCustomFieldAction`
- added property `parcelKey` to type `StagedOrderSetParcelCustomTypeAction`
- added property `parcelKey` to type `StagedOrderSetParcelItemsAction`
- added property `parcelKey` to type `StagedOrderSetParcelMeasurementsAction`
- added property `parcelKey` to type `StagedOrderSetParcelTrackingDataAction`
- added property `shippingKey` to type `Order`
- added property `shippingCustomFields` to type `Order`
- added property `key` to type `Parcel`
- added property `key` to type `ParcelDraft`
- added property `parcelKey` to type `OrderAddParcelToDeliveryAction`
- added property `parcelKey` to type `OrderRemoveParcelFromDeliveryAction`
- added property `parcelKey` to type `OrderSetParcelCustomFieldAction`
- added property `parcelKey` to type `OrderSetParcelCustomTypeAction`
- added property `parcelKey` to type `OrderSetParcelItemsAction`
- added property `parcelKey` to type `OrderSetParcelMeasurementsAction`
- added property `parcelKey` to type `OrderSetParcelTrackingDataAction`
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

- changed property `parcelId` of type `StagedOrderRemoveParcelFromDeliveryAction` to be optional
- changed property `parcelId` of type `StagedOrderSetParcelCustomFieldAction` to be optional
- changed property `parcelId` of type `StagedOrderSetParcelCustomTypeAction` to be optional
- changed property `parcelId` of type `StagedOrderSetParcelItemsAction` to be optional
- changed property `parcelId` of type `StagedOrderSetParcelMeasurementsAction` to be optional
- changed property `parcelId` of type `StagedOrderSetParcelTrackingDataAction` to be optional
- changed property `parcelId` of type `OrderRemoveParcelFromDeliveryAction` to be optional
- changed property `parcelId` of type `OrderSetParcelCustomFieldAction` to be optional
- changed property `parcelId` of type `OrderSetParcelCustomTypeAction` to be optional
- changed property `parcelId` of type `OrderSetParcelItemsAction` to be optional
- changed property `parcelId` of type `OrderSetParcelMeasurementsAction` to be optional
- changed property `parcelId` of type `OrderSetParcelTrackingDataAction` to be optional
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
- added type `ProductSelectionMode`
</details>

