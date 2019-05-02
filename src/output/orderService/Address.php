<?php

class Address
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $AddressID
     */
    protected $AddressID = null;

    /**
     * @var int $VatLiable
     */
    protected $VatLiable = null;

    /**
     * @var string $AddressTitle
     */
    protected $AddressTitle = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $PostCode
     */
    protected $PostCode = null;

    /**
     * @var string $UserID
     */
    protected $UserID = null;

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
     * @var int $CountryID
     */
    protected $CountryID = null;

    /**
     * @var StatusID $StatusID
     */
    protected $StatusID = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var string $Company
     */
    protected $Company = null;

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
     * @param int $ID
     * @param int $AddressID
     * @param int $VatLiable
     * @param int $CountryID
     * @param StatusID $StatusID
     * @param int $OrderId
     */
    public function __construct($ID, $AddressID, $VatLiable, $CountryID, $StatusID, $OrderId)
    {
      $this->ID = $ID;
      $this->AddressID = $AddressID;
      $this->VatLiable = $VatLiable;
      $this->CountryID = $CountryID;
      $this->StatusID = $StatusID;
      $this->OrderId = $OrderId;
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
     * @return Address
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getAddressID()
    {
      return $this->AddressID;
    }

    /**
     * @param int $AddressID
     * @return Address
     */
    public function setAddressID($AddressID)
    {
      $this->AddressID = $AddressID;
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
     * @return Address
     */
    public function setVatLiable($VatLiable)
    {
      $this->VatLiable = $VatLiable;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressTitle()
    {
      return $this->AddressTitle;
    }

    /**
     * @param string $AddressTitle
     * @return Address
     */
    public function setAddressTitle($AddressTitle)
    {
      $this->AddressTitle = $AddressTitle;
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
     * @return Address
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
     * @return Address
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
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
     * @return Address
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
     * @return Address
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
      return $this->PostCode;
    }

    /**
     * @param string $PostCode
     * @return Address
     */
    public function setPostCode($PostCode)
    {
      $this->PostCode = $PostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param string $UserID
     * @return Address
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
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
     * @return Address
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
     * @return Address
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
     * @return Address
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
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
     * @return Address
     */
    public function setCountryID($CountryID)
    {
      $this->CountryID = $CountryID;
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
     * @return Address
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param int $OrderId
     * @return Address
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param string $Company
     * @return Address
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
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
     * @return Address
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
     * @return Address
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
     * @return Address
     */
    public function setMobNo($MobNo)
    {
      $this->MobNo = $MobNo;
      return $this;
    }

}
