<?php

class OrderDetailCustom
{

    /**
     * @var ArrayOfCcpCustomerOrderItem $APIOrderItems
     */
    protected $APIOrderItems = null;

    /**
     * @var Customer $customer
     */
    protected $customer = null;

    /**
     * @var CustomerOrder $order
     */
    protected $order = null;

    /**
     * @var APIOrderShippingAddress $ShippingAddress
     */
    protected $ShippingAddress = null;

    /**
     * @var APIOrderBillingAddress $APIOrderBillingAddress
     */
    protected $APIOrderBillingAddress = null;

    /**
     * @var BrandCourierSelection $CourierSelection
     */
    protected $CourierSelection = null;

    /**
     * @var CourierServicesRules $CourierServiceRule
     */
    protected $CourierServiceRule = null;

    /**
     * @var ArrayOfCustomerOrderDispatch $CustomerOrderDispatches
     */
    protected $CustomerOrderDispatches = null;

    /**
     * @var ArrayOfCustomerOrderShipment $CustomerOrderShipments
     */
    protected $CustomerOrderShipments = null;

    /**
     * @var Country $Country
     */
    protected $Country = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCcpCustomerOrderItem
     */
    public function getAPIOrderItems()
    {
      return $this->APIOrderItems;
    }

    /**
     * @param ArrayOfCcpCustomerOrderItem $APIOrderItems
     * @return OrderDetail
     */
    public function setAPIOrderItems($APIOrderItems)
    {
      $this->APIOrderItems = $APIOrderItems;
      return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return OrderDetail
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return CustomerOrder
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param CustomerOrder $order
     * @return OrderDetail
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return APIOrderShippingAddress
     */
    public function getShippingAddress()
    {
      return $this->ShippingAddress;
    }

    /**
     * @param APIOrderShippingAddress $ShippingAddress
     * @return OrderDetail
     */
    public function setShippingAddress($ShippingAddress)
    {
      $this->ShippingAddress = $ShippingAddress;
      return $this;
    }

    /**
     * @return APIOrderBillingAddress
     */
    public function getAPIOrderBillingAddress()
    {
      return $this->APIOrderBillingAddress;
    }

    /**
     * @param APIOrderBillingAddress $APIOrderBillingAddress
     * @return OrderDetail
     */
    public function setAPIOrderBillingAddress($APIOrderBillingAddress)
    {
      $this->APIOrderBillingAddress = $APIOrderBillingAddress;
      return $this;
    }

    /**
     * @return BrandCourierSelection
     */
    public function getCourierSelection()
    {
      return $this->CourierSelection;
    }

    /**
     * @param BrandCourierSelection $CourierSelection
     * @return OrderDetail
     */
    public function setCourierSelection($CourierSelection)
    {
      $this->CourierSelection = $CourierSelection;
      return $this;
    }

    /**
     * @return CourierServicesRules
     */
    public function getCourierServiceRule()
    {
      return $this->CourierServiceRule;
    }

    /**
     * @param CourierServicesRules $CourierServiceRule
     * @return OrderDetail
     */
    public function setCourierServiceRule($CourierServiceRule)
    {
      $this->CourierServiceRule = $CourierServiceRule;
      return $this;
    }

    /**
     * @return ArrayOfCustomerOrderDispatch
     */
    public function getCustomerOrderDispatches()
    {
      return $this->CustomerOrderDispatches;
    }

    /**
     * @param ArrayOfCustomerOrderDispatch $CustomerOrderDispatches
     * @return OrderDetail
     */
    public function setCustomerOrderDispatches($CustomerOrderDispatches)
    {
      $this->CustomerOrderDispatches = $CustomerOrderDispatches;
      return $this;
    }

    /**
     * @return ArrayOfCustomerOrderShipment
     */
    public function getCustomerOrderShipments()
    {
      return $this->CustomerOrderShipments;
    }

    /**
     * @param ArrayOfCustomerOrderShipment $CustomerOrderShipments
     * @return OrderDetail
     */
    public function setCustomerOrderShipments($CustomerOrderShipments)
    {
      $this->CustomerOrderShipments = $CustomerOrderShipments;
      return $this;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param Country $Country
     * @return OrderDetail
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
