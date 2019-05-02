<?php

class APIDispatchOrderResponse
{

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var string $ShipmentErrorInfo
     */
    protected $ShipmentErrorInfo = null;

    /**
     * @var string $StatusMessage
     */
    protected $StatusMessage = null;

    /**
     * @var OrderDetail $OrderDetails
     */
    protected $OrderDetails = null;

    /**
     * @var CustomerOrderDispatch $CustomerOrderDispatch
     */
    protected $CustomerOrderDispatch = null;

    /**
     * @var CustomerOrderShipment $CustomerOrderShipment
     */
    protected $CustomerOrderShipment = null;

    /**
     * @param boolean $Success
     */
    public function __construct($Success)
    {
      $this->Success = $Success;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return APIDispatchOrderResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentErrorInfo()
    {
      return $this->ShipmentErrorInfo;
    }

    /**
     * @param string $ShipmentErrorInfo
     * @return APIDispatchOrderResponse
     */
    public function setShipmentErrorInfo($ShipmentErrorInfo)
    {
      $this->ShipmentErrorInfo = $ShipmentErrorInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return APIDispatchOrderResponse
     */
    public function setStatusMessage($StatusMessage)
    {
      $this->StatusMessage = $StatusMessage;
      return $this;
    }

    /**
     * @return OrderDetail
     */
    public function getOrderDetails()
    {
      return $this->OrderDetails;
    }

    /**
     * @param OrderDetail $OrderDetails
     * @return APIDispatchOrderResponse
     */
    public function setOrderDetails($OrderDetails)
    {
      $this->OrderDetails = $OrderDetails;
      return $this;
    }

    /**
     * @return CustomerOrderDispatch
     */
    public function getCustomerOrderDispatch()
    {
      return $this->CustomerOrderDispatch;
    }

    /**
     * @param CustomerOrderDispatch $CustomerOrderDispatch
     * @return APIDispatchOrderResponse
     */
    public function setCustomerOrderDispatch($CustomerOrderDispatch)
    {
      $this->CustomerOrderDispatch = $CustomerOrderDispatch;
      return $this;
    }

    /**
     * @return CustomerOrderShipment
     */
    public function getCustomerOrderShipment()
    {
      return $this->CustomerOrderShipment;
    }

    /**
     * @param CustomerOrderShipment $CustomerOrderShipment
     * @return APIDispatchOrderResponse
     */
    public function setCustomerOrderShipment($CustomerOrderShipment)
    {
      $this->CustomerOrderShipment = $CustomerOrderShipment;
      return $this;
    }

}
