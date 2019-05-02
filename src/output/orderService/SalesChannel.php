<?php

class SalesChannel
{

    /**
     * @var SalesChannelType $SalesChanneEnum
     */
    protected $SalesChanneEnum = null;

    /**
     * @var boolean $Selected
     */
    protected $Selected = null;

    /**
     * @var ArrayOfWarehouseSalesChannelLink $WarehouseInboundLinks
     */
    protected $WarehouseInboundLinks = null;

    /**
     * @var ArrayOfWarehouseSalesChannelLink $WarehouseOutboundLinks
     */
    protected $WarehouseOutboundLinks = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $AccountID
     */
    protected $AccountID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $CountryID
     */
    protected $CountryID = null;

    /**
     * @var int $PreOrder
     */
    protected $PreOrder = null;

    /**
     * @var int $SalesChannelEnumID
     */
    protected $SalesChannelEnumID = null;

    /**
     * @var string $SalesChannelEnumName
     */
    protected $SalesChannelEnumName = null;

    /**
     * @var int $SageNominalCodeID
     */
    protected $SageNominalCodeID = null;

    /**
     * @var int $ExternalShopID
     */
    protected $ExternalShopID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var IStatusID $StatusIDEnum
     */
    protected $StatusIDEnum = null;

    /**
     * @var string $NominalCode
     */
    protected $NominalCode = null;

    /**
     * @var string $CarriageNominalCode
     */
    protected $CarriageNominalCode = null;

    /**
     * @var string $AmazonFBANominalCode
     */
    protected $AmazonFBANominalCode = null;

    /**
     * @var string $BankAccount
     */
    protected $BankAccount = null;

    /**
     * @var int $SalesCurrencyCode
     */
    protected $SalesCurrencyCode = null;

    /**
     * @var int $PaymentCurrencyCode
     */
    protected $PaymentCurrencyCode = null;

    /**
     * @var int $AccountsPackageActive
     */
    protected $AccountsPackageActive = null;

    /**
     * @var int $PseudoStockLevelType
     */
    protected $PseudoStockLevelType = null;

    /**
     * @var float $LoyaltyPointPerValue
     */
    protected $LoyaltyPointPerValue = null;

    /**
     * @var float $LoyaltyValuePerPoint
     */
    protected $LoyaltyValuePerPoint = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var int $UsesFBA
     */
    protected $UsesFBA = null;

    /**
     * @var int $IsCCP
     */
    protected $IsCCP = null;

    /**
     * @var string $LanguageID
     */
    protected $LanguageID = null;

    /**
     * @var int $AutoImportListings
     */
    protected $AutoImportListings = null;

    /**
     * @var int $AmazonUseListingImages
     */
    protected $AmazonUseListingImages = null;

    /**
     * @param SalesChannelType $SalesChanneEnum
     * @param boolean $Selected
     * @param int $ID
     * @param int $BrandID
     * @param int $AccountID
     * @param int $CountryID
     * @param int $PreOrder
     * @param int $SalesChannelEnumID
     * @param int $SageNominalCodeID
     * @param int $ExternalShopID
     * @param int $StatusID
     * @param IStatusID $StatusIDEnum
     * @param int $SalesCurrencyCode
     * @param int $PaymentCurrencyCode
     * @param int $AccountsPackageActive
     * @param int $PseudoStockLevelType
     * @param float $LoyaltyPointPerValue
     * @param float $LoyaltyValuePerPoint
     * @param int $UsesFBA
     * @param int $IsCCP
     * @param int $AutoImportListings
     * @param int $AmazonUseListingImages
     */
    public function __construct($SalesChanneEnum, $Selected, $ID, $BrandID, $AccountID, $CountryID, $PreOrder, $SalesChannelEnumID, $SageNominalCodeID, $ExternalShopID, $StatusID, $StatusIDEnum, $SalesCurrencyCode, $PaymentCurrencyCode, $AccountsPackageActive, $PseudoStockLevelType, $LoyaltyPointPerValue, $LoyaltyValuePerPoint, $UsesFBA, $IsCCP, $AutoImportListings, $AmazonUseListingImages)
    {
      $this->SalesChanneEnum = $SalesChanneEnum;
      $this->Selected = $Selected;
      $this->ID = $ID;
      $this->BrandID = $BrandID;
      $this->AccountID = $AccountID;
      $this->CountryID = $CountryID;
      $this->PreOrder = $PreOrder;
      $this->SalesChannelEnumID = $SalesChannelEnumID;
      $this->SageNominalCodeID = $SageNominalCodeID;
      $this->ExternalShopID = $ExternalShopID;
      $this->StatusID = $StatusID;
      $this->StatusIDEnum = $StatusIDEnum;
      $this->SalesCurrencyCode = $SalesCurrencyCode;
      $this->PaymentCurrencyCode = $PaymentCurrencyCode;
      $this->AccountsPackageActive = $AccountsPackageActive;
      $this->PseudoStockLevelType = $PseudoStockLevelType;
      $this->LoyaltyPointPerValue = $LoyaltyPointPerValue;
      $this->LoyaltyValuePerPoint = $LoyaltyValuePerPoint;
      $this->UsesFBA = $UsesFBA;
      $this->IsCCP = $IsCCP;
      $this->AutoImportListings = $AutoImportListings;
      $this->AmazonUseListingImages = $AmazonUseListingImages;
    }

