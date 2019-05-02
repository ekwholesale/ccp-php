<?php

class ProductFactoryLinkCustom
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $FactoryID
     */
    protected $FactoryID = null;

    /**
     * @var int $POType
     */
    protected $POType = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var \DateTime $PriceDate
     */
    protected $PriceDate = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var StatusID $StatusIDEnum
     */
    protected $StatusIDEnum = null;

    /**
     * @var string $SupplierSKU
     */
    protected $SupplierSKU = null;

    /**
     * @var float $PricePrecision
     */
    protected $PricePrecision = null;

    /**
     * @param int $ID
     * @param int $FactoryID
     * @param int $POType
     * @param float $Price
     * @param \DateTime $PriceDate
     * @param int $ProductID
     * @param int $StatusID
     * @param StatusID $StatusIDEnum
     * @param float $PricePrecision
     */
    public function __construct($ID, $FactoryID, $POType, $Price, \DateTime $PriceDate, $ProductID, $StatusID, $StatusIDEnum, $PricePrecision)
    {
      $this->ID = $ID;
      $this->FactoryID = $FactoryID;
      $this->POType = $POType;
      $this->Price = $Price;
      $this->PriceDate = $PriceDate->format(\DateTime::ATOM);
      $this->ProductID = $ProductID;
      $this->StatusID = $StatusID;
      $this->StatusIDEnum = $StatusIDEnum;
      $this->PricePrecision = $PricePrecision;
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
     * @return ProductFactoryLink
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getFactoryID()
    {
      return $this->FactoryID;
    }

    /**
     * @param int $FactoryID
     * @return ProductFactoryLink
     */
    public function setFactoryID($FactoryID)
    {
      $this->FactoryID = $FactoryID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPOType()
    {
      return $this->POType;
    }

    /**
     * @param int $POType
     * @return ProductFactoryLink
     */
    public function setPOType($POType)
    {
      $this->POType = $POType;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return ProductFactoryLink
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPriceDate()
    {
      if ($this->PriceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PriceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PriceDate
     * @return ProductFactoryLink
     */
    public function setPriceDate(\DateTime $PriceDate)
    {
      $this->PriceDate = $PriceDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return ProductFactoryLink
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
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
     * @return ProductFactoryLink
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
     * @return ProductFactoryLink
     */
    public function setStatusIDEnum($StatusIDEnum)
    {
      $this->StatusIDEnum = $StatusIDEnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierSKU()
    {
      return $this->SupplierSKU;
    }

    /**
     * @param string $SupplierSKU
     * @return ProductFactoryLink
     */
    public function setSupplierSKU($SupplierSKU)
    {
      $this->SupplierSKU = $SupplierSKU;
      return $this;
    }

    /**
     * @return float
     */
    public function getPricePrecision()
    {
      return $this->PricePrecision;
    }

    /**
     * @param float $PricePrecision
     * @return ProductFactoryLink
     */
    public function setPricePrecision($PricePrecision)
    {
      $this->PricePrecision = $PricePrecision;
      return $this;
    }

}
