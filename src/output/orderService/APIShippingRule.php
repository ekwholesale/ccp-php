<?php

class APIShippingRule
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $RuleName
     */
    protected $RuleName = null;

    /**
     * @var string $ServiceName
     */
    protected $ServiceName = null;

    /**
     * @var string $CourierServiceCode
     */
    protected $CourierServiceCode = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      $this->ID = $ID;
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
     * @return APIShippingRule
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleName()
    {
      return $this->RuleName;
    }

    /**
     * @param string $RuleName
     * @return APIShippingRule
     */
    public function setRuleName($RuleName)
    {
      $this->RuleName = $RuleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
      return $this->ServiceName;
    }

    /**
     * @param string $ServiceName
     * @return APIShippingRule
     */
    public function setServiceName($ServiceName)
    {
      $this->ServiceName = $ServiceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourierServiceCode()
    {
      return $this->CourierServiceCode;
    }

    /**
     * @param string $CourierServiceCode
     * @return APIShippingRule
     */
    public function setCourierServiceCode($CourierServiceCode)
    {
      $this->CourierServiceCode = $CourierServiceCode;
      return $this;
    }

}
