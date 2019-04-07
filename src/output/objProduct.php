<?php

class objProduct
{

    /**
     * @var boolean $isChecked
     */
    protected $isChecked = null;

    /**
     * @var boolean $isListed
     */
    protected $isListed = null;

    /**
     * @var string $SupplierSKU
     */
    protected $SupplierSKU = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $UniqueID
     */
    protected $UniqueID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $FullName
     */
    protected $FullName = null;

    /**
     * @var string $Options
     */
    protected $Options = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ManufacturerSKU
     */
    protected $ManufacturerSKU = null;

    /**
     * @var string $BasePrice
     */
    protected $BasePrice = null;

    /**
     * @var int $VatRateID
     */
    protected $VatRateID = null;

    /**
     * @var string $VatRate
     */
    protected $VatRate = null;

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var int $RangeID
     */
    protected $RangeID = null;

    /**
     * @var string $RangeName
     */
    protected $RangeName = null;

    /**
     * @var int $PreOrder
     */
    protected $PreOrder = null;

    /**
     * @var int $EndOfLine
     */
    protected $EndOfLine = null;

    /**
     * @var int $StockLevel
     */
    protected $StockLevel = null;

    /**
     * @var int $PseudoStockType
     */
    protected $PseudoStockType = null;

    /**
     * @var int $PseudoStockLevel
     */
    protected $PseudoStockLevel = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var int $SChanLinkID
     */
    protected $SChanLinkID = null;

    /**
     * @var string $SChanPrice
     */
    protected $SChanPrice = null;

    /**
     * @var string $SChanGrossPrice
     */
    protected $SChanGrossPrice = null;

    /**
     * @var int $SChanVatRateID
     */
    protected $SChanVatRateID = null;

    /**
     * @var int $ProductType
     */
    protected $ProductType = null;

    /**
     * @var string $SupplierPrice
     */
    protected $SupplierPrice = null;

    /**
     * @var int $LengthMM
     */
    protected $LengthMM = null;

    /**
     * @var int $WidthMM
     */
    protected $WidthMM = null;

    /**
     * @var int $HeightMM
     */
    protected $HeightMM = null;

    /**
     * @var int $WeightGM
     */
    protected $WeightGM = null;

    /**
     * @var int $LargeLetterCompatible
     */
    protected $LargeLetterCompatible = null;

    /**
     * @var string $ExternalProductId
     */
    protected $ExternalProductId = null;

    /**
     * @var int $AdditionalShippingLabel
     */
    protected $AdditionalShippingLabel = null;

    /**
     * @var string $defaultImageUrl
     */
    protected $defaultImageUrl = null;

    /**
     * @var int $DeliveryLeadTimeDays
     */
    protected $DeliveryLeadTimeDays = null;

    /**
     * @var int $ProductTemplateId
     */
    protected $ProductTemplateId = null;

    /**
     * @var ProductTemplateMode $ProductTemplateMode
     */
    protected $ProductTemplateMode = null;

    /**
     * @var ArrayOfProductBarcode $AdditionalBarcodes
     */
    protected $AdditionalBarcodes = null;

    /**
     * @var ArrayOfWarehouseBay $Locations
     */
    protected $Locations = null;

    /**
     * @var ProductDimensions $Dimensions
     */
    protected $Dimensions = null;

    /**
     * @var boolean $saveWeightChecked
     */
    protected $saveWeightChecked = null;

    /**
     * @var boolean $saveDimsChecked
     */
    protected $saveDimsChecked = null;

    /**
     * @var boolean $UseDispatchIdentifiers
     */
    protected $UseDispatchIdentifiers = null;

    /**
     * @var string $DispatchIdentifierOption
     */
    protected $DispatchIdentifierOption = null;

    /**
     * @var int $DispatchIdentifierOptionID
     */
    protected $DispatchIdentifierOptionID = null;

