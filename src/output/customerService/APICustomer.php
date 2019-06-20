<?php

class APICustomer
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $VATNumber
     */
    protected $VATNumber = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $LoginID
     */
    protected $LoginID = null;

    /**
     * @var APICustomerType $CustomerType
     */
    protected $CustomerType = null;

    /**
     * @var APICustomerPaymentTerms $PaymentTerms
     */
    protected $PaymentTerms = null;

    /**
     * @var boolean $EUVatExempt
     */
    protected $EUVatExempt = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

    /**
     * @var string $SageAccountID
     */
    protected $SageAccountID = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $EmailAddress
     */
    protected $EmailAddress = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $TradingName
     */
    protected $TradingName = null;

    /**
     * @var string $TelNo
     */
    protected $TelNo = null;

    /**
     * @var string $FaxNo
     */
    protected $FaxNo = null;

    /**
     * @var string $MobNo
     */
    protected $MobNo = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $TownCity
     */
    protected $TownCity = null;

    /**
     * @var string $CountyRegion
     */
    protected $CountyRegion = null;

    /**
     * @var string $Postcode
     */
    protected $Postcode = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @param int $ID
     * @param int $LoginID
     * @param APICustomerType $CustomerType
     * @param APICustomerPaymentTerms $PaymentTerms
     * @param boolean $EUVatExempt
     * @param int $BrandID
     * @param int $SalesChannelID
     */
    public function __construct($ID, $LoginID, $CustomerType, $PaymentTerms, $EUVatExempt, $BrandID, $SalesChannelID)
    {
      $this->ID = $ID;
      $this->LoginID = $LoginID;
      $this->CustomerType = $CustomerType;
      $this->PaymentTerms = $PaymentTerms;
      $this->EUVatExempt = $EUVatExempt;
      $this->BrandID = $BrandID;
      $this->SalesChannelID = $SalesChannelID;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return APICustomer
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return APICustomer
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getVATNumber()
    {
      return $this->VATNumber;
    }

    /**
     * @param string $VATNumber
     * @return APICustomer
     */
    public function setVATNumber($VATNumber)
    {
      $this->VATNumber = $VATNumber;
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
     * @return APICustomer
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getLoginID()
    {
      return $this->LoginID;
    }

    /**
     * @param int $LoginID
     * @return APICustomer
     */
    public function setLoginID($LoginID)
    {
      $this->LoginID = $LoginID;
      return $this;
    }

    /**
     * @return APICustomerType
     */
    public function getCustomerType()
    {
      return $this->CustomerType;
    }

    /**
     * @param APICustomerType $CustomerType
     * @return APICustomer
     */
    public function setCustomerType($CustomerType)
    {
      $this->CustomerType = $CustomerType;
      return $this;
    }

    /**
     * @return APICustomerPaymentTerms
     */
    public function getPaymentTerms()
    {
      return $this->PaymentTerms;
    }

    /**
     * @param APICustomerPaymentTerms $PaymentTerms
     * @return APICustomer
     */
    public function setPaymentTerms($PaymentTerms)
    {
      $this->PaymentTerms = $PaymentTerms;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEUVatExempt()
    {
      return $this->EUVatExempt;
    }

    /**
     * @param boolean $EUVatExempt
     * @return APICustomer
     */
    public function setEUVatExempt($EUVatExempt)
    {
      $this->EUVatExempt = $EUVatExempt;
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
     * @return APICustomer
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
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
     * @return APICustomer
     */
    public function setSalesChannelID($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSageAccountID()
    {
      return $this->SageAccountID;
    }

    /**
     * @param string $SageAccountID
     * @return APICustomer
     */
    public function setSageAccountID($SageAccountID)
    {
      $this->SageAccountID = $SageAccountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return APICustomer
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return APICustomer
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return APICustomer
     */
    public function setEmailAddress($EmailAddress)
    {
      $this->EmailAddress = $EmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return APICustomer
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTradingName()
    {
      return $this->TradingName;
    }

    /**
     * @param string $TradingName
     * @return APICustomer
     */
    public function setTradingName($TradingName)
    {
      $this->TradingName = $TradingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelNo()
    {
      return $this->TelNo;
    }

    /**
     * @param string $TelNo
     * @return APICustomer
     */
    public function setTelNo($TelNo)
    {
      $this->TelNo = $TelNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaxNo()
    {
      return $this->FaxNo;
    }

    /**
     * @param string $FaxNo
     * @return APICustomer
     */
    public function setFaxNo($FaxNo)
    {
      $this->FaxNo = $FaxNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobNo()
    {
      return $this->MobNo;
    }

    /**
     * @param string $MobNo
     * @return APICustomer
     */
    public function setMobNo($MobNo)
    {
      $this->MobNo = $MobNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return APICustomer
     */
    public function setAddress1($Address1)
    {
      $this->Address1 = $Address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return APICustomer
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getTownCity()
    {
      return $this->TownCity;
    }

    /**
     * @param string $TownCity
     * @return APICustomer
     */
    public function setTownCity($TownCity)
    {
      $this->TownCity = $TownCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountyRegion()
    {
      return $this->CountyRegion;
    }

    /**
     * @param string $CountyRegion
     * @return APICustomer
     */
    public function setCountyRegion($CountyRegion)
    {
      $this->CountyRegion = $CountyRegion;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return APICustomer
     */
    public function setPostcode($Postcode)
    {
      $this->Postcode = $Postcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return APICustomer
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
