<?php

class APIProduct
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
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ManufacturerSKU
     */
    protected $ManufacturerSKU = null;

    /**
     * @var \DateTime $DateAdded
     */
    protected $DateAdded = null;

    /**
     * @var ArrayOfAPIProductSupplierLink $SupplierProductLinks
     */
    protected $SupplierProductLinks = null;

    /**
     * @var float $BasePrice
     */
    protected $BasePrice = null;

    /**
     * @var float $ChannelPrice
     */
    protected $ChannelPrice = null;

    /**
     * @var int $VATRateID
     */
    protected $VATRateID = null;

    /**
     * @var string $BarCodeNumber
     */
    protected $BarCodeNumber = null;

    /**
     * @var string $AdditionalBarCodes
     */
    protected $AdditionalBarCodes = null;

    /**
     * @var string $ASIN
     */
    protected $ASIN = null;

    /**
     * @var int $AmazonVariationID
     */
    protected $AmazonVariationID = null;

    /**
     * @var string $EbayListingID
     */
    protected $EbayListingID = null;

    /**
     * @var int $EbayVariationID
     */
    protected $EbayVariationID = null;

    /**
     * @var int $ProductRangeID
     */
    protected $ProductRangeID = null;

    /**
     * @var boolean $PreOrder
     */
    protected $PreOrder = null;

    /**
     * @var boolean $EndOfLine
     */
    protected $EndOfLine = null;

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
     * @var boolean $LargeLetterCompatible
     */
    protected $LargeLetterCompatible = null;

    /**
     * @var int $ProductType
     */
    protected $ProductType = null;

    /**
     * @var int $ProductVATRate
     */
    protected $ProductVATRate = null;

    /**
     * @var string $SearchText
     */
    protected $SearchText = null;

    /**
     * @var StatusID $StatusID
     */
    protected $StatusID = null;

    /**
     * @var boolean $AdditionalShippingLabel
     */
    protected $AdditionalShippingLabel = null;

    /**
     * @var string $ExternalProductId
     */
    protected $ExternalProductId = null;

    /**
     * @var string $Thumbs200x200
     */
    protected $Thumbs200x200 = null;

    /**
     * @var string $Thumbs75x75
     */
    protected $Thumbs75x75 = null;

    /**
     * @var string $MatchOptions
     */
    protected $MatchOptions = null;

    /**
     * @var int $StockLevel
     */
    protected $StockLevel = null;

    /**
     * @var int $ChannelPseudoStockLevel
     */
    protected $ChannelPseudoStockLevel = null;

    /**
     * @var ArrayOfAPIProductRangeOptionValue $SelectedProductRangeOptionValues
     */
    protected $SelectedProductRangeOptionValues = null;

    /**
     * @var ArrayOfString $imageB64Strings
     */
    protected $imageB64Strings = null;

    /**
     * @var ArrayOfAPIProductImage $images
     */
    protected $images = null;

    /**
     * @var ArrayOfAPIAmazonVariation $AmazonVariations
     */
    protected $AmazonVariations = null;

    /**
     * @var ArrayOfAPIEbayVariation $EbayVariations
     */
    protected $EbayVariations = null;

    /**
     * @var ArrayOfPackageProductWithQuantity $packItems
     */
    protected $packItems = null;

    /**
     * @var ArrayOfAPISalesChannelLink $SalesChannelLinks
     */
    protected $SalesChannelLinks = null;

    /**
     * @var int $PurchaseOrderMaxStock
     */
    protected $PurchaseOrderMaxStock = null;

    /**
     * @var int $PurchaseOrderAtStockQuantity
     */
    protected $PurchaseOrderAtStockQuantity = null;

    /**
     * @var int $PurchaseOrderStockType
     */
    protected $PurchaseOrderStockType = null;

    /**
     * @var int $PurchaseOrderBoxQuantity
     */
    protected $PurchaseOrderBoxQuantity = null;

    /**
     * @var int $ProductStockType
     */
    protected $ProductStockType = null;

    /**
     * @var int $DispatchIdentifierOption
     */
    protected $DispatchIdentifierOption = null;

    /**
     * @var ArrayOfItemBayStockLevel $StockLocations
     */
    protected $StockLocations = null;

    /**
     * @var ArrayOfSupplierOrderItem $OnOrder
     */
    protected $OnOrder = null;

    /**
     * @param int $ID
     * @param int $BrandID
     * @param \DateTime $DateAdded
     * @param float $BasePrice
     * @param float $ChannelPrice
     * @param int $VATRateID
     * @param int $AmazonVariationID
     * @param int $EbayVariationID
     * @param int $ProductRangeID
     * @param boolean $PreOrder
     * @param boolean $EndOfLine
     * @param int $LengthMM
     * @param int $WidthMM
     * @param int $HeightMM
     * @param int $WeightGM
     * @param boolean $LargeLetterCompatible
     * @param int $ProductType
     * @param int $ProductVATRate
     * @param StatusID $StatusID
     * @param boolean $AdditionalShippingLabel
     * @param int $StockLevel
     * @param int $ChannelPseudoStockLevel
     * @param int $PurchaseOrderMaxStock
     * @param int $PurchaseOrderAtStockQuantity
     * @param int $PurchaseOrderStockType
     * @param int $PurchaseOrderBoxQuantity
     * @param int $ProductStockType
     * @param int $DispatchIdentifierOption
     */
    public function __construct($ID, $BrandID, \DateTime $DateAdded, $BasePrice, $ChannelPrice, $VATRateID, $AmazonVariationID, $EbayVariationID, $ProductRangeID, $PreOrder, $EndOfLine, $LengthMM, $WidthMM, $HeightMM, $WeightGM, $LargeLetterCompatible, $ProductType, $ProductVATRate, $StatusID, $AdditionalShippingLabel, $StockLevel, $ChannelPseudoStockLevel, $PurchaseOrderMaxStock, $PurchaseOrderAtStockQuantity, $PurchaseOrderStockType, $PurchaseOrderBoxQuantity, $ProductStockType, $DispatchIdentifierOption)
    {
      $this->ID = $ID;
      $this->BrandID = $BrandID;
      $this->DateAdded = $DateAdded->format(\DateTime::ATOM);
      $this->BasePrice = $BasePrice;
      $this->ChannelPrice = $ChannelPrice;
      $this->VATRateID = $VATRateID;
      $this->AmazonVariationID = $AmazonVariationID;
      $this->EbayVariationID = $EbayVariationID;
      $this->ProductRangeID = $ProductRangeID;
      $this->PreOrder = $PreOrder;
      $this->EndOfLine = $EndOfLine;
      $this->LengthMM = $LengthMM;
      $this->WidthMM = $WidthMM;
      $this->HeightMM = $HeightMM;
      $this->WeightGM = $WeightGM;
      $this->LargeLetterCompatible = $LargeLetterCompatible;
      $this->ProductType = $ProductType;
      $this->ProductVATRate = $ProductVATRate;
      $this->StatusID = $StatusID;
      $this->AdditionalShippingLabel = $AdditionalShippingLabel;
      $this->StockLevel = $StockLevel;
      $this->ChannelPseudoStockLevel = $ChannelPseudoStockLevel;
      $this->PurchaseOrderMaxStock = $PurchaseOrderMaxStock;
      $this->PurchaseOrderAtStockQuantity = $PurchaseOrderAtStockQuantity;
      $this->PurchaseOrderStockType = $PurchaseOrderStockType;
      $this->PurchaseOrderBoxQuantity = $PurchaseOrderBoxQuantity;
      $this->ProductStockType = $ProductStockType;
      $this->DispatchIdentifierOption = $DispatchIdentifierOption;
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
     * @return APIProduct
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
     * @return APIProduct
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
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
     * @return APIProduct
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return APIProduct
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
     * @return APIProduct
     */
    public function setManufacturerSKU($ManufacturerSKU)
    {
      $this->ManufacturerSKU = $ManufacturerSKU;
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
     * @return APIProduct
     */
    public function setDateAdded(\DateTime $DateAdded)
    {
      $this->DateAdded = $DateAdded->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ArrayOfAPIProductSupplierLink
     */
    public function getSupplierProductLinks()
    {
      return $this->SupplierProductLinks;
    }

    /**
     * @param ArrayOfAPIProductSupplierLink $SupplierProductLinks
     * @return APIProduct
     */
    public function setSupplierProductLinks($SupplierProductLinks)
    {
      $this->SupplierProductLinks = $SupplierProductLinks;
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
     * @return APIProduct
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getChannelPrice()
    {
      return $this->ChannelPrice;
    }

    /**
     * @param float $ChannelPrice
     * @return APIProduct
     */
    public function setChannelPrice($ChannelPrice)
    {
      $this->ChannelPrice = $ChannelPrice;
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
     * @return APIProduct
     */
    public function setVATRateID($VATRateID)
    {
      $this->VATRateID = $VATRateID;
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
     * @return APIProduct
     */
    public function setBarCodeNumber($BarCodeNumber)
    {
      $this->BarCodeNumber = $BarCodeNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalBarCodes()
    {
      return $this->AdditionalBarCodes;
    }

    /**
     * @param string $AdditionalBarCodes
     * @return APIProduct
     */
    public function setAdditionalBarCodes($AdditionalBarCodes)
    {
      $this->AdditionalBarCodes = $AdditionalBarCodes;
      return $this;
    }

    /**
     * @return string
     */
    public function getASIN()
    {
      return $this->ASIN;
    }

    /**
     * @param string $ASIN
     * @return APIProduct
     */
    public function setASIN($ASIN)
    {
      $this->ASIN = $ASIN;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmazonVariationID()
    {
      return $this->AmazonVariationID;
    }

    /**
     * @param int $AmazonVariationID
     * @return APIProduct
     */
    public function setAmazonVariationID($AmazonVariationID)
    {
      $this->AmazonVariationID = $AmazonVariationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getEbayListingID()
    {
      return $this->EbayListingID;
    }

    /**
     * @param string $EbayListingID
     * @return APIProduct
     */
    public function setEbayListingID($EbayListingID)
    {
      $this->EbayListingID = $EbayListingID;
      return $this;
    }

    /**
     * @return int
     */
    public function getEbayVariationID()
    {
      return $this->EbayVariationID;
    }

    /**
     * @param int $EbayVariationID
     * @return APIProduct
     */
    public function setEbayVariationID($EbayVariationID)
    {
      $this->EbayVariationID = $EbayVariationID;
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
     * @return APIProduct
     */
    public function setProductRangeID($ProductRangeID)
    {
      $this->ProductRangeID = $ProductRangeID;
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
     * @return APIProduct
     */
    public function setPreOrder($PreOrder)
    {
      $this->PreOrder = $PreOrder;
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
     * @return APIProduct
     */
    public function setEndOfLine($EndOfLine)
    {
      $this->EndOfLine = $EndOfLine;
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
     * @return APIProduct
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
     * @return APIProduct
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
     * @return APIProduct
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
     * @return APIProduct
     */
    public function setWeightGM($WeightGM)
    {
      $this->WeightGM = $WeightGM;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLargeLetterCompatible()
    {
      return $this->LargeLetterCompatible;
    }

    /**
     * @param boolean $LargeLetterCompatible
     * @return APIProduct
     */
    public function setLargeLetterCompatible($LargeLetterCompatible)
    {
      $this->LargeLetterCompatible = $LargeLetterCompatible;
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
     * @return APIProduct
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductVATRate()
    {
      return $this->ProductVATRate;
    }

    /**
     * @param int $ProductVATRate
     * @return APIProduct
     */
    public function setProductVATRate($ProductVATRate)
    {
      $this->ProductVATRate = $ProductVATRate;
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
     * @return APIProduct
     */
    public function setSearchText($SearchText)
    {
      $this->SearchText = $SearchText;
      return $this;
    }

    /**
     * @return StatusID
     */
    public function getStatusID()
    {
      return $this->StatusID;
    }

    /**
     * @param StatusID $StatusID
     * @return APIProduct
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdditionalShippingLabel()
    {
      return $this->AdditionalShippingLabel;
    }

    /**
     * @param boolean $AdditionalShippingLabel
     * @return APIProduct
     */
    public function setAdditionalShippingLabel($AdditionalShippingLabel)
    {
      $this->AdditionalShippingLabel = $AdditionalShippingLabel;
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
     * @return APIProduct
     */
    public function setExternalProductId($ExternalProductId)
    {
      $this->ExternalProductId = $ExternalProductId;
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
     * @return APIProduct
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
     * @return APIProduct
     */
    public function setThumbs75x75($Thumbs75x75)
    {
      $this->Thumbs75x75 = $Thumbs75x75;
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
     * @return APIProduct
     */
    public function setMatchOptions($MatchOptions)
    {
      $this->MatchOptions = $MatchOptions;
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
     * @return APIProduct
     */
    public function setStockLevel($StockLevel)
    {
      $this->StockLevel = $StockLevel;
      return $this;
    }

    /**
     * @return int
     */
    public function getChannelPseudoStockLevel()
    {
      return $this->ChannelPseudoStockLevel;
    }

    /**
     * @param int $ChannelPseudoStockLevel
     * @return APIProduct
     */
    public function setChannelPseudoStockLevel($ChannelPseudoStockLevel)
    {
      $this->ChannelPseudoStockLevel = $ChannelPseudoStockLevel;
      return $this;
    }

    /**
     * @return ArrayOfAPIProductRangeOptionValue
     */
    public function getSelectedProductRangeOptionValues()
    {
      return $this->SelectedProductRangeOptionValues;
    }

    /**
     * @param ArrayOfAPIProductRangeOptionValue $SelectedProductRangeOptionValues
     * @return APIProduct
     */
    public function setSelectedProductRangeOptionValues($SelectedProductRangeOptionValues)
    {
      $this->SelectedProductRangeOptionValues = $SelectedProductRangeOptionValues;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getImageB64Strings()
    {
      return $this->imageB64Strings;
    }

    /**
     * @param ArrayOfString $imageB64Strings
     * @return APIProduct
     */
    public function setImageB64Strings($imageB64Strings)
    {
      $this->imageB64Strings = $imageB64Strings;
      return $this;
    }

    /**
     * @return ArrayOfAPIProductImage
     */
    public function getImages()
    {
      return $this->images;
    }

    /**
     * @param ArrayOfAPIProductImage $images
     * @return APIProduct
     */
    public function setImages($images)
    {
      $this->images = $images;
      return $this;
    }

    /**
     * @return ArrayOfAPIAmazonVariation
     */
    public function getAmazonVariations()
    {
      return $this->AmazonVariations;
    }

    /**
     * @param ArrayOfAPIAmazonVariation $AmazonVariations
     * @return APIProduct
     */
    public function setAmazonVariations($AmazonVariations)
    {
      $this->AmazonVariations = $AmazonVariations;
      return $this;
    }

    /**
     * @return ArrayOfAPIEbayVariation
     */
    public function getEbayVariations()
    {
      return $this->EbayVariations;
    }

    /**
     * @param ArrayOfAPIEbayVariation $EbayVariations
     * @return APIProduct
     */
    public function setEbayVariations($EbayVariations)
    {
      $this->EbayVariations = $EbayVariations;
      return $this;
    }

    /**
     * @return ArrayOfPackageProductWithQuantity
     */
    public function getPackItems()
    {
      return $this->packItems;
    }

    /**
     * @param ArrayOfPackageProductWithQuantity $packItems
     * @return APIProduct
     */
    public function setPackItems($packItems)
    {
      $this->packItems = $packItems;
      return $this;
    }

    /**
     * @return ArrayOfAPISalesChannelLink
     */
    public function getSalesChannelLinks()
    {
      return $this->SalesChannelLinks;
    }

    /**
     * @param ArrayOfAPISalesChannelLink $SalesChannelLinks
     * @return APIProduct
     */
    public function setSalesChannelLinks($SalesChannelLinks)
    {
      $this->SalesChannelLinks = $SalesChannelLinks;
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
     * @return APIProduct
     */
    public function setPurchaseOrderMaxStock($PurchaseOrderMaxStock)
    {
      $this->PurchaseOrderMaxStock = $PurchaseOrderMaxStock;
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
     * @return APIProduct
     */
    public function setPurchaseOrderAtStockQuantity($PurchaseOrderAtStockQuantity)
    {
      $this->PurchaseOrderAtStockQuantity = $PurchaseOrderAtStockQuantity;
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
     * @return APIProduct
     */
    public function setPurchaseOrderStockType($PurchaseOrderStockType)
    {
      $this->PurchaseOrderStockType = $PurchaseOrderStockType;
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
     * @return APIProduct
     */
    public function setPurchaseOrderBoxQuantity($PurchaseOrderBoxQuantity)
    {
      $this->PurchaseOrderBoxQuantity = $PurchaseOrderBoxQuantity;
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
     * @return APIProduct
     */
    public function setProductStockType($ProductStockType)
    {
      $this->ProductStockType = $ProductStockType;
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
     * @return APIProduct
     */
    public function setDispatchIdentifierOption($DispatchIdentifierOption)
    {
      $this->DispatchIdentifierOption = $DispatchIdentifierOption;
      return $this;
    }

    /**
     * @return ArrayOfItemBayStockLevel
     */
    public function getStockLocations()
    {
      return $this->StockLocations;
    }

    /**
     * @param ArrayOfItemBayStockLevel $StockLocations
     * @return APIProduct
     */
    public function setStockLocations($StockLocations)
    {
      $this->StockLocations = $StockLocations;
      return $this;
    }

    /**
     * @return ArrayOfSupplierOrderItem
     */
    public function getOnOrder()
    {
      return $this->OnOrder;
    }

    /**
     * @param ArrayOfSupplierOrderItem $OnOrder
     * @return APIProduct
     */
    public function setOnOrder($OnOrder)
    {
      $this->OnOrder = $OnOrder;
      return $this;
    }

}
