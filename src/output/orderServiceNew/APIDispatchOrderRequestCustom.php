<?php

class APIDispatchOrderRequestCustom
{

    /**
     * @var ArrayOfCcpApiDispatchItem $ccpApiDispatchItems
     */
    protected $ccpApiDispatchItems = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var ccpApiDispatchOptions $DispatchOptions
     */
    protected $DispatchOptions = null;

    /**
     * @var ccpApiDispatchType $DispatchType
     */
    protected $DispatchType = null;

    /**
     * @var string $ConsignmentReferenceNumber
     */
    protected $ConsignmentReferenceNumber = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @param int $OrderId
     * @param ccpApiDispatchType $DispatchType
     */
    public function __construct($OrderId, $DispatchType)
    {
      $this->OrderId = $OrderId;
      $this->DispatchType = $DispatchType;
    }

    /**
     * @return ArrayOfCcpApiDispatchItem
     */
    public function getCcpApiDispatchItems()
    {
      return $this->ccpApiDispatchItems;
    }

    /**
     * @param ArrayOfCcpApiDispatchItem $ccpApiDispatchItems
     * @return APIDispatchOrderRequest
     */
    public function setCcpApiDispatchItems($ccpApiDispatchItems)
    {
      $this->ccpApiDispatchItems = $ccpApiDispatchItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param int $OrderId
     * @return APIDispatchOrderRequest
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return ccpApiDispatchOptions
     */
    public function getDispatchOptions()
    {
      return $this->DispatchOptions;
    }

    /**
     * @param ccpApiDispatchOptions $DispatchOptions
     * @return APIDispatchOrderRequest
     */
    public function setDispatchOptions($DispatchOptions)
    {
      $this->DispatchOptions = $DispatchOptions;
      return $this;
    }

    /**
     * @return ccpApiDispatchType
     */
    public function getDispatchType()
    {
      return $this->DispatchType;
    }

    /**
     * @param ccpApiDispatchType $DispatchType
     * @return APIDispatchOrderRequest
     */
    public function setDispatchType($DispatchType)
    {
      $this->DispatchType = $DispatchType;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentReferenceNumber()
    {
      return $this->ConsignmentReferenceNumber;
    }

    /**
     * @param string $ConsignmentReferenceNumber
     * @return APIDispatchOrderRequest
     */
    public function setConsignmentReferenceNumber($ConsignmentReferenceNumber)
    {
      $this->ConsignmentReferenceNumber = $ConsignmentReferenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return APIDispatchOrderRequest
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

}
