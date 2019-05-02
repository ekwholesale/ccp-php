<?php

class APIProductSupplierLink
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var int $SupplierID
     */
    protected $SupplierID = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var float $SupplierPrice
     */
    protected $SupplierPrice = null;

    /**
     * @var \DateTime $SupplierPriceDate
     */
    protected $SupplierPriceDate = null;

    /**
     * @var string $SupplierSKU
     */
    protected $SupplierSKU = null;

    /**
     * @param int $ID
     * @param int $ProductID
     * @param int $SupplierID
     * @param float $SupplierPrice
     * @param \DateTime $SupplierPriceDate
     */
    public function __construct($ID, $ProductID, $SupplierID, $SupplierPrice, \DateTime $SupplierPriceDate)
    {
      $this->ID = $ID;
      $this->ProductID = $ProductID;
      $this->SupplierID = $SupplierID;
      $this->SupplierPrice = $SupplierPrice;
      $this->SupplierPriceDate = $SupplierPriceDate->format(\DateTime::ATOM);
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
     * @return APIProductSupplierLink
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return APIProductSupplierLink
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return int
     */
    public function getSupplierID()
    {
      return $this->SupplierID;
    }

    /**
     * @param int $SupplierID
     * @return APIProductSupplierLink
     */
    public function setSupplierID($SupplierID)
    {
      $this->SupplierID = $SupplierID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierName()
    {
      return $this->SupplierName;
    }

    /**
     * @param string $SupplierName
     * @return APIProductSupplierLink
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
    }

    /**
     * @return float
     */
    public function getSupplierPrice()
    {
      return $this->SupplierPrice;
    }

    /**
     * @param float $SupplierPrice
     * @return APIProductSupplierLink
     */
    public function setSupplierPrice($SupplierPrice)
    {
      $this->SupplierPrice = $SupplierPrice;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSupplierPriceDate()
    {
      if ($this->SupplierPriceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SupplierPriceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SupplierPriceDate
     * @return APIProductSupplierLink
     */
    public function setSupplierPriceDate(\DateTime $SupplierPriceDate)
    {
      $this->SupplierPriceDate = $SupplierPriceDate->format(\DateTime::ATOM);
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
     * @return APIProductSupplierLink
     */
    public function setSupplierSKU($SupplierSKU)
    {
      $this->SupplierSKU = $SupplierSKU;
      return $this;
    }

}
