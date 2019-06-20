<?php

class APICustomerAddCustomerRequest
{

    /**
     * @var int $intBrandID
     */
    protected $intBrandID = null;

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $TradingName
     */
    protected $TradingName = null;

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
     * @var int $intCustomerType
     */
    protected $intCustomerType = null;

    /**
     * @var int $intPaymentTerms
     */
    protected $intPaymentTerms = null;

    /**
     * @var string $VATNumber
     */
    protected $VATNumber = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $Postcode
     */
    protected $Postcode = null;

    /**
     * @var string $TownCity
     */
    protected $TownCity = null;

    /**
     * @var string $CountyRegion
     */
    protected $CountyRegion = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

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
     * @var int $LoginID
     */
    protected $LoginID = null;

    /**
     * @var int $AgentID
     */
    protected $AgentID = null;

    /**
     * @var float $CreditLimit
     */
    protected $CreditLimit = null;

    /**
     * @param int $intBrandID
     * @param int $SalesChannelID
     * @param int $intCustomerType
     * @param int $intPaymentTerms
     */
    public function __construct($intBrandID, $SalesChannelID, $intCustomerType, $intPaymentTerms)
    {
      $this->intBrandID = $intBrandID;
      $this->SalesChannelID = $SalesChannelID;
      $this->intCustomerType = $intCustomerType;
      $this->intPaymentTerms = $intPaymentTerms;
    }

    /**
     * @return int
     */
    public function getIntBrandID()
    {
      return $this->intBrandID;
    }

    /**
     * @param int $intBrandID
     * @return APICustomerAddCustomerRequest
     */
    public function setIntBrandID($intBrandID)
    {
      $this->intBrandID = $intBrandID;
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
     * @return APICustomerAddCustomerRequest
     */
    public function setSalesChannelID($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
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
     * @return APICustomerAddCustomerRequest
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
     * @return APICustomerAddCustomerRequest
     */
    public function setTradingName($TradingName)
    {
      $this->TradingName = $TradingName;
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
     * @return APICustomerAddCustomerRequest
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
     * @return APICustomerAddCustomerRequest
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
     * @return APICustomerAddCustomerRequest
     */
    public function setEmailAddress($EmailAddress)
    {
      $this->EmailAddress = $EmailAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntCustomerType()
    {
      return $this->intCustomerType;
    }

    /**
     * @param int $intCustomerType
     * @return APICustomerAddCustomerRequest
     */
    public function setIntCustomerType($intCustomerType)
    {
      $this->intCustomerType = $intCustomerType;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntPaymentTerms()
    {
      return $this->intPaymentTerms;
    }

    /**
     * @param int $intPaymentTerms
     * @return APICustomerAddCustomerRequest
     */
    public function setIntPaymentTerms($intPaymentTerms)
    {
      $this->intPaymentTerms = $intPaymentTerms;
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
     * @return APICustomerAddCustomerRequest
     */
    public function setVATNumber($VATNumber)
    {
      $this->VATNumber = $VATNumber;
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
     * @return APICustomerAddCustomerRequest
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
     * @return APICustomerAddCustomerRequest
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
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
     * @return APICustomerAddCustomerRequest
     */
    public function setPostcode($Postcode)
    {
      $this->Postcode = $Postcode;
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
     * @return APICustomerAddCustomerRequest
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
     * @return APICustomerAddCustomerRequest
     */
    public function setCountyRegion($CountyRegion)
    {
      $this->CountyRegion = $CountyRegion;
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
     * @return APICustomerAddCustomerRequest
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
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
     * @return APICustomerAddCustomerRequest
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
     * @return APICustomerAddCustomerRequest
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
     * @return APICustomerAddCustomerRequest
     */
    public function setMobNo($MobNo)
    {
      $this->MobNo = $MobNo;
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
     * @return APICustomerAddCustomerRequest
     */
    public function setLoginID($LoginID)
    {
      $this->LoginID = $LoginID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgentID()
    {
      return $this->AgentID;
    }

    /**
     * @param int $AgentID
     * @return APICustomerAddCustomerRequest
     */
    public function setAgentID($AgentID)
    {
      $this->AgentID = $AgentID;
      return $this;
    }

    /**
     * @return float
     */
    public function getCreditLimit()
    {
      return $this->CreditLimit;
    }

    /**
     * @param float $CreditLimit
     * @return APICustomerAddCustomerRequest
     */
    public function setCreditLimit($CreditLimit)
    {
      $this->CreditLimit = $CreditLimit;
      return $this;
    }

}
