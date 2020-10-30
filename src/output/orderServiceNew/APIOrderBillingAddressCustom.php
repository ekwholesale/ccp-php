<?php

class APIOrderBillingAddressCustom
{

    /**
     * @var string $BillingAddressCompanyName
     */
    protected $BillingAddressCompanyName = null;

    /**
     * @var string $BillingContactFirstName
     */
    protected $BillingContactFirstName = null;

    /**
     * @var string $BillingContactLastName
     */
    protected $BillingContactLastName = null;

    /**
     * @var string $BillingAddress1
     */
    protected $BillingAddress1 = null;

    /**
     * @var string $BillingAddress2
     */
    protected $BillingAddress2 = null;

    /**
     * @var string $BillingTown
     */
    protected $BillingTown = null;

    /**
     * @var string $BillingCounty
     */
    protected $BillingCounty = null;

    /**
     * @var string $BillingCountry
     */
    protected $BillingCountry = null;

    /**
     * @var string $BillingPostCode
     */
    protected $BillingPostCode = null;

    /**
     * @var string $BillingTelephone
     */
    protected $BillingTelephone = null;

    /**
     * @var string $BillingMobile
     */
    protected $BillingMobile = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBillingAddressCompanyName()
    {
      return $this->BillingAddressCompanyName;
    }

    /**
     * @param string $BillingAddressCompanyName
     * @return APIOrderBillingAddress
     */
    public function setBillingAddressCompanyName($BillingAddressCompanyName)
    {
      $this->BillingAddressCompanyName = $BillingAddressCompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingContactFirstName()
    {
      return $this->BillingContactFirstName;
    }

    /**
     * @param string $BillingContactFirstName
     * @return APIOrderBillingAddress
     */
    public function setBillingContactFirstName($BillingContactFirstName)
    {
      $this->BillingContactFirstName = $BillingContactFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingContactLastName()
    {
      return $this->BillingContactLastName;
    }

    /**
     * @param string $BillingContactLastName
     * @return APIOrderBillingAddress
     */
    public function setBillingContactLastName($BillingContactLastName)
    {
      $this->BillingContactLastName = $BillingContactLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingAddress1()
    {
      return $this->BillingAddress1;
    }

    /**
     * @param string $BillingAddress1
     * @return APIOrderBillingAddress
     */
    public function setBillingAddress1($BillingAddress1)
    {
      $this->BillingAddress1 = $BillingAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingAddress2()
    {
      return $this->BillingAddress2;
    }

    /**
     * @param string $BillingAddress2
     * @return APIOrderBillingAddress
     */
    public function setBillingAddress2($BillingAddress2)
    {
      $this->BillingAddress2 = $BillingAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingTown()
    {
      return $this->BillingTown;
    }

    /**
     * @param string $BillingTown
     * @return APIOrderBillingAddress
     */
    public function setBillingTown($BillingTown)
    {
      $this->BillingTown = $BillingTown;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingCounty()
    {
      return $this->BillingCounty;
    }

    /**
     * @param string $BillingCounty
     * @return APIOrderBillingAddress
     */
    public function setBillingCounty($BillingCounty)
    {
      $this->BillingCounty = $BillingCounty;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingCountry()
    {
      return $this->BillingCountry;
    }

    /**
     * @param string $BillingCountry
     * @return APIOrderBillingAddress
     */
    public function setBillingCountry($BillingCountry)
    {
      $this->BillingCountry = $BillingCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingPostCode()
    {
      return $this->BillingPostCode;
    }

    /**
     * @param string $BillingPostCode
     * @return APIOrderBillingAddress
     */
    public function setBillingPostCode($BillingPostCode)
    {
      $this->BillingPostCode = $BillingPostCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingTelephone()
    {
      return $this->BillingTelephone;
    }

    /**
     * @param string $BillingTelephone
     * @return APIOrderBillingAddress
     */
    public function setBillingTelephone($BillingTelephone)
    {
      $this->BillingTelephone = $BillingTelephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingMobile()
    {
      return $this->BillingMobile;
    }

    /**
     * @param string $BillingMobile
     * @return APIOrderBillingAddress
     */
    public function setBillingMobile($BillingMobile)
    {
      $this->BillingMobile = $BillingMobile;
      return $this;
    }

}
