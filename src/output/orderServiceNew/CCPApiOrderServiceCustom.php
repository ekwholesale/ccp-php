<?php

class CCPApiOrderServiceCustom extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'getInvoiceSummaryForOrderID' => '\\getInvoiceSummaryForOrderIDCustom',
  'RequestObjectOfInt32' => '\\RequestObjectOfInt32Custom3',
  'getInvoiceSummaryForOrderIDResponse' => '\\getInvoiceSummaryForOrderIDResponseCustom',
  'ResponseObjectOfAPIInvoiceSummary' => '\\ResponseObjectOfAPIInvoiceSummaryCustom',
  'APIInvoiceSummary' => '\\APIInvoiceSummaryCustom',
  'ArrayOfApiFault' => '\\ArrayOfApiFaultCustom3',
  'ApiFault' => '\\ApiFaultCustom3',
  'Search' => '\\SearchCustom2',
  'RequestObjectOfApiOrderQuery' => '\\RequestObjectOfApiOrderQueryCustom',
  'ApiOrderQuery' => '\\ApiOrderQueryCustom',
  'ArrayOfCustomerOrderStatusType' => '\\ArrayOfCustomerOrderStatusTypeCustom',
  'SearchResponse' => '\\SearchResponseCustom2',
  'ResponseObjectOfApiOrderQueryResponse' => '\\ResponseObjectOfApiOrderQueryResponseCustom',
  'ApiOrderQueryResponse' => '\\ApiOrderQueryResponseCustom',
  'ArrayOfAPIOrder' => '\\ArrayOfAPIOrderCustom',
  'APIOrder' => '\\APIOrderCustom',
  'APISalesChannel' => '\\APISalesChannelCustom2',
  'ArrayOfDropShipSupplier' => '\\ArrayOfDropShipSupplierCustom',
  'DropShipSupplier' => '\\DropShipSupplierCustom',
  'ArrayOfAPIOrderItem' => '\\ArrayOfAPIOrderItemCustom',
  'APIOrderItem' => '\\APIOrderItemCustom',
  'GetDispatchedOrders' => '\\GetDispatchedOrdersCustom',
  'GetDispatchedOrdersResponse' => '\\GetDispatchedOrdersResponseCustom',
  'ResponseObjectOfDispatchedOrdersList' => '\\ResponseObjectOfDispatchedOrdersListCustom',
  'DispatchedOrdersList' => '\\DispatchedOrdersListCustom',
  'ArrayOfOrderDetail' => '\\ArrayOfOrderDetailCustom',
  'OrderDetail' => '\\OrderDetailCustom',
  'ArrayOfCcpCustomerOrderItem' => '\\ArrayOfCcpCustomerOrderItemCustom',
  'ccpCustomerOrderItem' => '\\ccpCustomerOrderItemCustom',
  'ArrayOfCCPSaleItemMeta' => '\\ArrayOfCCPSaleItemMetaCustom',
  'CCPSaleItemMeta' => '\\CCPSaleItemMetaCustom',
  'Product' => '\\ProductCustom2',
  'ArrayOfProductBarcode' => '\\ArrayOfProductBarcodeCustom2',
  'ProductBarcode' => '\\ProductBarcodeCustom2',
  'ArrayOfFactory' => '\\ArrayOfFactoryCustom2',
  'Factory' => '\\FactoryCustom2',
  'ArrayOfProductFactoryLink' => '\\ArrayOfProductFactoryLinkCustom2',
  'ProductFactoryLink' => '\\ProductFactoryLinkCustom2',
  'ArrayOfProductOptionValue' => '\\ArrayOfProductOptionValueCustom2',
  'ProductOptionValue' => '\\ProductOptionValueCustom2',
  'ProductRange' => '\\ProductRangeCustom2',
  'Customer' => '\\CustomerCustom',
  'CustomerOrder' => '\\CustomerOrderCustom',
  'SalesChannel' => '\\SalesChannelCustom',
  'ArrayOfWarehouseSalesChannelLink' => '\\ArrayOfWarehouseSalesChannelLinkCustom',
  'WarehouseSalesChannelLink' => '\\WarehouseSalesChannelLinkCustom',
  'Address' => '\\AddressCustom',
  'BrandCourierSelection' => '\\BrandCourierSelectionCustom',
  'ArrayOfBrandCourierSelectionProduct' => '\\ArrayOfBrandCourierSelectionProductCustom',
  'BrandCourierSelectionProduct' => '\\BrandCourierSelectionProductCustom',
  'ArrayOfBrandCourierSelectionRules' => '\\ArrayOfBrandCourierSelectionRulesCustom',
  'BrandCourierSelectionRules' => '\\BrandCourierSelectionRulesCustom',
  'CourierServicesRules' => '\\CourierServicesRulesCustom',
  'APIOrderShippingAddress' => '\\APIOrderShippingAddressCustom',
  'APIOrderBillingAddress' => '\\APIOrderBillingAddressCustom',
  'ArrayOfCustomerOrderDispatch' => '\\ArrayOfCustomerOrderDispatchCustom',
  'CustomerOrderDispatch' => '\\CustomerOrderDispatchCustom',
  'ArrayOfCustomerOrderShipment' => '\\ArrayOfCustomerOrderShipmentCustom',
  'CustomerOrderShipment' => '\\CustomerOrderShipmentCustom',
  'Country' => '\\CountryCustom',
  'createOrder' => '\\createOrderCustom',
  'RequestObjectOfAPIOrderCreateOrderRequest' => '\\RequestObjectOfAPIOrderCreateOrderRequestCustom',
  'APIOrderCreateOrderRequest' => '\\APIOrderCreateOrderRequestCustom',
  'ResponseObjectOfInt32' => '\\ResponseObjectOfInt32Custom2',
  'createOrderResponse' => '\\createOrderResponseCustom',
  'SubmitOrder' => '\\SubmitOrderCustom',
  'ResponseObjectOfOrderDetail' => '\\ResponseObjectOfOrderDetailCustom',
  'SubmitOrderResponse' => '\\SubmitOrderResponseCustom',
  'getOrders' => '\\getOrdersCustom',
  'RequestObjectOfAPIGetOrdersRequest' => '\\RequestObjectOfAPIGetOrdersRequestCustom',
  'APIGetOrdersRequest' => '\\APIGetOrdersRequestCustom',
  'ResponseObjectOfListOfAPIOrder' => '\\ResponseObjectOfListOfAPIOrderCustom',
  'getOrdersResponse' => '\\getOrdersResponseCustom',
  'getOrderById' => '\\getOrderByIdCustom',
  'ResponseObjectOfAPIOrder' => '\\ResponseObjectOfAPIOrderCustom',
  'getOrderByIdResponse' => '\\getOrderByIdResponseCustom',
  'getOrderDetailsById' => '\\getOrderDetailsByIdCustom',
  'getOrderDetailsByIdResponse' => '\\getOrderDetailsByIdResponseCustom',
  'getOrderDetailsByReference' => '\\getOrderDetailsByReferenceCustom',
  'RequestObjectOfArrayOfString' => '\\RequestObjectOfArrayOfStringCustom',
  'ArrayOfString' => '\\ArrayOfStringCustom2',
  'getOrderDetailsByReferenceResponse' => '\\getOrderDetailsByReferenceResponseCustom',
  'getOrdersForDispatch' => '\\getOrdersForDispatchCustom',
  'RequestObjectOfApiOrderQueryRequest' => '\\RequestObjectOfApiOrderQueryRequestCustom',
  'ApiOrderQueryRequest' => '\\ApiOrderQueryRequestCustom',
  'getOrdersForDispatchResponse' => '\\getOrdersForDispatchResponseCustom',
  'getPriorityOrders' => '\\getPriorityOrdersCustom',
  'getPriorityOrdersResponse' => '\\getPriorityOrdersResponseCustom',
  'getPrintedOrders' => '\\getPrintedOrdersCustom',
  'getPrintedOrdersResponse' => '\\getPrintedOrdersResponseCustom',
  'getNotPrintedOrders' => '\\getNotPrintedOrdersCustom',
  'getNotPrintedOrdersResponse' => '\\getNotPrintedOrdersResponseCustom',
  'getAllocatedOrders' => '\\getAllocatedOrdersCustom',
  'getAllocatedOrdersResponse' => '\\getAllocatedOrdersResponseCustom',
  'getUnallocatedOrders' => '\\getUnallocatedOrdersCustom',
  'getUnallocatedOrdersResponse' => '\\getUnallocatedOrdersResponseCustom',
  'getPickedOrders' => '\\getPickedOrdersCustom',
  'getPickedOrdersResponse' => '\\getPickedOrdersResponseCustom',
  'getNotPickedOrders' => '\\getNotPickedOrdersCustom',
  'getNotPickedOrdersResponse' => '\\getNotPickedOrdersResponseCustom',
  'getCompletedOrdersNoOfDays' => '\\getCompletedOrdersNoOfDaysCustom',
  'getCompletedOrdersNoOfDaysResponse' => '\\getCompletedOrdersNoOfDaysResponseCustom',
  'getUnprocessedOrders' => '\\getUnprocessedOrdersCustom',
  'getUnprocessedOrdersResponse' => '\\getUnprocessedOrdersResponseCustom',
  'setPickListPrinted' => '\\setPickListPrintedCustom',
  'setPickListPrintedResponse' => '\\setPickListPrintedResponseCustom',
  'markOrderAsPicked' => '\\markOrderAsPickedCustom',
  'markOrderAsPickedResponse' => '\\markOrderAsPickedResponseCustom',
  'setPickStatus' => '\\setPickStatusCustom',
  'RequestObjectOfAPISetOrderPickStatusRequest' => '\\RequestObjectOfAPISetOrderPickStatusRequestCustom',
  'APISetOrderPickStatusRequest' => '\\APISetOrderPickStatusRequestCustom',
  'setPickStatusResponse' => '\\setPickStatusResponseCustom',
  'DispatchOrder' => '\\DispatchOrderCustom',
  'RequestObjectOfAPIDispatchOrderRequest' => '\\RequestObjectOfAPIDispatchOrderRequestCustom',
  'APIDispatchOrderRequest' => '\\APIDispatchOrderRequestCustom',
  'ArrayOfCcpApiDispatchItem' => '\\ArrayOfCcpApiDispatchItemCustom',
  'ccpApiDispatchItem' => '\\ccpApiDispatchItemCustom',
  'ccpApiDispatchOptions' => '\\ccpApiDispatchOptionsCustom',
  'ResponseObjectOfAPIDispatchOrderResponse' => '\\ResponseObjectOfAPIDispatchOrderResponseCustom',
  'APIDispatchOrderResponse' => '\\APIDispatchOrderResponseCustom',
  'DispatchOrderResponse' => '\\DispatchOrderResponseCustom',
  'GetShippingRules' => '\\GetShippingRulesCustom',
  'ResponseObjectOfListOfAPIShippingRule' => '\\ResponseObjectOfListOfAPIShippingRuleCustom',
  'ArrayOfAPIShippingRule' => '\\ArrayOfAPIShippingRuleCustom',
  'APIShippingRule' => '\\APIShippingRuleCustom',
  'GetShippingRulesResponse' => '\\GetShippingRulesResponseCustom',
  'TestCredentials' => '\\TestCredentialsCustom3',
  'RequestObjectOfString' => '\\RequestObjectOfStringCustom3',
  'ResponseObjectOfBoolean' => '\\ResponseObjectOfBooleanCustom3',
  'TestCredentialsResponse' => '\\TestCredentialsResponseCustom3',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'https://wcfccpservicesbase.cloudcommercepro.com/CCPApiOrderService.svc?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * <summary>
     *             get invoice summary for an order
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getInvoiceSummaryForOrderIDCustom $parameters
     * @return getInvoiceSummaryForOrderIDResponse
     */
    public function getInvoiceSummaryForOrderID($parameters)
    {
      return $this->__soapCall('getInvoiceSummaryForOrderID', array($parameters));
    }

    /**
     * <summary>
     *             Search for Orders
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param SearchCustom2 $parameters
     * @return SearchResponse
     */
    public function Search($parameters)
    {
      return $this->__soapCall('Search', array($parameters));
    }

    /**
     * <summary>
     *             Get Orders Dispatch between a given date range and optionally filter by sales channel
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param GetDispatchedOrdersCustom $parameters
     * @return GetDispatchedOrdersResponse
     */
    public function GetDispatchedOrders($parameters)
    {
      return $this->__soapCall('GetDispatchedOrders', array($parameters));
    }

    /**
     * <summary>
     *             creates a back end order
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param createOrderCustom $parameters
     * @return createOrderResponse
     */
    public function createOrder($parameters)
    {
      return $this->__soapCall('createOrder', array($parameters));
    }

    /**
     * <summary>
     *             creates a back end order
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param SubmitOrderCustom $parameters
     * @return SubmitOrderResponse
     */
    public function SubmitOrder($parameters)
    {
      return $this->__soapCall('SubmitOrder', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getOrdersCustom $parameters
     * @return getOrdersResponse
     */
    public function getOrders($parameters)
    {
      return $this->__soapCall('getOrders', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getOrderByIdCustom $parameters
     * @return getOrderByIdResponse
     */
    public function getOrderById($parameters)
    {
      return $this->__soapCall('getOrderById', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getOrderDetailsByIdCustom $parameters
     * @return getOrderDetailsByIdResponse
     */
    public function getOrderDetailsById($parameters)
    {
      return $this->__soapCall('getOrderDetailsById', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getOrderDetailsByReferenceCustom $parameters
     * @return getOrderDetailsByReferenceResponse
     */
    public function getOrderDetailsByReference($parameters)
    {
      return $this->__soapCall('getOrderDetailsByReference', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getOrdersForDispatchCustom $parameters
     * @return getOrdersForDispatchResponse
     */
    public function getOrdersForDispatch($parameters)
    {
      return $this->__soapCall('getOrdersForDispatch', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getPriorityOrdersCustom $parameters
     * @return getPriorityOrdersResponse
     */
    public function getPriorityOrders($parameters)
    {
      return $this->__soapCall('getPriorityOrders', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getPrintedOrdersCustom $parameters
     * @return getPrintedOrdersResponse
     */
    public function getPrintedOrders($parameters)
    {
      return $this->__soapCall('getPrintedOrders', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getNotPrintedOrdersCustom $parameters
     * @return getNotPrintedOrdersResponse
     */
    public function getNotPrintedOrders($parameters)
    {
      return $this->__soapCall('getNotPrintedOrders', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getAllocatedOrdersCustom $parameters
     * @return getAllocatedOrdersResponse
     */
    public function getAllocatedOrders($parameters)
    {
      return $this->__soapCall('getAllocatedOrders', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getUnallocatedOrdersCustom $parameters
     * @return getUnallocatedOrdersResponse
     */
    public function getUnallocatedOrders($parameters)
    {
      return $this->__soapCall('getUnallocatedOrders', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getPickedOrdersCustom $parameters
     * @return getPickedOrdersResponse
     */
    public function getPickedOrders($parameters)
    {
      return $this->__soapCall('getPickedOrders', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getNotPickedOrdersCustom $parameters
     * @return getNotPickedOrdersResponse
     */
    public function getNotPickedOrders($parameters)
    {
      return $this->__soapCall('getNotPickedOrders', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getCompletedOrdersNoOfDaysCustom $parameters
     * @return getCompletedOrdersNoOfDaysResponse
     */
    public function getCompletedOrdersNoOfDays($parameters)
    {
      return $this->__soapCall('getCompletedOrdersNoOfDays', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param getUnprocessedOrdersCustom $parameters
     * @return getUnprocessedOrdersResponse
     */
    public function getUnprocessedOrders($parameters)
    {
      return $this->__soapCall('getUnprocessedOrders', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param setPickListPrintedCustom $parameters
     * @return setPickListPrintedResponse
     */
    public function setPickListPrinted($parameters)
    {
      return $this->__soapCall('setPickListPrinted', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param markOrderAsPickedCustom $parameters
     * @return markOrderAsPickedResponse
     */
    public function markOrderAsPicked($parameters)
    {
      return $this->__soapCall('markOrderAsPicked', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param setPickStatusCustom $parameters
     * @return setPickStatusResponse
     */
    public function setPickStatus($parameters)
    {
      return $this->__soapCall('setPickStatus', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param DispatchOrderCustom $parameters
     * @return DispatchOrderResponse
     */
    public function DispatchOrder($parameters)
    {
      return $this->__soapCall('DispatchOrder', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param GetShippingRulesCustom $parameters
     * @return GetShippingRulesResponse
     */
    public function GetShippingRules($parameters)
    {
      return $this->__soapCall('GetShippingRules', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param TestCredentialsCustom3 $parameters
     * @return TestCredentialsResponse
     */
    public function TestCredentials($parameters)
    {
      return $this->__soapCall('TestCredentials', array($parameters));
    }

}
