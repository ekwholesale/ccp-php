<?php

class APIAddMultiPackRequest
{

    /**
     * @var ArrayOfMultiPackItem $packageItems
     */
    protected $packageItems = null;

    /**
     * @var string $RangeSKU
     */
    protected $RangeSKU = null;

    /**
     * @var string $RangeName
     */
    protected $RangeName = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var string $MultipackName
     */
    protected $MultipackName = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $PackImageUrl
     */
    protected $PackImageUrl = null;

    /**
     * @var float $NetPrice
     */
    protected $NetPrice = null;

    /**
     * @var VatRate $VatRate
     */
    protected $VatRate = null;

    /**
     * @var int $MasterOptionValueID
     */
    protected $MasterOptionValueID = null;

    /**
     * @var string $MasterOptionValueName
     */
    protected $MasterOptionValueName = null;

    /**
     * @var boolean $EndOfLine
     */
    protected $EndOfLine = null;

    /**
     * @var boolean $PreOrder
     */
    protected $PreOrder = null;

    /**
     * @var boolean $GroupAllItems
     */
    protected $GroupAllItems = null;

    /**
     * @param float $NetPrice
     * @param VatRate $VatRate
     * @param int $MasterOptionValueID
     * @param boolean $EndOfLine
     * @param boolean $PreOrder
     * @param boolean $GroupAllItems
     */
    public function __construct($NetPrice, $VatRate, $MasterOptionValueID, $EndOfLine, $PreOrder, $GroupAllItems)
    {
      $this->NetPrice = $NetPrice;
      $this->VatRate = $VatRate;
      $this->MasterOptionValueID = $MasterOptionValueID;
      $this->EndOfLine = $EndOfLine;
      $this->PreOrder = $PreOrder;
      $this->GroupAllItems = $GroupAllItems;
    }

    /**
     * @return ArrayOfMultiPackItem
     */
    public function getPackageItems()
    {
      return $this->packageItems;
    }

    /**
     * @param ArrayOfMultiPackItem $packageItems
     * @return APIAddMultiPackRequest
     */
    public function setPackageItems($packageItems)
    {
      $this->packageItems = $packageItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getRangeSKU()
    {
      return $this->RangeSKU;
    }

    /**
     * @param string $RangeSKU
     * @return APIAddMultiPackRequest
     */
    public function setRangeSKU($RangeSKU)
    {
      $this->RangeSKU = $RangeSKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getRangeName()
    {
      return $this->RangeName;
    }

    /**
     * @param string $RangeName
     * @return APIAddMultiPackRequest
     */
    public function setRangeName($RangeName)
    {
      $this->RangeName = $RangeName;
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
     * @return APIAddMultiPackRequest
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
     * @return APIAddMultiPackRequest
     */
    public function setBarcode($Barcode)
    {
      $this->Barcode = $Barcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultipackName()
    {
      return $this->MultipackName;
    }

    /**
     * @param string $MultipackName
     * @return APIAddMultiPackRequest
     */
    public function setMultipackName($MultipackName)
    {
      $this->MultipackName = $MultipackName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return APIAddMultiPackRequest
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackImageUrl()
    {
      return $this->PackImageUrl;
    }

    /**
     * @param string $PackImageUrl
     * @return APIAddMultiPackRequest
     */
    public function setPackImageUrl($PackImageUrl)
    {
      $this->PackImageUrl = $PackImageUrl;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetPrice()
    {
      return $this->NetPrice;
    }

    /**
     * @param float $NetPrice
     * @return APIAddMultiPackRequest
     */
    public function setNetPrice($NetPrice)
    {
      $this->NetPrice = $NetPrice;
      return $this;
    }

    /**
     * @return VatRate
     */
    public function getVatRate()
    {
      return $this->VatRate;
    }

    /**
     * @param VatRate $VatRate
     * @return APIAddMultiPackRequest
     */
    public function setVatRate($VatRate)
    {
      $this->VatRate = $VatRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getMasterOptionValueID()
    {
      return $this->MasterOptionValueID;
    }

    /**
     * @param int $MasterOptionValueID
     * @return APIAddMultiPackRequest
     */
    public function setMasterOptionValueID($MasterOptionValueID)
    {
      $this->MasterOptionValueID = $MasterOptionValueID;
      return $this;
    }

    /**
     * @return string
     */
    public function getMasterOptionValueName()
    {
      return $this->MasterOptionValueName;
    }

    /**
     * @param string $MasterOptionValueName
     * @return APIAddMultiPackRequest
     */
    public function setMasterOptionValueName($MasterOptionValueName)
    {
      $this->MasterOptionValueName = $MasterOptionValueName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEndOfLine()
    {
      return $this->EndOfLine;
    }

    /**
     * @param boolean $EndOfLine
     * @return APIAddMultiPackRequest
     */
    public function setEndOfLine($EndOfLine)
    {
      $this->EndOfLine = $EndOfLine;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreOrder()
    {
      return $this->PreOrder;
    }

    /**
     * @param boolean $PreOrder
     * @return APIAddMultiPackRequest
     */
    public function setPreOrder($PreOrder)
    {
      $this->PreOrder = $PreOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGroupAllItems()
    {
      return $this->GroupAllItems;
    }

    /**
     * @param boolean $GroupAllItems
     * @return APIAddMultiPackRequest
     */
    public function setGroupAllItems($GroupAllItems)
    {
      $this->GroupAllItems = $GroupAllItems;
      return $this;
    }

}
