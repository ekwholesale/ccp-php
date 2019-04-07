<?php

class APIUpdateStockRequest
{

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

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
     * @var boolean $UpdateRealStock
     */
    protected $UpdateRealStock = null;

    /**
     * @var int $StockQuantity
     */
    protected $StockQuantity = null;

    /**
     * @var boolean $UpdatePseudoStock
     */
    protected $UpdatePseudoStock = null;

    /**
     * @var boolean $UpdatePseudoStockType
     */
    protected $UpdatePseudoStockType = null;

    /**
     * @var int $PseudoStockType
     */
    protected $PseudoStockType = null;

    /**
     * @var int $PseudoStockLevel
     */
    protected $PseudoStockLevel = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @param int $SalesChannelID
     * @param int $ProductID
     * @param boolean $UpdateRealStock
     * @param int $StockQuantity
     * @param boolean $UpdatePseudoStock
     * @param boolean $UpdatePseudoStockType
     * @param int $PseudoStockType
     * @param int $PseudoStockLevel
     */
    public function __construct($SalesChannelID, $ProductID, $UpdateRealStock, $StockQuantity, $UpdatePseudoStock, $UpdatePseudoStockType, $PseudoStockType, $PseudoStockLevel)
    {
      $this->SalesChannelID = $SalesChannelID;
      $this->ProductID = $ProductID;
      $this->UpdateRealStock = $UpdateRealStock;
      $this->StockQuantity = $StockQuantity;
      $this->UpdatePseudoStock = $UpdatePseudoStock;
      $this->UpdatePseudoStockType = $UpdatePseudoStockType;
      $this->PseudoStockType = $PseudoStockType;
      $this->PseudoStockLevel = $PseudoStockLevel;
    }

    /**
     * @return int
     */
    public function getSalesChannelID()
    {
      return $this->SalesChannelID;
    }

    /**
     * @param int $SalesChannelID
     * @return APIUpdateStockRequest
     */
    public function setSalesChannelID($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
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
     * @return APIUpdateStockRequest
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
     * @return APIUpdateStockRequest
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
     * @return APIUpdateStockRequest
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
     * @return APIUpdateStockRequest
     */
    public function setSupplierSKU($SupplierSKU)
    {
      $this->SupplierSKU = $SupplierSKU;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateRealStock()
    {
      return $this->UpdateRealStock;
    }

    /**
     * @param boolean $UpdateRealStock
     * @return APIUpdateStockRequest
     */
    public function setUpdateRealStock($UpdateRealStock)
    {
      $this->UpdateRealStock = $UpdateRealStock;
      return $this;
    }

    /**
     * @return int
     */
    public function getStockQuantity()
    {
      return $this->StockQuantity;
    }

    /**
     * @param int $StockQuantity
     * @return APIUpdateStockRequest
     */
    public function setStockQuantity($StockQuantity)
    {
      $this->StockQuantity = $StockQuantity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdatePseudoStock()
    {
      return $this->UpdatePseudoStock;
    }

    /**
     * @param boolean $UpdatePseudoStock
     * @return APIUpdateStockRequest
     */
    public function setUpdatePseudoStock($UpdatePseudoStock)
    {
      $this->UpdatePseudoStock = $UpdatePseudoStock;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdatePseudoStockType()
    {
      return $this->UpdatePseudoStockType;
    }

    /**
     * @param boolean $UpdatePseudoStockType
     * @return APIUpdateStockRequest
     */
    public function setUpdatePseudoStockType($UpdatePseudoStockType)
    {
      $this->UpdatePseudoStockType = $UpdatePseudoStockType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPseudoStockType()
    {
      return $this->PseudoStockType;
    }

    /**
     * @param int $PseudoStockType
     * @return APIUpdateStockRequest
     */
    public function setPseudoStockType($PseudoStockType)
    {
      $this->PseudoStockType = $PseudoStockType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPseudoStockLevel()
    {
      return $this->PseudoStockLevel;
    }

    /**
     * @param int $PseudoStockLevel
     * @return APIUpdateStockRequest
     */
    public function setPseudoStockLevel($PseudoStockLevel)
    {
      $this->PseudoStockLevel = $PseudoStockLevel;
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
     * @return APIUpdateStockRequest
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
    }

}