    /**
     * @param boolean $isChecked
     * @param boolean $isListed
     * @param int $ID
     * @param int $UniqueID
     * @param int $VatRateID
     * @param int $RangeID
     * @param int $PreOrder
     * @param int $EndOfLine
     * @param int $StockLevel
     * @param int $PseudoStockType
     * @param int $PseudoStockLevel
     * @param int $StatusID
     * @param int $SChanLinkID
     * @param int $SChanVatRateID
     * @param int $ProductType
     * @param int $LengthMM
     * @param int $WidthMM
     * @param int $HeightMM
     * @param int $WeightGM
     * @param int $LargeLetterCompatible
     * @param int $AdditionalShippingLabel
     * @param int $DeliveryLeadTimeDays
     * @param int $ProductTemplateId
     * @param ProductTemplateMode $ProductTemplateMode
     * @param boolean $saveWeightChecked
     * @param boolean $saveDimsChecked
     * @param boolean $UseDispatchIdentifiers
     * @param int $DispatchIdentifierOptionID
     */
    public function __construct($isChecked, $isListed, $ID, $UniqueID, $VatRateID, $RangeID, $PreOrder, $EndOfLine, $StockLevel, $PseudoStockType, $PseudoStockLevel, $StatusID, $SChanLinkID, $SChanVatRateID, $ProductType, $LengthMM, $WidthMM, $HeightMM, $WeightGM, $LargeLetterCompatible, $AdditionalShippingLabel, $DeliveryLeadTimeDays, $ProductTemplateId, $ProductTemplateMode, $saveWeightChecked, $saveDimsChecked, $UseDispatchIdentifiers, $DispatchIdentifierOptionID)
    {
      $this->isChecked = $isChecked;
      $this->isListed = $isListed;
      $this->ID = $ID;
      $this->UniqueID = $UniqueID;
      $this->VatRateID = $VatRateID;
      $this->RangeID = $RangeID;
      $this->PreOrder = $PreOrder;
      $this->EndOfLine = $EndOfLine;
      $this->StockLevel = $StockLevel;
      $this->PseudoStockType = $PseudoStockType;
      $this->PseudoStockLevel = $PseudoStockLevel;
      $this->StatusID = $StatusID;
      $this->SChanLinkID = $SChanLinkID;
      $this->SChanVatRateID = $SChanVatRateID;
      $this->ProductType = $ProductType;
      $this->LengthMM = $LengthMM;
      $this->WidthMM = $WidthMM;
      $this->HeightMM = $HeightMM;
      $this->WeightGM = $WeightGM;
      $this->LargeLetterCompatible = $LargeLetterCompatible;
      $this->AdditionalShippingLabel = $AdditionalShippingLabel;
      $this->DeliveryLeadTimeDays = $DeliveryLeadTimeDays;
      $this->ProductTemplateId = $ProductTemplateId;
      $this->ProductTemplateMode = $ProductTemplateMode;
      $this->saveWeightChecked = $saveWeightChecked;
      $this->saveDimsChecked = $saveDimsChecked;
      $this->UseDispatchIdentifiers = $UseDispatchIdentifiers;
      $this->DispatchIdentifierOptionID = $DispatchIdentifierOptionID;
    }

    /**
     * @return boolean
     */
    public function getIsChecked()
    {
      return $this->isChecked;
    }

