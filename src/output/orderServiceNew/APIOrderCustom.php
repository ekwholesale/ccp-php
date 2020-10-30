<?php

class APIOrderCustom
{

    /**
     * @var boolean $isPickListPrinted
     */
    protected $isPickListPrinted = null;

    /**
     * @var int $PickStatus
     */
    protected $PickStatus = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $OrderReceivedDate
     */
    protected $OrderReceivedDate = null;

    /**
     * @var string $OrderDispatchedDate
     */
    protected $OrderDispatchedDate = null;

    /**
     * @var string $Customer
     */
    protected $Customer = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var APISalesChannel $SalesChannel
     */
    protected $SalesChannel = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var boolean $DropshipDetected
     */
    protected $DropshipDetected = null;

    /**
     * @var ArrayOfDropShipSupplier $DropshipSuppliers
     */
    protected $DropshipSuppliers = null;

    /**
     * @var OrderPickStatus $OrderPickStatus
     */
    protected $OrderPickStatus = null;

    /**
     * @var ArrayOfAPIOrderItem $items
     */
    protected $items = null;

    /**
     * @param boolean $isPickListPrinted
     * @param int $PickStatus
     * @param int $ID
     * @param int $CustomerID
     * @param boolean $DropshipDetected
     * @param OrderPickStatus $OrderPickStatus
     */
    public function __construct($isPickListPrinted, $PickStatus, $ID, $CustomerID, $DropshipDetected, $OrderPickStatus)
    {
      $this->isPickListPrinted = $isPickListPrinted;
      $this->PickStatus = $PickStatus;
      $this->ID = $ID;
      $this->CustomerID = $CustomerID;
      $this->DropshipDetected = $DropshipDetected;
      $this->OrderPickStatus = $OrderPickStatus;
    }

    /**
     * @return boolean
     */
    public function getIsPickListPrinted()
    {
      return $this->isPickListPrinted;
    }

    /**
     * @param boolean $isPickListPrinted
     * @return APIOrder
     */
    public function setIsPickListPrinted($isPickListPrinted)
    {
      $this->isPickListPrinted = $isPickListPrinted;
      return $this;
    }

    /**
     * @return int
     */
    public function getPickStatus()
    {
      return $this->PickStatus;
    }

    /**
     * @param int $PickStatus
     * @return APIOrder
     */
    public function setPickStatus($PickStatus)
    {
      $this->PickStatus = $PickStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return APIOrder
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderReceivedDate()
    {
      return $this->OrderReceivedDate;
    }

    /**
     * @param string $OrderReceivedDate
     * @return APIOrder
     */
    public function setOrderReceivedDate($OrderReceivedDate)
    {
      $this->OrderReceivedDate = $OrderReceivedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderDispatchedDate()
    {
      return $this->OrderDispatchedDate;
    }

    /**
     * @param string $OrderDispatchedDate
     * @return APIOrder
     */
    public function setOrderDispatchedDate($OrderDispatchedDate)
    {
      $this->OrderDispatchedDate = $OrderDispatchedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param string $Customer
     * @return APIOrder
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param int $CustomerID
     * @return APIOrder
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return APISalesChannel
     */
    public function getSalesChannel()
    {
      return $this->SalesChannel;
    }

    /**
     * @param APISalesChannel $SalesChannel
     * @return APIOrder
     */
    public function setSalesChannel($SalesChannel)
    {
      $this->SalesChannel = $SalesChannel;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return APIOrder
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDropshipDetected()
    {
      return $this->DropshipDetected;
    }

    /**
     * @param boolean $DropshipDetected
     * @return APIOrder
     */
    public function setDropshipDetected($DropshipDetected)
    {
      $this->DropshipDetected = $DropshipDetected;
      return $this;
    }

    /**
     * @return ArrayOfDropShipSupplier
     */
    public function getDropshipSuppliers()
    {
      return $this->DropshipSuppliers;
    }

    /**
     * @param ArrayOfDropShipSupplier $DropshipSuppliers
     * @return APIOrder
     */
    public function setDropshipSuppliers($DropshipSuppliers)
    {
      $this->DropshipSuppliers = $DropshipSuppliers;
      return $this;
    }

    /**
     * @return OrderPickStatus
     */
    public function getOrderPickStatus()
    {
      return $this->OrderPickStatus;
    }

    /**
     * @param OrderPickStatus $OrderPickStatus
     * @return APIOrder
     */
    public function setOrderPickStatus($OrderPickStatus)
    {
      $this->OrderPickStatus = $OrderPickStatus;
      return $this;
    }

    /**
     * @return ArrayOfAPIOrderItem
     */
    public function getItems()
    {
      return $this->items;
    }

    /**
     * @param ArrayOfAPIOrderItem $items
     * @return APIOrder
     */
    public function setItems($items)
    {
      $this->items = $items;
      return $this;
    }

}
