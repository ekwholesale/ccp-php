<?php

class APISetOrderPickStatusRequestCustom
{

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var int $PickStatus
     */
    protected $PickStatus = null;

    /**
     * @param int $BrandID
     * @param int $OrderID
     * @param int $PickStatus
     */
    public function __construct($BrandID, $OrderID, $PickStatus)
    {
      $this->BrandID = $BrandID;
      $this->OrderID = $OrderID;
      $this->PickStatus = $PickStatus;
    }

    /**
     * @return int
     */
    public function getBrandID()
    {
      return $this->BrandID;
    }

    /**
     * @param int $BrandID
     * @return APISetOrderPickStatusRequest
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return APISetOrderPickStatusRequest
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
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
     * @return APISetOrderPickStatusRequest
     */
    public function setPickStatus($PickStatus)
    {
      $this->PickStatus = $PickStatus;
      return $this;
    }

}
