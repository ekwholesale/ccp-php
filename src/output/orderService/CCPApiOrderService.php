<?php

class CCPApiOrderService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'getInvoiceSummaryForOrderID' => '\\getInvoiceSummaryForOrderID',
  'RequestObjectOfInt32' => '\\RequestObjectOfInt32Custom',
  'getInvoiceSummaryForOrderIDResponse' => '\\getInvoiceSummaryForOrderIDResponse',
  'ResponseObjectOfAPIInvoiceSummary' => '\\ResponseObjectOfAPIInvoiceSummary',
  'APIInvoiceSummary' => '\\APIInvoiceSummary',
  'ArrayOfApiFault' => '\\ArrayOfApiFaultCustom',
  'ApiFault' => '\\ApiFaultCustom',
  'Search' => '\\Search',
  'RequestObjectOfApiOrderQuery' => '\\RequestObjectOfApiOrderQuery',
  'ApiOrderQuery' => '\\ApiOrderQuery',
  'ArrayOfCustomerOrderStatusType' => '\\ArrayOfCustomerOrderStatusType',
  'SearchResponse' => '\\SearchResponse',
  'ResponseObjectOfApiOrderQueryResponse' => '\\ResponseObjectOfApiOrderQueryResponse',
  'ApiOrderQueryResponse' => '\\ApiOrderQueryResponse',
  'ArrayOfAPIOrder' => '\\ArrayOfAPIOrder',
  'APIOrder' => '\\APIOrder',
  'APISalesChannel' => '\\APISalesChannelCustom',
  'ArrayOfDropShipSupplier' => '\\ArrayOfDropShipSupplier',
  'DropShipSupplier' => '\\DropShipSupplier',
  'ArrayOfAPIOrderItem' => '\\ArrayOfAPIOrderItem',
  'APIOrderItem' => '\\APIOrderItem',
  'GetDispatchedOrders' => '\\GetDispatchedOrders',
  'GetDispatchedOrdersResponse' => '\\GetDispatchedOrdersResponse',
  'ResponseObjectOfDispatchedOrdersList' => '\\ResponseObjectOfDispatchedOrdersList',
  'DispatchedOrdersList' => '\\DispatchedOrdersList',
  'ArrayOfOrderDetail' => '\\ArrayOfOrderDetail',
  'OrderDetail' => '\\OrderDetail',
  'ArrayOfCcpCustomerOrderItem' => '\\ArrayOfCcpCustomerOrderItem',
  'ccpCustomerOrderItem' => '\\ccpCustomerOrderItem',
  'ArrayOfCCPSaleItemMeta' => '\\ArrayOfCCPSaleItemMeta',
  'CCPSaleItemMeta' => '\\CCPSaleItemMeta',
  'Product' => '\\ProductCustom',
  'ArrayOfProductBarcode' => '\\ArrayOfProductBarcodeCustom',
  'ProductBarcode' => '\\ProductBarcodeCustom',
  'ArrayOfFactory' => '\\ArrayOfFactoryCustom',
  'Factory' => '\\FactoryCustom',
  'ArrayOfProductFactoryLink' => '\\ArrayOfProductFactoryLinkCustom',
  'ProductFactoryLink' => '\\ProductFactoryLinkCustom',
  'ArrayOfProductOptionValue' => '\\ArrayOfProductOptionValueCustom',
  'ProductOptionValue' => '\\ProductOptionValueCustom',
  'ProductRange' => '\\ProductRangeCustom',
  'Customer' => '\\Customer',
  'CustomerOrder' => '\\CustomerOrder',
  'SalesChannel' => '\\SalesChannel',
  'ArrayOfWarehouseSalesChannelLink' => '\\ArrayOfWarehouseSalesChannelLink',
  'WarehouseSalesChannelLink' => '\\WarehouseSalesChannelLink',
  'Address' => '\\Address',
  'BrandCourierSelection' => '\\BrandCourierSelection',
  'ArrayOfBrandCourierSelectionProduct' => '\\ArrayOfBrandCourierSelectionProduct',
  'BrandCourierSelectionProduct' => '\\BrandCourierSelectionProduct',
  'ArrayOfBrandCourierSelectionRules' => '\\ArrayOfBrandCourierSelectionRules',
  'BrandCourierSelectionRules' => '\\BrandCourierSelectionRules',
  'CourierServicesRules' => '\\CourierServicesRules',
  'APIOrderShippingAddress' => '\\APIOrderShippingAddress',
  'APIOrderBillingAddress' => '\\APIOrderBillingAddress',
  'ArrayOfCustomerOrderDispatch' => '\\ArrayOfCustomerOrderDispatch',
  'CustomerOrderDispatch' => '\\CustomerOrderDispatch',
  'ArrayOfCustomerOrderShipment' => '\\ArrayOfCustomerOrderShipment',
  'CustomerOrderShipment' => '\\CustomerOrderShipment',
  'Country' => '\\Country',
  'createOrder' => '\\createOrder',
  'RequestObjectOfAPIOrderCreateOrderRequest' => '\\RequestObjectOfAPIOrderCreateOrderRequest',
  'APIOrderCreateOrderRequest' => '\\APIOrderCreateOrderRequest',
  'ResponseObjectOfInt32' => '\\ResponseObjectOfInt32Custom',
  'createOrderResponse' => '\\createOrderResponse',
  'SubmitOrder' => '\\SubmitOrder',
  'ResponseObjectOfOrderDetail' => '\\ResponseObjectOfOrderDetail',
  'SubmitOrderResponse' => '\\SubmitOrderResponse',
  'getOrders' => '\\getOrders',
  'RequestObjectOfAPIGetOrdersRequest' => '\\RequestObjectOfAPIGetOrdersRequest',
  'APIGetOrdersRequest' => '\\APIGetOrdersRequest',
  'ResponseObjectOfListOfAPIOrder' => '\\ResponseObjectOfListOfAPIOrder',
  'getOrdersResponse' => '\\getOrdersResponse',
  'getOrderById' => '\\getOrderById',
  'ResponseObjectOfAPIOrder' => '\\ResponseObjectOfAPIOrder',
  'getOrderByIdResponse' => '\\getOrderByIdResponse',
  'getOrderDetailsById' => '\\getOrderDetailsById',
  'getOrderDetailsByIdResponse' => '\\getOrderDetailsByIdResponse',
  'getOrderDetailsByReference' => '\\getOrderDetailsByReference',
  'RequestObjectOfArrayOfString' => '\\RequestObjectOfArrayOfString',
  'ArrayOfString' => '\\ArrayOfStringCustom',
  'getOrderDetailsByReferenceResponse' => '\\getOrderDetailsByReferenceResponse',
  'getOrdersForDispatch' => '\\getOrdersForDispatch',
  'RequestObjectOfApiOrderQueryRequest' => '\\RequestObjectOfApiOrderQueryRequest',
  'ApiOrderQueryRequest' => '\\ApiOrderQueryRequest',
  'getOrdersForDispatchResponse' => '\\getOrdersForDispatchResponse',
  'getPriorityOrders' => '\\getPriorityOrders',
  'getPriorityOrdersResponse' => '\\getPriorityOrdersResponse',
  'getPrintedOrders' => '\\getPrintedOrders',
  'getPrintedOrdersResponse' => '\\getPrintedOrdersResponse',
  'getNotPrintedOrders' => '\\getNotPrintedOrders',
  'getNotPrintedOrdersResponse' => '\\getNotPrintedOrdersResponse',
  'getAllocatedOrders' => '\\getAllocatedOrders',
  'getAllocatedOrdersResponse' => '\\getAllocatedOrdersResponse',
  'getUnallocatedOrders' => '\\getUnallocatedOrders',
  'getUnallocatedOrdersResponse' => '\\getUnallocatedOrdersResponse',
  'getPickedOrders' => '\\getPickedOrders',
  'getPickedOrdersResponse' => '\\getPickedOrdersResponse',
  'getNotPickedOrders' => '\\getNotPickedOrders',
  'getNotPickedOrdersResponse' => '\\getNotPickedOrdersResponse',
  'getCompletedOrdersNoOfDays' => '\\getCompletedOrdersNoOfDays',
  'getCompletedOrdersNoOfDaysResponse' => '\\getCompletedOrdersNoOfDaysResponse',
  'getUnprocessedOrders' => '\\getUnprocessedOrders',
  'getUnprocessedOrdersResponse' => '\\getUnprocessedOrdersResponse',
  'setPickListPrinted' => '\\setPickListPrinted',
  'setPickListPrintedResponse' => '\\setPickListPrintedResponse',
  'markOrderAsPicked' => '\\markOrderAsPicked',
  'markOrderAsPickedResponse' => '\\markOrderAsPickedResponse',
  'setPickStatus' => '\\setPickStatus',
  'RequestObjectOfAPISetOrderPickStatusRequest' => '\\RequestObjectOfAPISetOrderPickStatusRequest',
  'APISetOrderPickStatusRequest' => '\\APISetOrderPickStatusRequest',
  'setPickStatusResponse' => '\\setPickStatusResponse',
  'DispatchOrder' => '\\DispatchOrder',
  'RequestObjectOfAPIDispatchOrderRequest' => '\\RequestObjectOfAPIDispatchOrderRequest',
  'APIDispatchOrderRequest' => '\\APIDispatchOrderRequest',
  'ArrayOfCcpApiDispatchItem' => '\\ArrayOfCcpApiDispatchItem',
  'ccpApiDispatchItem' => '\\ccpApiDispatchItem',
  'ccpApiDispatchOptions' => '\\ccpApiDispatchOptions',
  'ResponseObjectOfAPIDispatchOrderResponse' => '\\ResponseObjectOfAPIDispatchOrderResponse',
  'APIDispatchOrderResponse' => '\\APIDispatchOrderResponse',
  'DispatchOrderResponse' => '\\DispatchOrderResponse',
  'GetShippingRules' => '\\GetShippingRules',
  'ResponseObjectOfListOfAPIShippingRule' => '\\ResponseObjectOfListOfAPIShippingRule',
  'ArrayOfAPIShippingRule' => '\\ArrayOfAPIShippingRule',
  'APIShippingRule' => '\\APIShippingRule',
  'GetShippingRulesResponse' => '\\GetShippingRulesResponse',
  'TestCredentials' => '\\TestCredentialsCustom',
  'RequestObjectOfString' => '\\RequestObjectOfStringCustom',
  'ResponseObjectOfBoolean' => '\\ResponseObjectOfBooleanCustom',
  'TestCredentialsResponse' => '\\TestCredentialsResponseCustom',
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
        $wsdl = 'http://wcfccpservicesbase.cloudcommercepro.com/CCPApiOrderService.svc?singlewsdl';
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
     * @param getInvoiceSummaryForOrderID $parameters
     * @return getInvoiceSummaryForOrderIDResponse
     */
    public function getInvoiceSummaryForOrderID(getInvoiceSummaryForOrderID $parameters)
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
     * @param Search $parameters
     * @return SearchResponse
     */
    public function Search(Search $parameters)
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
     * @param GetDispatchedOrders $parameters
     * @return GetDispatchedOrdersResponse
     */
    public function GetDispatchedOrders(GetDispatchedOrders $parameters)
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
     * @param createOrder $parameters
     * @return createOrderResponse
     */
    public function createOrder(createOrder $parameters)
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
     * @param SubmitOrder $parameters
     * @return SubmitOrderResponse
     */
    public function SubmitOrder(SubmitOrder $parameters)
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
     * @param getOrders $parameters
     * @return getOrdersResponse
     */
    public function getOrders(getOrders $parameters)
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
     * @param getOrderById $parameters
     * @return getOrderByIdResponse
     */
    public function getOrderById(getOrderById $parameters)
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
     * @param getOrderDetailsById $parameters
     * @return getOrderDetailsByIdResponse
     */
    public function getOrderDetailsById(getOrderDetailsById $parameters)
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
     * @param getOrderDetailsByReference $parameters
     * @return getOrderDetailsByReferenceResponse
     */
    public function getOrderDetailsByReference(getOrderDetailsByReference $parameters)
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
     * @param getOrdersForDispatch $parameters
     * @return getOrdersForDispatchResponse
     */
    public function getOrdersForDispatch(getOrdersForDispatch $parameters)
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
     * @param getPriorityOrders $parameters
     * @return getPriorityOrdersResponse
     */
    public function getPriorityOrders(getPriorityOrders $parameters)
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
     * @param getPrintedOrders $parameters
     * @return getPrintedOrdersResponse
     */
    public function getPrintedOrders(getPrintedOrders $parameters)
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
     * @param getNotPrintedOrders $parameters
     * @return getNotPrintedOrdersResponse
     */
    public function getNotPrintedOrders(getNotPrintedOrders $parameters)
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
     * @param getAllocatedOrders $parameters
     * @return getAllocatedOrdersResponse
     */
    public function getAllocatedOrders(getAllocatedOrders $parameters)
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
     * @param getUnallocatedOrders $parameters
     * @return getUnallocatedOrdersResponse
     */
    public function getUnallocatedOrders(getUnallocatedOrders $parameters)
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
     * @param getPickedOrders $parameters
     * @return getPickedOrdersResponse
     */
    public function getPickedOrders(getPickedOrders $parameters)
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
     * @param getNotPickedOrders $parameters
     * @return getNotPickedOrdersResponse
     */
    public function getNotPickedOrders(getNotPickedOrders $parameters)
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
     * @param getCompletedOrdersNoOfDays $parameters
     * @return getCompletedOrdersNoOfDaysResponse
     */
    public function getCompletedOrdersNoOfDays(getCompletedOrdersNoOfDays $parameters)
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
     * @param getUnprocessedOrders $parameters
     * @return getUnprocessedOrdersResponse
     */
    public function getUnprocessedOrders(getUnprocessedOrders $parameters)
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
     * @param setPickListPrinted $parameters
     * @return setPickListPrintedResponse
     */
    public function setPickListPrinted(setPickListPrinted $parameters)
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
     * @param markOrderAsPicked $parameters
     * @return markOrderAsPickedResponse
     */
    public function markOrderAsPicked(markOrderAsPicked $parameters)
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
     * @param setPickStatus $parameters
     * @return setPickStatusResponse
     */
    public function setPickStatus(setPickStatus $parameters)
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
     * @param DispatchOrder $parameters
     * @return DispatchOrderResponse
     */
    public function DispatchOrder(DispatchOrder $parameters)
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
     * @param GetShippingRules $parameters
     * @return GetShippingRulesResponse
     */
    public function GetShippingRules(GetShippingRules $parameters)
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
     * @param TestCredentialsCustom $parameters
     * @return TestCredentialsResponse
     */
    public function TestCredentials($parameters)
    {
      return $this->__soapCall('TestCredentials', array($parameters));
    }

}
