**Api changes**

<details>
<summary>Added Type(s)</summary>

- added type `DiscountedLineItemPortionDraft`
- added type `DiscountCodeSetKeyAction`
- added type `DiscountCodeCreatedMessage`
- added type `DiscountCodeDeletedMessage`
- added type `DiscountCodeKeySetMessage`
- added type `DiscountCodeCreatedMessagePayload`
- added type `DiscountCodeDeletedMessagePayload`
- added type `DiscountCodeKeySetMessagePayload`
</details>


<details>
<summary>Changed Property(s)</summary>

- :warning: changed property `includedDiscounts` of type `DiscountedLineItemPriceDraft` from type `DiscountedLineItemPortion[]` to `DiscountedLineItemPortionDraft[]`
</details>


<details>
<summary>Added Property(s)</summary>

- added property `key` to type `DiscountCode`
- added property `key` to type `DiscountCodeDraft`
</details>


<details>
<summary>Added Method(s)</summary>

- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->get()`
- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->head()`
- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->post()`
- added method `$apiRoot->withProjectKey()->discountCodes()->withKey()->delete()`
</details>


<details>
<summary>Added Resource(s)</summary>

- added resource `/{projectKey}/discount-codes/key={key}`
</details>

