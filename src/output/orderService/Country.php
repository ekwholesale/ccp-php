<?php

class Country
{

    /**
     * @var boolean $Selected
     */
    protected $Selected = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $ShortName
     */
    protected $ShortName = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @var string $Locale
     */
    protected $Locale = null;

    /**
     * @var string $CurrencySymbol
     */
    protected $CurrencySymbol = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $ThreeLetterISOCode
     */
    protected $ThreeLetterISOCode = null;

    /**
     * @var int $CountryISOCode
     */
    protected $CountryISOCode = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var int $CurrencyISOCode
     */
    protected $CurrencyISOCode = null;

    /**
     * @var string $AmazonMarketPlaceID
     */
    protected $AmazonMarketPlaceID = null;

    /**
     * @var string $AmazonEndPoint
     */
    protected $AmazonEndPoint = null;

    /**
     * @var string $AmazonURL
     */
    protected $AmazonURL = null;

    /**
     * @var int $EbayCurrencyCode
     */
    protected $EbayCurrencyCode = null;

    /**
     * @var int $EbayCountryCode
     */
    protected $EbayCountryCode = null;

    /**
     * @var string $EbaySiteID
     */
    protected $EbaySiteID = null;

    /**
     * @var string $EbayGlobalID
     */
    protected $EbayGlobalID = null;

    /**
     * @var float $ExchangeRate
     */
    protected $ExchangeRate = null;

    /**
     * @var int $SageTaxCode
     */
    protected $SageTaxCode = null;

    /**
     * @var int $EUCountry
     */
    protected $EUCountry = null;

    /**
     * @var int $VatLiable
     */
    protected $VatLiable = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var IStatusID $StatusIDEnum
     */
    protected $StatusIDEnum = null;

    /**
     * @var string $EbaySiteURL
     */
    protected $EbaySiteURL = null;

