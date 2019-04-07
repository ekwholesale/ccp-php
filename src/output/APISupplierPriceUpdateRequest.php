<?php

class APISupplierPriceUpdateRequest
{

    /**
     * @var int $SupplierID
     */
    protected $SupplierID = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var string $SupplierSKU
     */
    protected $SupplierSKU = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @param int $SupplierID
     * @param int $ProductID
     * @param float $Price
     */
    public function __construct($SupplierID, $ProductID, $Price)
    {
      $this->SupplierID = $SupplierID;
      $this->ProductID = $ProductID;
      $this->Price = $Price;
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
     * @return APISupplierPriceUpdateRequest
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
     * @return APISupplierPriceUpdateRequest
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
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
     * @return APISupplierPriceUpdateRequest
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
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
     * @return APISupplierPriceUpdateRequest
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
      return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return APISupplierPriceUpdateRequest
     */
    public function setBarcode($Barcode)
    {
      $this->Barcode = $Barcode;
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
     * @return APISupplierPriceUpdateRequest
     */
    public function setSupplierSKU($SupplierSKU)
    {
      $this->SupplierSKU = $SupplierSKU;
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
     * @return APISupplierPriceUpdateRequest
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

}
