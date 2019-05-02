<?php


 function autoload_9484b1b78fe8ad55725f6884a4e0b5b3($class)
{
    $classes = array(
        'CCPApiOrderService' => __DIR__ .'/CCPApiOrderService.php',
        'getInvoiceSummaryForOrderID' => __DIR__ .'/getInvoiceSummaryForOrderID.php',
        'RequestObjectOfInt32Custom' => __DIR__ .'/RequestObjectOfInt32Custom.php',
        'getInvoiceSummaryForOrderIDResponse' => __DIR__ .'/getInvoiceSummaryForOrderIDResponse.php',
        'ResponseObjectOfAPIInvoiceSummary' => __DIR__ .'/ResponseObjectOfAPIInvoiceSummary.php',
        'APIInvoiceSummary' => __DIR__ .'/APIInvoiceSummary.php',
        'ArrayOfApiFaultCustom' => __DIR__ .'/ArrayOfApiFaultCustom.php',
        'ApiFaultCustom' => __DIR__ .'/ApiFaultCustom.php',
        'ErrorCodeTypeCustom' => __DIR__ .'/ErrorCodeTypeCustom.php',
        'CCPApiFaultTypeCustom' => __DIR__ .'/CCPApiFaultTypeCustom.php',
        'Search' => __DIR__ .'/Search.php',
        'RequestObjectOfApiOrderQuery' => __DIR__ .'/RequestObjectOfApiOrderQuery.php',
        'ApiOrderQuery' => __DIR__ .'/ApiOrderQuery.php',
        'ArrayOfCustomerOrderStatusType' => __DIR__ .'/ArrayOfCustomerOrderStatusType.php',
        'CustomerOrderStatusType' => __DIR__ .'/CustomerOrderStatusType.php',
        'SearchResponse' => __DIR__ .'/SearchResponse.php',
        'ResponseObjectOfApiOrderQueryResponse' => __DIR__ .'/ResponseObjectOfApiOrderQueryResponse.php',
        'ApiOrderQueryResponse' => __DIR__ .'/ApiOrderQueryResponse.php',
        'ArrayOfAPIOrder' => __DIR__ .'/ArrayOfAPIOrder.php',
        'APIOrder' => __DIR__ .'/APIOrder.php',
        'APISalesChannelCustom' => __DIR__ .'/APISalesChannelCustom.php',
        'ArrayOfDropShipSupplier' => __DIR__ .'/ArrayOfDropShipSupplier.php',
        'DropShipSupplier' => __DIR__ .'/DropShipSupplier.php',
        'FactoryPOType' => __DIR__ .'/FactoryPOType.php',
        'OrderPickStatus' => __DIR__ .'/OrderPickStatus.php',
        'ArrayOfAPIOrderItem' => __DIR__ .'/ArrayOfAPIOrderItem.php',
        'APIOrderItem' => __DIR__ .'/APIOrderItem.php',
        'GetDispatchedOrders' => __DIR__ .'/GetDispatchedOrders.php',
        'GetDispatchedOrdersResponse' => __DIR__ .'/GetDispatchedOrdersResponse.php',
        'ResponseObjectOfDispatchedOrdersList' => __DIR__ .'/ResponseObjectOfDispatchedOrdersList.php',
        'DispatchedOrdersList' => __DIR__ .'/DispatchedOrdersList.php',
        'ArrayOfOrderDetail' => __DIR__ .'/ArrayOfOrderDetail.php',
        'OrderDetail' => __DIR__ .'/OrderDetail.php',
        'ArrayOfCcpCustomerOrderItem' => __DIR__ .'/ArrayOfCcpCustomerOrderItem.php',
        'ccpCustomerOrderItem' => __DIR__ .'/ccpCustomerOrderItem.php',
        'ArrayOfCCPSaleItemMeta' => __DIR__ .'/ArrayOfCCPSaleItemMeta.php',
        'CCPSaleItemMeta' => __DIR__ .'/CCPSaleItemMeta.php',
        'ProductCustom' => __DIR__ .'/ProductCustom.php',
        'ArrayOfProductBarcodeCustom' => __DIR__ .'/ArrayOfProductBarcodeCustom.php',
        'ProductBarcodeCustom' => __DIR__ .'/ProductBarcodeCustom.php',
        'ProductBarcodeTypeCustom' => __DIR__ .'/ProductBarcodeTypeCustom.php',
        'IStatusIDCustom' => __DIR__ .'/IStatusIDCustom.php',
        'ArrayOfFactoryCustom' => __DIR__ .'/ArrayOfFactoryCustom.php',
        'FactoryCustom' => __DIR__ .'/FactoryCustom.php',
        'ArrayOfProductFactoryLinkCustom' => __DIR__ .'/ArrayOfProductFactoryLinkCustom.php',
        'ProductFactoryLinkCustom' => __DIR__ .'/ProductFactoryLinkCustom.php',
        'StatusIDCustom' => __DIR__ .'/StatusIDCustom.php',
        'ArrayOfProductOptionValueCustom' => __DIR__ .'/ArrayOfProductOptionValueCustom.php',
        'ProductOptionValueCustom' => __DIR__ .'/ProductOptionValueCustom.php',
        'ProductRangeCustom' => __DIR__ .'/ProductRangeCustom.php',
        'ProductTypeCustom' => __DIR__ .'/ProductTypeCustom.php',
        'ProductStockTypeCustom' => __DIR__ .'/ProductStockTypeCustom.php',
        'ProductDispatchIdentifierOptionCustom' => __DIR__ .'/ProductDispatchIdentifierOptionCustom.php',
        'Customer' => __DIR__ .'/Customer.php',
        'CustomerType' => __DIR__ .'/CustomerType.php',
        'CustomerOrder' => __DIR__ .'/CustomerOrder.php',
        'SalesChannelType' => __DIR__ .'/SalesChannelType.php',
        'SalesChannel' => __DIR__ .'/SalesChannel.php',
        'ArrayOfWarehouseSalesChannelLink' => __DIR__ .'/ArrayOfWarehouseSalesChannelLink.php',
        'WarehouseSalesChannelLink' => __DIR__ .'/WarehouseSalesChannelLink.php',
        'WarehouseSalesChannelLinkType' => __DIR__ .'/WarehouseSalesChannelLinkType.php',
        'OrderInAction' => __DIR__ .'/OrderInAction.php',
        'OrderOutAction' => __DIR__ .'/OrderOutAction.php',
        'Address' => __DIR__ .'/Address.php',
        'BrandCourierSelection' => __DIR__ .'/BrandCourierSelection.php',
        'ArrayOfBrandCourierSelectionProduct' => __DIR__ .'/ArrayOfBrandCourierSelectionProduct.php',
        'BrandCourierSelectionProduct' => __DIR__ .'/BrandCourierSelectionProduct.php',
        'BrandCourierSelectionProductType' => __DIR__ .'/BrandCourierSelectionProductType.php',
        'ArrayOfBrandCourierSelectionRules' => __DIR__ .'/ArrayOfBrandCourierSelectionRules.php',
        'BrandCourierSelectionRules' => __DIR__ .'/BrandCourierSelectionRules.php',
        'BrandCourierSelectionType' => __DIR__ .'/BrandCourierSelectionType.php',
        'LabelType' => __DIR__ .'/LabelType.php',
        'SendCSV' => __DIR__ .'/SendCSV.php',
        'VATEvaluationType' => __DIR__ .'/VATEvaluationType.php',
        'CourierServicesRules' => __DIR__ .'/CourierServicesRules.php',
        'APICommunicationMode' => __DIR__ .'/APICommunicationMode.php',
        'APIOrderShippingAddress' => __DIR__ .'/APIOrderShippingAddress.php',
        'APIOrderBillingAddress' => __DIR__ .'/APIOrderBillingAddress.php',
        'ArrayOfCustomerOrderDispatch' => __DIR__ .'/ArrayOfCustomerOrderDispatch.php',
        'CustomerOrderDispatch' => __DIR__ .'/CustomerOrderDispatch.php',
        'DispatchType' => __DIR__ .'/DispatchType.php',
        'ArrayOfCustomerOrderShipment' => __DIR__ .'/ArrayOfCustomerOrderShipment.php',
        'CustomerOrderShipment' => __DIR__ .'/CustomerOrderShipment.php',
        'ShippingCourierType' => __DIR__ .'/ShippingCourierType.php',
        'Country' => __DIR__ .'/Country.php',
        'createOrder' => __DIR__ .'/createOrder.php',
        'RequestObjectOfAPIOrderCreateOrderRequest' => __DIR__ .'/RequestObjectOfAPIOrderCreateOrderRequest.php',
        'APIOrderCreateOrderRequest' => __DIR__ .'/APIOrderCreateOrderRequest.php',
        'ResponseObjectOfInt32Custom' => __DIR__ .'/ResponseObjectOfInt32Custom.php',
        'createOrderResponse' => __DIR__ .'/createOrderResponse.php',
        'SubmitOrder' => __DIR__ .'/SubmitOrder.php',
        'ResponseObjectOfOrderDetail' => __DIR__ .'/ResponseObjectOfOrderDetail.php',
        'SubmitOrderResponse' => __DIR__ .'/SubmitOrderResponse.php',
        'getOrders' => __DIR__ .'/getOrders.php',
        'RequestObjectOfAPIGetOrdersRequest' => __DIR__ .'/RequestObjectOfAPIGetOrdersRequest.php',
        'APIGetOrdersRequest' => __DIR__ .'/APIGetOrdersRequest.php',
        'ResponseObjectOfListOfAPIOrder' => __DIR__ .'/ResponseObjectOfListOfAPIOrder.php',
        'getOrdersResponse' => __DIR__ .'/getOrdersResponse.php',
        'getOrderById' => __DIR__ .'/getOrderById.php',
        'ResponseObjectOfAPIOrder' => __DIR__ .'/ResponseObjectOfAPIOrder.php',
        'getOrderByIdResponse' => __DIR__ .'/getOrderByIdResponse.php',
        'getOrderDetailsById' => __DIR__ .'/getOrderDetailsById.php',
        'getOrderDetailsByIdResponse' => __DIR__ .'/getOrderDetailsByIdResponse.php',
        'getOrderDetailsByReference' => __DIR__ .'/getOrderDetailsByReference.php',
        'RequestObjectOfArrayOfString' => __DIR__ .'/RequestObjectOfArrayOfString.php',
        'ArrayOfStringCustom' => __DIR__ .'/ArrayOfStringCustom.php',
        'getOrderDetailsByReferenceResponse' => __DIR__ .'/getOrderDetailsByReferenceResponse.php',
        'getOrdersForDispatch' => __DIR__ .'/getOrdersForDispatch.php',
        'RequestObjectOfApiOrderQueryRequest' => __DIR__ .'/RequestObjectOfApiOrderQueryRequest.php',
        'ApiOrderQueryRequest' => __DIR__ .'/ApiOrderQueryRequest.php',
        'apiCustomerType' => __DIR__ .'/apiCustomerType.php',
        'getOrdersForDispatchResponse' => __DIR__ .'/getOrdersForDispatchResponse.php',
        'getPriorityOrders' => __DIR__ .'/getPriorityOrders.php',
        'getPriorityOrdersResponse' => __DIR__ .'/getPriorityOrdersResponse.php',
        'getPrintedOrders' => __DIR__ .'/getPrintedOrders.php',
        'getPrintedOrdersResponse' => __DIR__ .'/getPrintedOrdersResponse.php',
        'getNotPrintedOrders' => __DIR__ .'/getNotPrintedOrders.php',
        'getNotPrintedOrdersResponse' => __DIR__ .'/getNotPrintedOrdersResponse.php',
        'getAllocatedOrders' => __DIR__ .'/getAllocatedOrders.php',
        'getAllocatedOrdersResponse' => __DIR__ .'/getAllocatedOrdersResponse.php',
        'getUnallocatedOrders' => __DIR__ .'/getUnallocatedOrders.php',
        'getUnallocatedOrdersResponse' => __DIR__ .'/getUnallocatedOrdersResponse.php',
        'getPickedOrders' => __DIR__ .'/getPickedOrders.php',
        'getPickedOrdersResponse' => __DIR__ .'/getPickedOrdersResponse.php',
        'getNotPickedOrders' => __DIR__ .'/getNotPickedOrders.php',
        'getNotPickedOrdersResponse' => __DIR__ .'/getNotPickedOrdersResponse.php',
        'getCompletedOrdersNoOfDays' => __DIR__ .'/getCompletedOrdersNoOfDays.php',
        'getCompletedOrdersNoOfDaysResponse' => __DIR__ .'/getCompletedOrdersNoOfDaysResponse.php',
        'getUnprocessedOrders' => __DIR__ .'/getUnprocessedOrders.php',
        'getUnprocessedOrdersResponse' => __DIR__ .'/getUnprocessedOrdersResponse.php',
        'setPickListPrinted' => __DIR__ .'/setPickListPrinted.php',
        'setPickListPrintedResponse' => __DIR__ .'/setPickListPrintedResponse.php',
        'markOrderAsPicked' => __DIR__ .'/markOrderAsPicked.php',
        'markOrderAsPickedResponse' => __DIR__ .'/markOrderAsPickedResponse.php',
        'setPickStatus' => __DIR__ .'/setPickStatus.php',
        'RequestObjectOfAPISetOrderPickStatusRequest' => __DIR__ .'/RequestObjectOfAPISetOrderPickStatusRequest.php',
        'APISetOrderPickStatusRequest' => __DIR__ .'/APISetOrderPickStatusRequest.php',
        'setPickStatusResponse' => __DIR__ .'/setPickStatusResponse.php',
        'DispatchOrder' => __DIR__ .'/DispatchOrder.php',
        'RequestObjectOfAPIDispatchOrderRequest' => __DIR__ .'/RequestObjectOfAPIDispatchOrderRequest.php',
        'APIDispatchOrderRequest' => __DIR__ .'/APIDispatchOrderRequest.php',
        'ArrayOfCcpApiDispatchItem' => __DIR__ .'/ArrayOfCcpApiDispatchItem.php',
        'ccpApiDispatchItem' => __DIR__ .'/ccpApiDispatchItem.php',
        'ccpApiDispatchOptions' => __DIR__ .'/ccpApiDispatchOptions.php',
        'OverwriteOrderNoteType' => __DIR__ .'/OverwriteOrderNoteType.php',
        'ccpApiDispatchType' => __DIR__ .'/ccpApiDispatchType.php',
        'ResponseObjectOfAPIDispatchOrderResponse' => __DIR__ .'/ResponseObjectOfAPIDispatchOrderResponse.php',
        'APIDispatchOrderResponse' => __DIR__ .'/APIDispatchOrderResponse.php',
        'DispatchOrderResponse' => __DIR__ .'/DispatchOrderResponse.php',
        'GetShippingRules' => __DIR__ .'/GetShippingRules.php',
        'ResponseObjectOfListOfAPIShippingRule' => __DIR__ .'/ResponseObjectOfListOfAPIShippingRule.php',
        'ArrayOfAPIShippingRule' => __DIR__ .'/ArrayOfAPIShippingRule.php',
        'APIShippingRule' => __DIR__ .'/APIShippingRule.php',
        'GetShippingRulesResponse' => __DIR__ .'/GetShippingRulesResponse.php',
        'TestCredentialsCustom' => __DIR__ .'/TestCredentialsCustom.php',
        'RequestObjectOfStringCustom' => __DIR__ .'/RequestObjectOfStringCustom.php',
        'ResponseObjectOfBooleanCustom' => __DIR__ .'/ResponseObjectOfBooleanCustom.php',
        'TestCredentialsResponseCustom' => __DIR__ .'/TestCredentialsResponseCustom.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_9484b1b78fe8ad55725f6884a4e0b5b3');

// Do nothing. The rest is just leftovers from the code generation.
{
}