<?php

class ProductRangeCustom
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $CategoryID
     */
    protected $CategoryID = null;

    /**
     * @var string $Manufacturer
     */
    protected $Manufacturer = null;

    /**
     * @var string $ManufacturerSKU
     */
    protected $ManufacturerSKU = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $NeckShape
     */
    protected $NeckShape = null;

    /**
     * @var int $EndOfLine
     */
    protected $EndOfLine = null;

    /**
     * @var int $PreOrder
     */
    protected $PreOrder = null;

    /**
     * @var int $Weight
     */
    protected $Weight = null;

    /**
     * @var \DateTime $LastStockCheck
     */
    protected $LastStockCheck = null;

    /**
     * @var int $GroupBy
     */
    protected $GroupBy = null;

    /**
     * @var int $WarehousePickOrder
     */
    protected $WarehousePickOrder = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var StatusID $StatusIDEnum
     */
    protected $StatusIDEnum = null;

    /**
     * @var \DateTime $DateAdded
     */
    protected $DateAdded = null;

    /**
     * @param int $ID
     * @param int $BrandID
     * @param int $CategoryID
     * @param int $EndOfLine
     * @param int $PreOrder
     * @param int $Weight
     * @param \DateTime $LastStockCheck
     * @param int $GroupBy
     * @param int $WarehousePickOrder
     * @param int $StatusID
     * @param StatusID $StatusIDEnum
     * @param \DateTime $DateAdded
     */
    public function __construct($ID, $BrandID, $CategoryID, $EndOfLine, $PreOrder, $Weight, \DateTime $LastStockCheck, $GroupBy, $WarehousePickOrder, $StatusID, $StatusIDEnum, \DateTime $DateAdded)
    {
      $this->ID = $ID;
      $this->BrandID = $BrandID;
      $this->CategoryID = $CategoryID;
      $this->EndOfLine = $EndOfLine;
      $this->PreOrder = $PreOrder;
      $this->Weight = $Weight;
      $this->LastStockCheck = $LastStockCheck->format(\DateTime::ATOM);
      $this->GroupBy = $GroupBy;
      $this->WarehousePickOrder = $WarehousePickOrder;
      $this->StatusID = $StatusID;
      $this->StatusIDEnum = $StatusIDEnum;
      $this->DateAdded = $DateAdded->format(\DateTime::ATOM);
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
     * @return ProductRange
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
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
     * @return ProductRange
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryID()
    {
      return $this->CategoryID;
    }

    /**
     * @param int $CategoryID
     * @return ProductRange
     */
    public function setCategoryID($CategoryID)
    {
      $this->CategoryID = $CategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
      return $this->Manufacturer;
    }

    /**
     * @param string $Manufacturer
     * @return ProductRange
     */
    public function setManufacturer($Manufacturer)
    {
      $this->Manufacturer = $Manufacturer;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerSKU()
    {
      return $this->ManufacturerSKU;
    }

    /**
     * @param string $ManufacturerSKU
     * @return ProductRange
     */
    public function setManufacturerSKU($ManufacturerSKU)
    {
      $this->ManufacturerSKU = $ManufacturerSKU;
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
     * @return ProductRange
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNeckShape()
    {
      return $this->NeckShape;
    }

    /**
     * @param string $NeckShape
     * @return ProductRange
     */
    public function setNeckShape($NeckShape)
    {
      $this->NeckShape = $NeckShape;
      return $this;
    }

    /**
     * @return int
     */
    public function getEndOfLine()
    {
      return $this->EndOfLine;
    }

    /**
     * @param int $EndOfLine
     * @return ProductRange
     */
    public function setEndOfLine($EndOfLine)
    {
      $this->EndOfLine = $EndOfLine;
      return $this;
    }

    /**
     * @return int
     */
    public function getPreOrder()
    {
      return $this->PreOrder;
    }

    /**
     * @param int $PreOrder
     * @return ProductRange
     */
    public function setPreOrder($PreOrder)
    {
      $this->PreOrder = $PreOrder;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param int $Weight
     * @return ProductRange
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastStockCheck()
    {
      if ($this->LastStockCheck == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastStockCheck);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastStockCheck
     * @return ProductRange
     */
    public function setLastStockCheck(\DateTime $LastStockCheck)
    {
      $this->LastStockCheck = $LastStockCheck->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getGroupBy()
    {
      return $this->GroupBy;
    }

    /**
     * @param int $GroupBy
     * @return ProductRange
     */
    public function setGroupBy($GroupBy)
    {
      $this->GroupBy = $GroupBy;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehousePickOrder()
    {
      return $this->WarehousePickOrder;
    }

    /**
     * @param int $WarehousePickOrder
     * @return ProductRange
     */
    public function setWarehousePickOrder($WarehousePickOrder)
    {
      $this->WarehousePickOrder = $WarehousePickOrder;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusID()
    {
      return $this->StatusID;
    }

    /**
     * @param int $StatusID
     * @return ProductRange
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return StatusID
     */
    public function getStatusIDEnum()
    {
      return $this->StatusIDEnum;
    }

    /**
     * @param StatusID $StatusIDEnum
     * @return ProductRange
     */
    public function setStatusIDEnum($StatusIDEnum)
    {
      $this->StatusIDEnum = $StatusIDEnum;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdded()
    {
      if ($this->DateAdded == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateAdded);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateAdded
     * @return ProductRange
     */
    public function setDateAdded(\DateTime $DateAdded)
    {
      $this->DateAdded = $DateAdded->format(\DateTime::ATOM);
      return $this;
    }

}
