<?php

class ProductCustom2
{

    /**
     * @var boolean $PreventExtendedSerialization
     */
    protected $PreventExtendedSerialization = null;

    /**
     * @var ArrayOfProductBarcode $AdditionalBarcodes
     */
    protected $AdditionalBarcodes = null;

    /**
     * @var ArrayOfFactory $Suppliers
     */
    protected $Suppliers = null;

    /**
     * @var ArrayOfProductOptionValue $OptionValues
     */
    protected $OptionValues = null;

    /**
     * @var ArrayOfProductOptionValue $Attributes
     */
    protected $Attributes = null;

    /**
     * @var ProductRange $Range
     */
    protected $Range = null;

    /**
     * @var int $ExternalStockLevel
     */
    protected $ExternalStockLevel = null;

    /**
     * @var int $ChannelCount
     */
    protected $ChannelCount = null;

    /**
     * @var ProductType $ProductTypeEnum
     */
    protected $ProductTypeEnum = null;

    /**
     * @var ProductStockType $ProductStockTypeEnum
     */
    protected $ProductStockTypeEnum = null;

    /**
     * @var ProductDispatchIdentifierOption $DispatchIdentifierOptionEnum
     */
    protected $DispatchIdentifierOptionEnum = null;

    /**
     * @var string $FullName
     */
    protected $FullName = null;

    /**
     * @var int $StockLevel
     */
    protected $StockLevel = null;

    /**
     * @var string $ProductImage
     */
    protected $ProductImage = null;

    /**
     * @var anyType $ProductRangeName
     */
    protected $ProductRangeName = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $AdditionalShippingLabel
     */
    protected $AdditionalShippingLabel = null;

    /**
     * @var int $AutoPurchaseOrderType
     */
    protected $AutoPurchaseOrderType = null;

    /**
     * @var string $BarCodeNumber
     */
    protected $BarCodeNumber = null;

    /**
     * @var float $BasePrice
     */
    protected $BasePrice = null;

    /**
     * @var int $BrandDetailsId
     */
    protected $BrandDetailsId = null;

    /**
     * @var \DateTime $DateAdded
     */
    protected $DateAdded = null;

    /**
     * @var int $DeliveryLeadTimeDays
     */
    protected $DeliveryLeadTimeDays = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $EndOfLine
     */
    protected $EndOfLine = null;

    /**
     * @var string $Error
     */
    protected $Error = null;

    /**
     * @var string $ExternalProductId
     */
    protected $ExternalProductId = null;

    /**
     * @var int $HeightMM
     */
    protected $HeightMM = null;

    /**
     * @var int $LargeLetterCompatible
     */
    protected $LargeLetterCompatible = null;

    /**
     * @var int $LengthMM
     */
    protected $LengthMM = null;

    /**
     * @var string $ManufacturerSKU
     */
    protected $ManufacturerSKU = null;

    /**
     * @var string $MatchOptions
     */
    protected $MatchOptions = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $PreOrder
     */
    protected $PreOrder = null;

    /**
     * @var int $ProductRangeID
     */
    protected $ProductRangeID = null;

    /**
     * @var int $ProductTemplateId
     */
    protected $ProductTemplateId = null;

    /**
     * @var int $ProductTemplateMode
     */
    protected $ProductTemplateMode = null;

    /**
     * @var int $ProductType
     */
    protected $ProductType = null;

    /**
     * @var float $ProductVATRate
     */
    protected $ProductVATRate = null;

    /**
     * @var int $PurchaseOrderAtStockQuantity
     */
    protected $PurchaseOrderAtStockQuantity = null;

    /**
     * @var int $PurchaseOrderMaxStock
     */
    protected $PurchaseOrderMaxStock = null;

    /**
     * @var int $PurchaseOrderStockType
     */
    protected $PurchaseOrderStockType = null;

    /**
     * @var string $SearchText
     */
    protected $SearchText = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var StatusID $StatusIDEnum
     */
    protected $StatusIDEnum = null;

    /**
     * @var string $Thumbs200x200
     */
    protected $Thumbs200x200 = null;

    /**
     * @var string $Thumbs75x75
     */
    protected $Thumbs75x75 = null;

    /**
     * @var int $VATRateID
     */
    protected $VATRateID = null;

    /**
     * @var int $WeightGM
     */
    protected $WeightGM = null;

