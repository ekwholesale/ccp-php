<?php

class WarehouseBay
{

    /**
     * @var WarehouseBayType $WarehouseBayTypeEnum
     */
    protected $WarehouseBayTypeEnum = null;

    /**
     * @var string $WarehouseName
     */
    protected $WarehouseName = null;

    /**
     * @var int $AvailableStock
     */
    protected $AvailableStock = null;

    /**
     * @var ArrayOfProduct $Products
     */
    protected $Products = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $WarehouseID
     */
    protected $WarehouseID = null;

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
     * @var int $WarehouseBayType
     */
    protected $WarehouseBayType = null;

    /**
     * @var int $StatusId
     */
    protected $StatusId = null;

    /**
     * @var StatusID $StatusIdEnum
     */
    protected $StatusIdEnum = null;

    /**
     * @param WarehouseBayType $WarehouseBayTypeEnum
     * @param int $AvailableStock
     * @param int $ID
     * @param int $WarehouseID
     * @param int $BayNumber
     * @param int $WarehouseBayType
     * @param int $StatusId
     * @param StatusID $StatusIdEnum
     */
    public function __construct($WarehouseBayTypeEnum, $AvailableStock, $ID, $WarehouseID, $BayNumber, $WarehouseBayType, $StatusId, $StatusIdEnum)
    {
      $this->WarehouseBayTypeEnum = $WarehouseBayTypeEnum;
      $this->AvailableStock = $AvailableStock;
      $this->ID = $ID;
      $this->WarehouseID = $WarehouseID;
      $this->BayNumber = $BayNumber;
      $this->WarehouseBayType = $WarehouseBayType;
      $this->StatusId = $StatusId;
      $this->StatusIdEnum = $StatusIdEnum;
    }

    /**
     * @return WarehouseBayType
     */
    public function getWarehouseBayTypeEnum()
    {
      return $this->WarehouseBayTypeEnum;
    }

    /**
     * @param WarehouseBayType $WarehouseBayTypeEnum
     * @return WarehouseBay
     */
    public function setWarehouseBayTypeEnum($WarehouseBayTypeEnum)
    {
      $this->WarehouseBayTypeEnum = $WarehouseBayTypeEnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseName()
    {
      return $this->WarehouseName;
    }

    /**
     * @param string $WarehouseName
     * @return WarehouseBay
     */
    public function setWarehouseName($WarehouseName)
    {
      $this->WarehouseName = $WarehouseName;
      return $this;
    }

    /**
     * @return int
     */
    public function getAvailableStock()
    {
      return $this->AvailableStock;
    }

    /**
     * @param int $AvailableStock
     * @return WarehouseBay
     */
    public function setAvailableStock($AvailableStock)
    {
      $this->AvailableStock = $AvailableStock;
      return $this;
    }

    /**
     * @return ArrayOfProduct
     */
    public function getProducts()
    {
      return $this->Products;
    }

    /**
     * @param ArrayOfProduct $Products
     * @return WarehouseBay
     */
    public function setProducts($Products)
    {
      $this->Products = $Products;
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
     * @return WarehouseBay
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return WarehouseBay
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
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
     * @return WarehouseBay
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
     * @return WarehouseBay
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
     * @return WarehouseBay
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
     * @return WarehouseBay
     */
    public function setShelf($Shelf)
    {
      $this->Shelf = $Shelf;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseBayType()
    {
      return $this->WarehouseBayType;
    }

    /**
     * @param int $WarehouseBayType
     * @return WarehouseBay
     */
    public function setWarehouseBayType($WarehouseBayType)
    {
      $this->WarehouseBayType = $WarehouseBayType;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusId()
    {
      return $this->StatusId;
    }

    /**
     * @param int $StatusId
     * @return WarehouseBay
     */
    public function setStatusId($StatusId)
    {
      $this->StatusId = $StatusId;
      return $this;
    }

    /**
     * @return StatusID
     */
    public function getStatusIdEnum()
    {
      return $this->StatusIdEnum;
    }

    /**
     * @param StatusID $StatusIdEnum
     * @return WarehouseBay
     */
    public function setStatusIdEnum($StatusIdEnum)
    {
      $this->StatusIdEnum = $StatusIdEnum;
      return $this;
    }

}
