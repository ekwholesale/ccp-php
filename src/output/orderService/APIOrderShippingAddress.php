<?php

class APIOrderShippingAddress
{

    /**
     * @var string $ShippingAddressCompanyName
     */
    protected $ShippingAddressCompanyName = null;

    /**
     * @var string $ShippingContactFirstName
     */
    protected $ShippingContactFirstName = null;

    /**
     * @var string $ShippingContactLastName
     */
    protected $ShippingContactLastName = null;

    /**
     * @var string $ShippingAddress1
     */
    protected $ShippingAddress1 = null;

    /**
     * @var string $ShippingAddress2
     */
    protected $ShippingAddress2 = null;

    /**
     * @var string $ShippingTown
     */
    protected $ShippingTown = null;

    /**
     * @var string $ShippingCounty
     */
    protected $ShippingCounty = null;

    /**
     * @var string $ShippingCountry
     */
    protected $ShippingCountry = null;

    /**
     * @var string $ShippingPostCode
     */
    protected $ShippingPostCode = null;

    /**
     * @var string $ShippingTelephone
     */
    protected $ShippingTelephone = null;

    /**
     * @var string $ShippingMobile
     */
    protected $ShippingMobile = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShippingAddressCompanyName()
    {
      return $this->ShippingAddressCompanyName;
    }

    /**
     * @param string $ShippingAddressCompanyName
     * @return APIOrderShippingAddress
     */
    public function setShippingAddressCompanyName($ShippingAddressCompanyName)
    {
      $this->ShippingAddressCompanyName = $ShippingAddressCompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingContactFirstName()
    {
      return $this->ShippingContactFirstName;
    }

    /**
     * @param string $ShippingContactFirstName
     * @return APIOrderShippingAddress
     */
    public function setShippingContactFirstName($ShippingContactFirstName)
    {
      $this->ShippingContactFirstName = $ShippingContactFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingContactLastName()
    {
      return $this->ShippingContactLastName;
    }

    /**
     * @param string $ShippingContactLastName
     * @return APIOrderShippingAddress
     */
    public function setShippingContactLastName($ShippingContactLastName)
    {
      $this->ShippingContactLastName = $ShippingContactLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingAddress1()
    {
      return $this->ShippingAddress1;
    }

    /**
     * @param string $ShippingAddress1
     * @return APIOrderShippingAddress
     */
    public function setShippingAddress1($ShippingAddress1)
    {
      $this->ShippingAddress1 = $ShippingAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingAddress2()
    {
      return $this->ShippingAddress2;
    }

    /**
     * @param string $ShippingAddress2
     * @return APIOrderShippingAddress
     */
    public function setShippingAddress2($ShippingAddress2)
    {
      $this->ShippingAddress2 = $ShippingAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingTown()
    {
      return $this->ShippingTown;
    }

    /**
     * @param string $ShippingTown
     * @return APIOrderShippingAddress
     */
    public function setShippingTown($ShippingTown)
    {
      $this->ShippingTown = $ShippingTown;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCounty()
    {
      return $this->ShippingCounty;
    }

    /**
     * @param string $ShippingCounty
     * @return APIOrderShippingAddress
     */
    public function setShippingCounty($ShippingCounty)
    {
      $this->ShippingCounty = $ShippingCounty;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingCountry()
    {
      return $this->ShippingCountry;
    }

    /**
     * @param string $ShippingCountry
     * @return APIOrderShippingAddress
     */
    public function setShippingCountry($ShippingCountry)
    {
      $this->ShippingCountry = $ShippingCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingPostCode()
    {
      return $this->ShippingPostCode;
    }

    /**
     * @param string $ShippingPostCode
     * @return APIOrderShippingAddress
     */
    public function setShippingPostCode($ShippingPostCode)
    {
      $this->ShippingPostCode = $ShippingPostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingTelephone()
    {
      return $this->ShippingTelephone;
    }

    /**
     * @param string $ShippingTelephone
     * @return APIOrderShippingAddress
     */
    public function setShippingTelephone($ShippingTelephone)
    {
      $this->ShippingTelephone = $ShippingTelephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingMobile()
    {
      return $this->ShippingMobile;
    }

    /**
     * @param string $ShippingMobile
     * @return APIOrderShippingAddress
     */
    public function setShippingMobile($ShippingMobile)
    {
      $this->ShippingMobile = $ShippingMobile;
      return $this;
    }

}