    /**
     * @var int $WidthMM
     */
    protected $WidthMM = null;

    /**
     * @var int $ProductStockType
     */
    protected $ProductStockType = null;

    /**
     * @var int $PurchaseOrderBoxQuantity
     */
    protected $PurchaseOrderBoxQuantity = null;

    /**
     * @var float $SupplierPrice
     */
    protected $SupplierPrice = null;

    /**
     * @var int $DispatchIdentifierOption
     */
    protected $DispatchIdentifierOption = null;

    /**
     * @param boolean $PreventExtendedSerialization
     * @param ProductType $ProductTypeEnum
     * @param ProductStockType $ProductStockTypeEnum
     * @param ProductDispatchIdentifierOption $DispatchIdentifierOptionEnum
     * @param int $StockLevel
     * @param int $ID
     * @param int $AdditionalShippingLabel
     * @param int $AutoPurchaseOrderType
     * @param float $BasePrice
     * @param int $BrandDetailsId
     * @param \DateTime $DateAdded
     * @param int $DeliveryLeadTimeDays
     * @param int $EndOfLine
     * @param int $HeightMM
     * @param int $LargeLetterCompatible
     * @param int $LengthMM
     * @param int $PreOrder
     * @param int $ProductRangeID
     * @param int $ProductTemplateId
     * @param int $ProductTemplateMode
     * @param int $ProductType
     * @param float $ProductVATRate
     * @param int $PurchaseOrderAtStockQuantity
     * @param int $PurchaseOrderMaxStock
     * @param int $PurchaseOrderStockType
     * @param int $StatusID
     * @param StatusID $StatusIDEnum
     * @param int $VATRateID
     * @param int $WeightGM
     * @param int $WidthMM
     * @param int $ProductStockType
     * @param int $PurchaseOrderBoxQuantity
     * @param float $SupplierPrice
     * @param int $DispatchIdentifierOption
     */
    public function __construct($PreventExtendedSerialization, $ProductTypeEnum, $ProductStockTypeEnum, $DispatchIdentifierOptionEnum, $StockLevel, $ID, $AdditionalShippingLabel, $AutoPurchaseOrderType, $BasePrice, $BrandDetailsId, \DateTime $DateAdded, $DeliveryLeadTimeDays, $EndOfLine, $HeightMM, $LargeLetterCompatible, $LengthMM, $PreOrder, $ProductRangeID, $ProductTemplateId, $ProductTemplateMode, $ProductType, $ProductVATRate, $PurchaseOrderAtStockQuantity, $PurchaseOrderMaxStock, $PurchaseOrderStockType, $StatusID, $StatusIDEnum, $VATRateID, $WeightGM, $WidthMM, $ProductStockType, $PurchaseOrderBoxQuantity, $SupplierPrice, $DispatchIdentifierOption)
    {
      $this->PreventExtendedSerialization = $PreventExtendedSerialization;
      $this->ProductTypeEnum = $ProductTypeEnum;
      $this->ProductStockTypeEnum = $ProductStockTypeEnum;
      $this->DispatchIdentifierOptionEnum = $DispatchIdentifierOptionEnum;
      $this->StockLevel = $StockLevel;
      $this->ID = $ID;
      $this->AdditionalShippingLabel = $AdditionalShippingLabel;
      $this->AutoPurchaseOrderType = $AutoPurchaseOrderType;
      $this->BasePrice = $BasePrice;
      $this->BrandDetailsId = $BrandDetailsId;
      $this->DateAdded = $DateAdded->format(\DateTime::ATOM);
      $this->DeliveryLeadTimeDays = $DeliveryLeadTimeDays;
      $this->EndOfLine = $EndOfLine;
      $this->HeightMM = $HeightMM;
      $this->LargeLetterCompatible = $LargeLetterCompatible;
      $this->LengthMM = $LengthMM;
      $this->PreOrder = $PreOrder;
      $this->ProductRangeID = $ProductRangeID;
      $this->ProductTemplateId = $ProductTemplateId;
      $this->ProductTemplateMode = $ProductTemplateMode;
      $this->ProductType = $ProductType;
      $this->ProductVATRate = $ProductVATRate;
      $this->PurchaseOrderAtStockQuantity = $PurchaseOrderAtStockQuantity;
      $this->PurchaseOrderMaxStock = $PurchaseOrderMaxStock;
      $this->PurchaseOrderStockType = $PurchaseOrderStockType;
      $this->StatusID = $StatusID;
      $this->StatusIDEnum = $StatusIDEnum;
      $this->VATRateID = $VATRateID;
      $this->WeightGM = $WeightGM;
      $this->WidthMM = $WidthMM;
      $this->ProductStockType = $ProductStockType;
      $this->PurchaseOrderBoxQuantity = $PurchaseOrderBoxQuantity;
      $this->SupplierPrice = $SupplierPrice;
      $this->DispatchIdentifierOption = $DispatchIdentifierOption;
    }