    /**
     * @param boolean $Selected
     * @param int $ID
     * @param int $CountryISOCode
     * @param int $CurrencyISOCode
     * @param int $EbayCurrencyCode
     * @param int $EbayCountryCode
     * @param float $ExchangeRate
     * @param int $SageTaxCode
     * @param int $EUCountry
     * @param int $VatLiable
     * @param int $StatusID
     * @param IStatusID $StatusIDEnum
     */
    public function __construct($Selected, $ID, $CountryISOCode, $CurrencyISOCode, $EbayCurrencyCode, $EbayCountryCode, $ExchangeRate, $SageTaxCode, $EUCountry, $VatLiable, $StatusID, $StatusIDEnum)
    {
      $this->Selected = $Selected;
      $this->ID = $ID;
      $this->CountryISOCode = $CountryISOCode;
      $this->CurrencyISOCode = $CurrencyISOCode;
      $this->EbayCurrencyCode = $EbayCurrencyCode;
      $this->EbayCountryCode = $EbayCountryCode;
      $this->ExchangeRate = $ExchangeRate;
      $this->SageTaxCode = $SageTaxCode;
      $this->EUCountry = $EUCountry;
      $this->VatLiable = $VatLiable;
      $this->StatusID = $StatusID;
      $this->StatusIDEnum = $StatusIDEnum;
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
     * @return Country
     */
    public function setSelected($Selected)
    {
      $this->Selected = $Selected;
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
     * @return Country
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return Country
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
      return $this->ShortName;
    }

    /**
     * @param string $ShortName
     * @return Country
     */
    public function setShortName($ShortName)
    {
      $this->ShortName = $ShortName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return Country
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
      return $this->Locale;
    }

    /**
     * @param string $Locale
     * @return Country
     */
    public function setLocale($Locale)
    {
      $this->Locale = $Locale;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
      return $this->CurrencySymbol;
    }

    /**
     * @param string $CurrencySymbol
     * @return Country
     */
    public function setCurrencySymbol($CurrencySymbol)
    {
      $this->CurrencySymbol = $CurrencySymbol;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return Country
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getThreeLetterISOCode()
    {
      return $this->ThreeLetterISOCode;
    }

    /**
     * @param string $ThreeLetterISOCode
     * @return Country
     */
    public function setThreeLetterISOCode($ThreeLetterISOCode)
    {
      $this->ThreeLetterISOCode = $ThreeLetterISOCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryISOCode()
    {
      return $this->CountryISOCode;
    }

    /**
     * @param int $CountryISOCode
     * @return Country
     */
    public function setCountryISOCode($CountryISOCode)
    {
      $this->CountryISOCode = $CountryISOCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return Country
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyISOCode()
    {
      return $this->CurrencyISOCode;
    }

    /**
     * @param int $CurrencyISOCode
     * @return Country
     */
    public function setCurrencyISOCode($CurrencyISOCode)
    {
      $this->CurrencyISOCode = $CurrencyISOCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmazonMarketPlaceID()
    {
      return $this->AmazonMarketPlaceID;
    }

    /**
     * @param string $AmazonMarketPlaceID
     * @return Country
     */
    public function setAmazonMarketPlaceID($AmazonMarketPlaceID)
    {
      $this->AmazonMarketPlaceID = $AmazonMarketPlaceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmazonEndPoint()
    {
      return $this->AmazonEndPoint;
    }

    /**
     * @param string $AmazonEndPoint
     * @return Country
     */
    public function setAmazonEndPoint($AmazonEndPoint)
    {
      $this->AmazonEndPoint = $AmazonEndPoint;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmazonURL()
    {
      return $this->AmazonURL;
    }

    /**
     * @param string $AmazonURL
     * @return Country
     */
    public function setAmazonURL($AmazonURL)
    {
      $this->AmazonURL = $AmazonURL;
      return $this;
    }

    /**
     * @return int
     */
    public function getEbayCurrencyCode()
    {
      return $this->EbayCurrencyCode;
    }

    /**
     * @param int $EbayCurrencyCode
     * @return Country
     */
    public function setEbayCurrencyCode($EbayCurrencyCode)
    {
      $this->EbayCurrencyCode = $EbayCurrencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getEbayCountryCode()
    {
      return $this->EbayCountryCode;
    }

    /**
     * @param int $EbayCountryCode
     * @return Country
     */
    public function setEbayCountryCode($EbayCountryCode)
    {
      $this->EbayCountryCode = $EbayCountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEbaySiteID()
    {
      return $this->EbaySiteID;
    }

    /**
     * @param string $EbaySiteID
     * @return Country
     */
    public function setEbaySiteID($EbaySiteID)
    {
      $this->EbaySiteID = $EbaySiteID;
      return $this;
    }

    /**
     * @return string
     */
    public function getEbayGlobalID()
    {
      return $this->EbayGlobalID;
    }

    /**
     * @param string $EbayGlobalID
     * @return Country
     */
    public function setEbayGlobalID($EbayGlobalID)
    {
      $this->EbayGlobalID = $EbayGlobalID;
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
      return $this->ExchangeRate;
    }

    /**
     * @param float $ExchangeRate
     * @return Country
     */
    public function setExchangeRate($ExchangeRate)
    {
      $this->ExchangeRate = $ExchangeRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getSageTaxCode()
    {
      return $this->SageTaxCode;
    }

    /**
     * @param int $SageTaxCode
     * @return Country
     */
    public function setSageTaxCode($SageTaxCode)
    {
      $this->SageTaxCode = $SageTaxCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getEUCountry()
    {
      return $this->EUCountry;
    }

    /**
     * @param int $EUCountry
     * @return Country
     */
    public function setEUCountry($EUCountry)
    {
      $this->EUCountry = $EUCountry;
      return $this;
    }

    /**
     * @return int
     */
    public function getVatLiable()
    {
      return $this->VatLiable;
    }

    /**
     * @param int $VatLiable
     * @return Country
     */
    public function setVatLiable($VatLiable)
    {
      $this->VatLiable = $VatLiable;
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
     * @return Country
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
     * @return Country
     */
    public function setStatusIDEnum($StatusIDEnum)
    {
      $this->StatusIDEnum = $StatusIDEnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getEbaySiteURL()
    {
      return $this->EbaySiteURL;
    }

    /**
     * @param string $EbaySiteURL
     * @return Country
     */
    public function setEbaySiteURL($EbaySiteURL)
    {
      $this->EbaySiteURL = $EbaySiteURL;
      return $this;
    }

}
