<?php

class CustomerOrderStatusType
{
    const __default = 'ready';
    const ready = 'ready';
    const picked = 'picked';
    const picking = 'picking';
    const packed = 'packed';
    const packing = 'packing';
    const shipped = 'shipped';
    const partiallyshipped = 'partiallyshipped';
    const dropshipdetected = 'dropshipdetected';
    const dropshipemailsent = 'dropshipemailsent';
    const advanceddropshipemailsent = 'advanceddropshipemailsent';
    const DeliveryAddressChange = 'DeliveryAddressChange';
    const BillingAddressChange = 'BillingAddressChange';
    const ShippingRuleChange = 'ShippingRuleChange';
    const StatusDescriptionChange = 'StatusDescriptionChange';
    const DispatchDateChange = 'DispatchDateChange';
    const Paid = 'Paid';
    const Created = 'Created';
    const Edited = 'Edited';
    const Unallocated = 'Unallocated';
    const Cancelled = 'Cancelled';
    const Allocated = 'Allocated';
    const Returned = 'Returned';
    const Ignored = 'Ignored';
    const Refunded = 'Refunded';
    const Dispatched = 'Dispatched';
    const PartaillyDispatched = 'PartaillyDispatched';


}
