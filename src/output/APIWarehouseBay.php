<?php

class APIWarehouseBay
{

    /**
     * @var APIWarehouseDetails $Warehouse
     */
    protected $Warehouse = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Aisle
     */
    protected $Aisle = null;

    /**
     * @var int $BayNumber
     */
    protected $BayNumber = null;

    /**
     * @var string $Shelf
     */
    protected $Shelf = null;

    /**
     * @var WarehouseBayType $WarehouseBayType
     */
    protected $WarehouseBayType = null;

    /**
     * @var ArrayOfOrderItemAllocation $StockInBay
     */
    protected $StockInBay = null;

    /**
     * @param int $BayNumber
     * @param WarehouseBayType $WarehouseBayType
     */
    public function __construct($BayNumber, $WarehouseBayType)
    {
      $this->BayNumber = $BayNumber;
      $this->WarehouseBayType = $WarehouseBayType;
    }

    /**
     * @return APIWarehouseDetails
     */
    public function getWarehouse()
    {
      return $this->Warehouse;
    }

    /**
     * @param APIWarehouseDetails $Warehouse
     * @return APIWarehouseBay
     */
    public function setWarehouse($Warehouse)
    {
      $this->Warehouse = $Warehouse;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return APIWarehouseBay
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAisle()
    {
      return $this->Aisle;
    }

    /**
     * @param string $Aisle
     * @return APIWarehouseBay
     */
    public function setAisle($Aisle)
    {
      $this->Aisle = $Aisle;
      return $this;
    }

    /**
     * @return int
     */
    public function getBayNumber()
    {
      return $this->BayNumber;
    }

    /**
     * @param int $BayNumber
     * @return APIWarehouseBay
     */
    public function setBayNumber($BayNumber)
    {
      $this->BayNumber = $BayNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getShelf()
    {
      return $this->Shelf;
    }

    /**
     * @param string $Shelf
     * @return APIWarehouseBay
     */
    public function setShelf($Shelf)
    {
      $this->Shelf = $Shelf;
      return $this;
    }

    /**
     * @return WarehouseBayType
     */
    public function getWarehouseBayType()
    {
      return $this->WarehouseBayType;
    }

    /**
     * @param WarehouseBayType $WarehouseBayType
     * @return APIWarehouseBay
     */
    public function setWarehouseBayType($WarehouseBayType)
    {
      $this->WarehouseBayType = $WarehouseBayType;
      return $this;
    }

    /**
     * @return ArrayOfOrderItemAllocation
     */
    public function getStockInBay()
    {
      return $this->StockInBay;
    }

    /**
     * @param ArrayOfOrderItemAllocation $StockInBay
     * @return APIWarehouseBay
     */
    public function setStockInBay($StockInBay)
    {
      $this->StockInBay = $StockInBay;
      return $this;
    }

}