    /**
     * @return boolean
     */
    public function getPreventExtendedSerialization()
    {
      return $this->PreventExtendedSerialization;
    }

    /**
     * @param boolean $PreventExtendedSerialization
     * @return Product
     */
    public function setPreventExtendedSerialization($PreventExtendedSerialization)
    {
      $this->PreventExtendedSerialization = $PreventExtendedSerialization;
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
     * @return Product
     */
    public function setAdditionalBarcodes($AdditionalBarcodes)
    {
      $this->AdditionalBarcodes = $AdditionalBarcodes;
      return $this;
    }

    /**
     * @return ArrayOfFactory
     */
    public function getSuppliers()
    {
      return $this->Suppliers;
    }

    /**
     * @param ArrayOfFactory $Suppliers
     * @return Product
     */
    public function setSuppliers($Suppliers)
    {
      $this->Suppliers = $Suppliers;
      return $this;
    }

    /**
     * @return ArrayOfProductOptionValue
     */
    public function getOptionValues()
    {
      return $this->OptionValues;
    }

    /**
     * @param ArrayOfProductOptionValue $OptionValues
     * @return Product
     */
    public function setOptionValues($OptionValues)
    {
      $this->OptionValues = $OptionValues;
      return $this;
    }

    /**
     * @return ArrayOfProductOptionValue
     */
    public function getAttributes()
    {
      return $this->Attributes;
    }

    /**
     * @param ArrayOfProductOptionValue $Attributes
     * @return Product
     */
    public function setAttributes($Attributes)
    {
      $this->Attributes = $Attributes;
      return $this;
    }

    /**
     * @return ProductRange
     */
    public function getRange()
    {
      return $this->Range;
    }

    /**
     * @param ProductRange $Range
     * @return Product
     */
    public function setRange($Range)
    {
      $this->Range = $Range;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalStockLevel()
    {
      return $this->ExternalStockLevel;
    }

    /**
     * @param int $ExternalStockLevel
     * @return Product
     */
    public function setExternalStockLevel($ExternalStockLevel)
    {
      $this->ExternalStockLevel = $ExternalStockLevel;
      return $this;
    }

    /**
     * @return int
     */
    public function getChannelCount()
    {
      return $this->ChannelCount;
    }

    /**
     * @param int $ChannelCount
     * @return Product
     */
    public function setChannelCount($ChannelCount)
    {
      $this->ChannelCount = $ChannelCount;
      return $this;
    }

    /**
     * @return ProductType
     */
    public function getProductTypeEnum()
    {
      return $this->ProductTypeEnum;
    }

    /**
     * @param ProductType $ProductTypeEnum
     * @return Product
     */
    public function setProductTypeEnum($ProductTypeEnum)
    {
      $this->ProductTypeEnum = $ProductTypeEnum;
      return $this;
    }

    /**
     * @return ProductStockType
     */
    public function getProductStockTypeEnum()
    {
      return $this->ProductStockTypeEnum;
    }

    /**
     * @param ProductStockType $ProductStockTypeEnum
     * @return Product
     */
    public function setProductStockTypeEnum($ProductStockTypeEnum)
    {
      $this->ProductStockTypeEnum = $ProductStockTypeEnum;
      return $this;
    }

    /**
     * @return ProductDispatchIdentifierOption
     */
    public function getDispatchIdentifierOptionEnum()
    {
      return $this->DispatchIdentifierOptionEnum;
    }

    /**
     * @param ProductDispatchIdentifierOption $DispatchIdentifierOptionEnum
     * @return Product
     */
    public function setDispatchIdentifierOptionEnum($DispatchIdentifierOptionEnum)
    {
      $this->DispatchIdentifierOptionEnum = $DispatchIdentifierOptionEnum;
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
     * @return Product
     */
    public function setFullName($FullName)
    {
      $this->FullName = $FullName;
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
     * @return Product
     */
    public function setStockLevel($StockLevel)
    {
      $this->StockLevel = $StockLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductImage()
    {
      return $this->ProductImage;
    }

    /**
     * @param string $ProductImage
     * @return Product
     */
    public function setProductImage($ProductImage)
    {
      $this->ProductImage = $ProductImage;
      return $this;
    }

    /**
     * @return anyType
     */
    public function getProductRangeName()
    {
      return $this->ProductRangeName;
    }

    /**
     * @param anyType $ProductRangeName
     * @return Product
     */
    public function setProductRangeName($ProductRangeName)
    {
      $this->ProductRangeName = $ProductRangeName;
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
     * @return Product
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return Product
     */
    public function setAdditionalShippingLabel($AdditionalShippingLabel)
    {
      $this->AdditionalShippingLabel = $AdditionalShippingLabel;
      return $this;
    }

    /**
     * @return int
     */
    public function getAutoPurchaseOrderType()
    {
      return $this->AutoPurchaseOrderType;
    }

    /**
     * @param int $AutoPurchaseOrderType
     * @return Product
     */
    public function setAutoPurchaseOrderType($AutoPurchaseOrderType)
    {
      $this->AutoPurchaseOrderType = $AutoPurchaseOrderType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarCodeNumber()
    {
      return $this->BarCodeNumber;
    }

    /**
     * @param string $BarCodeNumber
     * @return Product
     */
    public function setBarCodeNumber($BarCodeNumber)
    {
      $this->BarCodeNumber = $BarCodeNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getBasePrice()
    {
      return $this->BasePrice;
    }

    /**
     * @param float $BasePrice
     * @return Product
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getBrandDetailsId()
    {
      return $this->BrandDetailsId;
    }

    /**
     * @param int $BrandDetailsId
     * @return Product
     */
    public function setBrandDetailsId($BrandDetailsId)
    {
      $this->BrandDetailsId = $BrandDetailsId;
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
     * @return Product
     */
    public function setDateAdded(\DateTime $DateAdded)
    {
      $this->DateAdded = $DateAdded->format(\DateTime::ATOM);
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
     * @return Product
     */
    public function setDeliveryLeadTimeDays($DeliveryLeadTimeDays)
    {
      $this->DeliveryLeadTimeDays = $DeliveryLeadTimeDays;
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
     * @return Product
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return Product
     */
    public function setEndOfLine($EndOfLine)
    {
      $this->EndOfLine = $EndOfLine;
      return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param string $Error
     * @return Product
     */
    public function setError($Error)
    {
      $this->Error = $Error;
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
     * @return Product
     */
    public function setExternalProductId($ExternalProductId)
    {
      $this->ExternalProductId = $ExternalProductId;
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
     * @return Product
     */
    public function setHeightMM($HeightMM)
    {
      $this->HeightMM = $HeightMM;
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
     * @return Product
     */
    public function setLargeLetterCompatible($LargeLetterCompatible)
    {
      $this->LargeLetterCompatible = $LargeLetterCompatible;
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
     * @return Product
     */
    public function setLengthMM($LengthMM)
    {
      $this->LengthMM = $LengthMM;
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
     * @return Product
     */
    public function setManufacturerSKU($ManufacturerSKU)
    {
      $this->ManufacturerSKU = $ManufacturerSKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchOptions()
    {
      return $this->MatchOptions;
    }

    /**
     * @param string $MatchOptions
     * @return Product
     */
    public function setMatchOptions($MatchOptions)
    {
      $this->MatchOptions = $MatchOptions;
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
     * @return Product
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return Product
     */
    public function setPreOrder($PreOrder)
    {
      $this->PreOrder = $PreOrder;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductRangeID()
    {
      return $this->ProductRangeID;
    }

    /**
     * @param int $ProductRangeID
     * @return Product
     */
    public function setProductRangeID($ProductRangeID)
    {
      $this->ProductRangeID = $ProductRangeID;
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
     * @return Product
     */
    public function setProductTemplateId($ProductTemplateId)
    {
      $this->ProductTemplateId = $ProductTemplateId;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductTemplateMode()
    {
      return $this->ProductTemplateMode;
    }

    /**
     * @param int $ProductTemplateMode
     * @return Product
     */
    public function setProductTemplateMode($ProductTemplateMode)
    {
      $this->ProductTemplateMode = $ProductTemplateMode;
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
     * @return Product
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

    /**
     * @return float
     */
    public function getProductVATRate()
    {
      return $this->ProductVATRate;
    }

    /**
     * @param float $ProductVATRate
     * @return Product
     */
    public function setProductVATRate($ProductVATRate)
    {
      $this->ProductVATRate = $ProductVATRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseOrderAtStockQuantity()
    {
      return $this->PurchaseOrderAtStockQuantity;
    }

    /**
     * @param int $PurchaseOrderAtStockQuantity
     * @return Product
     */
    public function setPurchaseOrderAtStockQuantity($PurchaseOrderAtStockQuantity)
    {
      $this->PurchaseOrderAtStockQuantity = $PurchaseOrderAtStockQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseOrderMaxStock()
    {
      return $this->PurchaseOrderMaxStock;
    }

    /**
     * @param int $PurchaseOrderMaxStock
     * @return Product
     */
    public function setPurchaseOrderMaxStock($PurchaseOrderMaxStock)
    {
      $this->PurchaseOrderMaxStock = $PurchaseOrderMaxStock;
      return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseOrderStockType()
    {
      return $this->PurchaseOrderStockType;
    }

    /**
     * @param int $PurchaseOrderStockType
     * @return Product
     */
    public function setPurchaseOrderStockType($PurchaseOrderStockType)
    {
      $this->PurchaseOrderStockType = $PurchaseOrderStockType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
      return $this->SearchText;
    }

    /**
     * @param string $SearchText
     * @return Product
     */
    public function setSearchText($SearchText)
    {
      $this->SearchText = $SearchText;
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
     * @return Product
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
     * @return Product
     */
    public function setStatusIDEnum($StatusIDEnum)
    {
      $this->StatusIDEnum = $StatusIDEnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getThumbs200x200()
    {
      return $this->Thumbs200x200;
    }

    /**
     * @param string $Thumbs200x200
     * @return Product
     */
    public function setThumbs200x200($Thumbs200x200)
    {
      $this->Thumbs200x200 = $Thumbs200x200;
      return $this;
    }

    /**
     * @return string
     */
    public function getThumbs75x75()
    {
      return $this->Thumbs75x75;
    }

    /**
     * @param string $Thumbs75x75
     * @return Product
     */
    public function setThumbs75x75($Thumbs75x75)
    {
      $this->Thumbs75x75 = $Thumbs75x75;
      return $this;
    }

    /**
     * @return int
     */
    public function getVATRateID()
    {
      return $this->VATRateID;
    }

    /**
     * @param int $VATRateID
     * @return Product
     */
    public function setVATRateID($VATRateID)
    {
      $this->VATRateID = $VATRateID;
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
     * @return Product
     */
    public function setWeightGM($WeightGM)
    {
      $this->WeightGM = $WeightGM;
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
     * @return Product
     */
    public function setWidthMM($WidthMM)
    {
      $this->WidthMM = $WidthMM;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductStockType()
    {
      return $this->ProductStockType;
    }

    /**
     * @param int $ProductStockType
     * @return Product
     */
    public function setProductStockType($ProductStockType)
    {
      $this->ProductStockType = $ProductStockType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseOrderBoxQuantity()
    {
      return $this->PurchaseOrderBoxQuantity;
    }

    /**
     * @param int $PurchaseOrderBoxQuantity
     * @return Product
     */
    public function setPurchaseOrderBoxQuantity($PurchaseOrderBoxQuantity)
    {
      $this->PurchaseOrderBoxQuantity = $PurchaseOrderBoxQuantity;
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
     * @return Product
     */
    public function setSupplierPrice($SupplierPrice)
    {
      $this->SupplierPrice = $SupplierPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getDispatchIdentifierOption()
    {
      return $this->DispatchIdentifierOption;
    }

    /**
     * @param int $DispatchIdentifierOption
     * @return Product
     */
    public function setDispatchIdentifierOption($DispatchIdentifierOption)
    {
      $this->DispatchIdentifierOption = $DispatchIdentifierOption;
      return $this;
    }

}
