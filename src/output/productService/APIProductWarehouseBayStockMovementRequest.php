<?php

class APIProductWarehouseBayStockMovementRequest
{

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $WarehouseID
     */
    protected $WarehouseID = null;

    /**
     * @var string $BayCode
     */
    protected $BayCode = null;

    /**
     * @var string $MoveToBayCode
     */
    protected $MoveToBayCode = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var boolean $GetStock
     */
    protected $GetStock = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var ArrayOfAPIStockChange $stockToAdd
     */
    protected $stockToAdd = null;

    /**
     * @param int $BrandID
     * @param int $WarehouseID
     * @param boolean $GetStock
     * @param int $OrderID
     */
    public function __construct($BrandID, $WarehouseID, $GetStock, $OrderID)
    {
      $this->BrandID = $BrandID;
      $this->WarehouseID = $WarehouseID;
      $this->GetStock = $GetStock;
      $this->OrderID = $OrderID;
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
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseID()
    {
      return $this->WarehouseID;
    }

    /**
     * @param int $WarehouseID
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBayCode()
    {
      return $this->BayCode;
    }

    /**
     * @param string $BayCode
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setBayCode($BayCode)
    {
      $this->BayCode = $BayCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMoveToBayCode()
    {
      return $this->MoveToBayCode;
    }

    /**
     * @param string $MoveToBayCode
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setMoveToBayCode($MoveToBayCode)
    {
      $this->MoveToBayCode = $MoveToBayCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param string $SKU
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGetStock()
    {
      return $this->GetStock;
    }

    /**
     * @param boolean $GetStock
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setGetStock($GetStock)
    {
      $this->GetStock = $GetStock;
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
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return ArrayOfAPIStockChange
     */
    public function getStockToAdd()
    {
      return $this->stockToAdd;
    }

    /**
     * @param ArrayOfAPIStockChange $stockToAdd
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function setStockToAdd($stockToAdd)
    {
      $this->stockToAdd = $stockToAdd;
      return $this;
    }

}