    /**
     * @param boolean $isChecked
     * @return objProduct
     */
    public function setIsChecked($isChecked)
    {
      $this->isChecked = $isChecked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsListed()
    {
      return $this->isListed;
    }

    /**
     * @param boolean $isListed
     * @return objProduct
     */
    public function setIsListed($isListed)
    {
      $this->isListed = $isListed;
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
     * @return objProduct
     */
    public function setSupplierSKU($SupplierSKU)
    {
      $this->SupplierSKU = $SupplierSKU;
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
     * @return objProduct
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getUniqueID()
    {
      return $this->UniqueID;
    }

    /**
     * @param int $UniqueID
     * @return objProduct
     */
    public function setUniqueID($UniqueID)
    {
      $this->UniqueID = $UniqueID;
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
     * @return objProduct
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
      return $this->FullName;
    }

    /**
     * @param string $FullName
     * @return objProduct
     */
    public function setFullName($FullName)
    {
      $this->FullName = $FullName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param string $Options
     * @return objProduct
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
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
     * @return objProduct
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return objProduct
     */
    public function setManufacturerSKU($ManufacturerSKU)
    {
      $this->ManufacturerSKU = $ManufacturerSKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getBasePrice()
    {
      return $this->BasePrice;
    }

    /**
     * @param string $BasePrice
     * @return objProduct
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getVatRateID()
    {
      return $this->VatRateID;
    }

    /**
     * @param int $VatRateID
     * @return objProduct
     */
    public function setVatRateID($VatRateID)
    {
      $this->VatRateID = $VatRateID;
      return $this;
    }

    /**
     * @return string
     */
    public function getVatRate()
    {
      return $this->VatRate;
    }

    /**
     * @param string $VatRate
     * @return objProduct
     */
    public function setVatRate($VatRate)
    {
      $this->VatRate = $VatRate;
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
     * @return objProduct
     */
    public function setBarcode($Barcode)
    {
      $this->Barcode = $Barcode;
      return $this;
    }

    /**
     * @return int
     */
    public function getRangeID()
    {
      return $this->RangeID;
    }

    /**
     * @param int $RangeID
     * @return objProduct
     */
    public function setRangeID($RangeID)
    {
      $this->RangeID = $RangeID;
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
     * @return objProduct
     */
    public function setRangeName($RangeName)
    {
      $this->RangeName = $RangeName;
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
     * @return objProduct
     */
    public function setPreOrder($PreOrder)
    {
      $this->PreOrder = $PreOrder;
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
     * @return objProduct
     */
    public function setEndOfLine($EndOfLine)
    {
      $this->EndOfLine = $EndOfLine;
      return $this;
    }

    /**
     * @return int
     */
    public function getStockLevel()
    {
      return $this->StockLevel;
    }

    /**
     * @param int $StockLevel
     * @return objProduct
     */
    public function setStockLevel($StockLevel)
    {
      $this->StockLevel = $StockLevel;
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
     * @return objProduct
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
     * @return objProduct
     */
    public function setPseudoStockLevel($PseudoStockLevel)
    {
      $this->PseudoStockLevel = $PseudoStockLevel;
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
     * @return objProduct
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return int
     */
    public function getSChanLinkID()
    {
      return $this->SChanLinkID;
    }

    /**
     * @param int $SChanLinkID
     * @return objProduct
     */
    public function setSChanLinkID($SChanLinkID)
    {
      $this->SChanLinkID = $SChanLinkID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSChanPrice()
    {
      return $this->SChanPrice;
    }

    /**
     * @param string $SChanPrice
     * @return objProduct
     */
    public function setSChanPrice($SChanPrice)
    {
      $this->SChanPrice = $SChanPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getSChanGrossPrice()
    {
      return $this->SChanGrossPrice;
    }

    /**
     * @param string $SChanGrossPrice
     * @return objProduct
     */
    public function setSChanGrossPrice($SChanGrossPrice)
    {
      $this->SChanGrossPrice = $SChanGrossPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getSChanVatRateID()
    {
      return $this->SChanVatRateID;
    }

    /**
     * @param int $SChanVatRateID
     * @return objProduct
     */
    public function setSChanVatRateID($SChanVatRateID)
    {
      $this->SChanVatRateID = $SChanVatRateID;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductType()
    {
      return $this->ProductType;
    }

    /**
     * @param int $ProductType
     * @return objProduct
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierPrice()
    {
      return $this->SupplierPrice;
    }

    /**
     * @param string $SupplierPrice
     * @return objProduct
     */
    public function setSupplierPrice($SupplierPrice)
    {
      $this->SupplierPrice = $SupplierPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getLengthMM()
    {
      return $this->LengthMM;
    }

    /**
     * @param int $LengthMM
     * @return objProduct
     */
    public function setLengthMM($LengthMM)
    {
      $this->LengthMM = $LengthMM;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidthMM()
    {
      return $this->WidthMM;
    }

    /**
     * @param int $WidthMM
     * @return objProduct
     */
    public function setWidthMM($WidthMM)
    {
      $this->WidthMM = $WidthMM;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeightMM()
    {
      return $this->HeightMM;
    }

    /**
     * @param int $HeightMM
     * @return objProduct
     */
    public function setHeightMM($HeightMM)
    {
      $this->HeightMM = $HeightMM;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeightGM()
    {
      return $this->WeightGM;
    }

    /**
     * @param int $WeightGM
     * @return objProduct
     */
    public function setWeightGM($WeightGM)
    {
      $this->WeightGM = $WeightGM;
      return $this;
    }

    /**
     * @return int
     */
    public function getLargeLetterCompatible()
    {
      return $this->LargeLetterCompatible;
    }

    /**
     * @param int $LargeLetterCompatible
     * @return objProduct
     */
    public function setLargeLetterCompatible($LargeLetterCompatible)
    {
      $this->LargeLetterCompatible = $LargeLetterCompatible;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalProductId()
    {
      return $this->ExternalProductId;
    }

    /**
     * @param string $ExternalProductId
     * @return objProduct
     */
    public function setExternalProductId($ExternalProductId)
    {
      $this->ExternalProductId = $ExternalProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdditionalShippingLabel()
    {
      return $this->AdditionalShippingLabel;
    }

    /**
     * @param int $AdditionalShippingLabel
     * @return objProduct
     */
    public function setAdditionalShippingLabel($AdditionalShippingLabel)
    {
      $this->AdditionalShippingLabel = $AdditionalShippingLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultImageUrl()
    {
      return $this->defaultImageUrl;
    }

    /**
     * @param string $defaultImageUrl
     * @return objProduct
     */
    public function setDefaultImageUrl($defaultImageUrl)
    {
      $this->defaultImageUrl = $defaultImageUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryLeadTimeDays()
    {
      return $this->DeliveryLeadTimeDays;
    }

    /**
     * @param int $DeliveryLeadTimeDays
     * @return objProduct
     */
    public function setDeliveryLeadTimeDays($DeliveryLeadTimeDays)
    {
      $this->DeliveryLeadTimeDays = $DeliveryLeadTimeDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductTemplateId()
    {
      return $this->ProductTemplateId;
    }

    /**
     * @param int $ProductTemplateId
     * @return objProduct
     */
    public function setProductTemplateId($ProductTemplateId)
    {
      $this->ProductTemplateId = $ProductTemplateId;
      return $this;
    }

    /**
     * @return ProductTemplateMode
     */
    public function getProductTemplateMode()
    {
      return $this->ProductTemplateMode;
    }

    /**
     * @param ProductTemplateMode $ProductTemplateMode
     * @return objProduct
     */
    public function setProductTemplateMode($ProductTemplateMode)
    {
      $this->ProductTemplateMode = $ProductTemplateMode;
      return $this;
    }

    /**
     * @return ArrayOfProductBarcode
     */
    public function getAdditionalBarcodes()
    {
      return $this->AdditionalBarcodes;
    }

    /**
     * @param ArrayOfProductBarcode $AdditionalBarcodes
     * @return objProduct
     */
    public function setAdditionalBarcodes($AdditionalBarcodes)
    {
      $this->AdditionalBarcodes = $AdditionalBarcodes;
      return $this;
    }

    /**
     * @return ArrayOfWarehouseBay
     */
    public function getLocations()
    {
      return $this->Locations;
    }

    /**
     * @param ArrayOfWarehouseBay $Locations
     * @return objProduct
     */
    public function setLocations($Locations)
    {
      $this->Locations = $Locations;
      return $this;
    }

    /**
     * @return ProductDimensions
     */
    public function getDimensions()
    {
      return $this->Dimensions;
    }

    /**
     * @param ProductDimensions $Dimensions
     * @return objProduct
     */
    public function setDimensions($Dimensions)
    {
      $this->Dimensions = $Dimensions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaveWeightChecked()
    {
      return $this->saveWeightChecked;
    }

    /**
     * @param boolean $saveWeightChecked
     * @return objProduct
     */
    public function setSaveWeightChecked($saveWeightChecked)
    {
      $this->saveWeightChecked = $saveWeightChecked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaveDimsChecked()
    {
      return $this->saveDimsChecked;
    }

    /**
     * @param boolean $saveDimsChecked
     * @return objProduct
     */
    public function setSaveDimsChecked($saveDimsChecked)
    {
      $this->saveDimsChecked = $saveDimsChecked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseDispatchIdentifiers()
    {
      return $this->UseDispatchIdentifiers;
    }

    /**
     * @param boolean $UseDispatchIdentifiers
     * @return objProduct
     */
    public function setUseDispatchIdentifiers($UseDispatchIdentifiers)
    {
      $this->UseDispatchIdentifiers = $UseDispatchIdentifiers;
      return $this;
    }

    /**
     * @return string
     */
    public function getDispatchIdentifierOption()
    {
      return $this->DispatchIdentifierOption;
    }

    /**
     * @param string $DispatchIdentifierOption
     * @return objProduct
     */
    public function setDispatchIdentifierOption($DispatchIdentifierOption)
    {
      $this->DispatchIdentifierOption = $DispatchIdentifierOption;
      return $this;
    }

    /**
     * @return int
     */
    public function getDispatchIdentifierOptionID()
    {
      return $this->DispatchIdentifierOptionID;
    }

    /**
     * @param int $DispatchIdentifierOptionID
     * @return objProduct
     */
    public function setDispatchIdentifierOptionID($DispatchIdentifierOptionID)
    {
      $this->DispatchIdentifierOptionID = $DispatchIdentifierOptionID;
      return $this;
    }

}