    /**
     * @return SalesChannelType
     */
    public function getSalesChanneEnum()
    {
      return $this->SalesChanneEnum;
    }

    /**
     * @param SalesChannelType $SalesChanneEnum
     * @return SalesChannel
     */
    public function setSalesChanneEnum($SalesChanneEnum)
    {
      $this->SalesChanneEnum = $SalesChanneEnum;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSelected()
    {
      return $this->Selected;
    }

    /**
     * @param boolean $Selected
     * @return SalesChannel
     */
    public function setSelected($Selected)
    {
      $this->Selected = $Selected;
      return $this;
    }

    /**
     * @return ArrayOfWarehouseSalesChannelLink
     */
    public function getWarehouseInboundLinks()
    {
      return $this->WarehouseInboundLinks;
    }

    /**
     * @param ArrayOfWarehouseSalesChannelLink $WarehouseInboundLinks
     * @return SalesChannel
     */
    public function setWarehouseInboundLinks($WarehouseInboundLinks)
    {
      $this->WarehouseInboundLinks = $WarehouseInboundLinks;
      return $this;
    }

    /**
     * @return ArrayOfWarehouseSalesChannelLink
     */
    public function getWarehouseOutboundLinks()
    {
      return $this->WarehouseOutboundLinks;
    }

    /**
     * @param ArrayOfWarehouseSalesChannelLink $WarehouseOutboundLinks
     * @return SalesChannel
     */
    public function setWarehouseOutboundLinks($WarehouseOutboundLinks)
    {
      $this->WarehouseOutboundLinks = $WarehouseOutboundLinks;
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
     * @return SalesChannel
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
     * @return SalesChannel
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountID()
    {
      return $this->AccountID;
    }

    /**
     * @param int $AccountID
     * @return SalesChannel
     */
    public function setAccountID($AccountID)
    {
      $this->AccountID = $AccountID;
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
     * @return SalesChannel
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryID()
    {
      return $this->CountryID;
    }

    /**
     * @param int $CountryID
     * @return SalesChannel
     */
    public function setCountryID($CountryID)
    {
      $this->CountryID = $CountryID;
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
     * @return SalesChannel
     */
    public function setPreOrder($PreOrder)
    {
      $this->PreOrder = $PreOrder;
      return $this;
    }

    /**
     * @return int
     */
    public function getSalesChannelEnumID()
    {
      return $this->SalesChannelEnumID;
    }

    /**
     * @param int $SalesChannelEnumID
     * @return SalesChannel
     */
    public function setSalesChannelEnumID($SalesChannelEnumID)
    {
      $this->SalesChannelEnumID = $SalesChannelEnumID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesChannelEnumName()
    {
      return $this->SalesChannelEnumName;
    }

    /**
     * @param string $SalesChannelEnumName
     * @return SalesChannel
     */
    public function setSalesChannelEnumName($SalesChannelEnumName)
    {
      $this->SalesChannelEnumName = $SalesChannelEnumName;
      return $this;
    }

    /**
     * @return int
     */
    public function getSageNominalCodeID()
    {
      return $this->SageNominalCodeID;
    }

    /**
     * @param int $SageNominalCodeID
     * @return SalesChannel
     */
    public function setSageNominalCodeID($SageNominalCodeID)
    {
      $this->SageNominalCodeID = $SageNominalCodeID;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalShopID()
    {
      return $this->ExternalShopID;
    }

    /**
     * @param int $ExternalShopID
     * @return SalesChannel
     */
    public function setExternalShopID($ExternalShopID)
    {
      $this->ExternalShopID = $ExternalShopID;
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
     * @return SalesChannel
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return IStatusID
     */
    public function getStatusIDEnum()
    {
      return $this->StatusIDEnum;
    }

    /**
     * @param IStatusID $StatusIDEnum
     * @return SalesChannel
     */
    public function setStatusIDEnum($StatusIDEnum)
    {
      $this->StatusIDEnum = $StatusIDEnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getNominalCode()
    {
      return $this->NominalCode;
    }

    /**
     * @param string $NominalCode
     * @return SalesChannel
     */
    public function setNominalCode($NominalCode)
    {
      $this->NominalCode = $NominalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarriageNominalCode()
    {
      return $this->CarriageNominalCode;
    }

    /**
     * @param string $CarriageNominalCode
     * @return SalesChannel
     */
    public function setCarriageNominalCode($CarriageNominalCode)
    {
      $this->CarriageNominalCode = $CarriageNominalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmazonFBANominalCode()
    {
      return $this->AmazonFBANominalCode;
    }

    /**
     * @param string $AmazonFBANominalCode
     * @return SalesChannel
     */
    public function setAmazonFBANominalCode($AmazonFBANominalCode)
    {
      $this->AmazonFBANominalCode = $AmazonFBANominalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankAccount()
    {
      return $this->BankAccount;
    }

    /**
     * @param string $BankAccount
     * @return SalesChannel
     */
    public function setBankAccount($BankAccount)
    {
      $this->BankAccount = $BankAccount;
      return $this;
    }

    /**
     * @return int
     */
    public function getSalesCurrencyCode()
    {
      return $this->SalesCurrencyCode;
    }

    /**
     * @param int $SalesCurrencyCode
     * @return SalesChannel
     */
    public function setSalesCurrencyCode($SalesCurrencyCode)
    {
      $this->SalesCurrencyCode = $SalesCurrencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentCurrencyCode()
    {
      return $this->PaymentCurrencyCode;
    }

    /**
     * @param int $PaymentCurrencyCode
     * @return SalesChannel
     */
    public function setPaymentCurrencyCode($PaymentCurrencyCode)
    {
      $this->PaymentCurrencyCode = $PaymentCurrencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountsPackageActive()
    {
      return $this->AccountsPackageActive;
    }

    /**
     * @param int $AccountsPackageActive
     * @return SalesChannel
     */
    public function setAccountsPackageActive($AccountsPackageActive)
    {
      $this->AccountsPackageActive = $AccountsPackageActive;
      return $this;
    }

    /**
     * @return int
     */
    public function getPseudoStockLevelType()
    {
      return $this->PseudoStockLevelType;
    }

    /**
     * @param int $PseudoStockLevelType
     * @return SalesChannel
     */
    public function setPseudoStockLevelType($PseudoStockLevelType)
    {
      $this->PseudoStockLevelType = $PseudoStockLevelType;
      return $this;
    }

    /**
     * @return float
     */
    public function getLoyaltyPointPerValue()
    {
      return $this->LoyaltyPointPerValue;
    }

    /**
     * @param float $LoyaltyPointPerValue
     * @return SalesChannel
     */
    public function setLoyaltyPointPerValue($LoyaltyPointPerValue)
    {
      $this->LoyaltyPointPerValue = $LoyaltyPointPerValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getLoyaltyValuePerPoint()
    {
      return $this->LoyaltyValuePerPoint;
    }

    /**
     * @param float $LoyaltyValuePerPoint
     * @return SalesChannel
     */
    public function setLoyaltyValuePerPoint($LoyaltyValuePerPoint)
    {
      $this->LoyaltyValuePerPoint = $LoyaltyValuePerPoint;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return SalesChannel
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return int
     */
    public function getUsesFBA()
    {
      return $this->UsesFBA;
    }

    /**
     * @param int $UsesFBA
     * @return SalesChannel
     */
    public function setUsesFBA($UsesFBA)
    {
      $this->UsesFBA = $UsesFBA;
      return $this;
    }

    /**
     * @return int
     */
    public function getIsCCP()
    {
      return $this->IsCCP;
    }

    /**
     * @param int $IsCCP
     * @return SalesChannel
     */
    public function setIsCCP($IsCCP)
    {
      $this->IsCCP = $IsCCP;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguageID()
    {
      return $this->LanguageID;
    }

    /**
     * @param string $LanguageID
     * @return SalesChannel
     */
    public function setLanguageID($LanguageID)
    {
      $this->LanguageID = $LanguageID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAutoImportListings()
    {
      return $this->AutoImportListings;
    }

    /**
     * @param int $AutoImportListings
     * @return SalesChannel
     */
    public function setAutoImportListings($AutoImportListings)
    {
      $this->AutoImportListings = $AutoImportListings;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmazonUseListingImages()
    {
      return $this->AmazonUseListingImages;
    }

    /**
     * @param int $AmazonUseListingImages
     * @return SalesChannel
     */
    public function setAmazonUseListingImages($AmazonUseListingImages)
    {
      $this->AmazonUseListingImages = $AmazonUseListingImages;
      return $this;
    }

}
