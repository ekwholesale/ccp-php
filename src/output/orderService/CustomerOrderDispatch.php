<?php

class CustomerOrderDispatch
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $CustomerOrderID
     */
    protected $CustomerOrderID = null;

    /**
     * @var \DateTime $DateAndTime
     */
    protected $DateAndTime = null;

    /**
     * @var int $CourierServicesRulesID
     */
    protected $CourierServicesRulesID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var StatusID $StatusIDEnum
     */
    protected $StatusIDEnum = null;

    /**
     * @var string $CourierTrackingNumber
     */
    protected $CourierTrackingNumber = null;

    /**
     * @var int $PackagingOption
     */
    protected $PackagingOption = null;

    /**
     * @var string $PackageSplitdown
     */
    protected $PackageSplitdown = null;

    /**
     * @var int $CustomerOrderShipmentID
     */
    protected $CustomerOrderShipmentID = null;

    /**
     * @var int $DispatchType
     */
    protected $DispatchType = null;

    /**
     * @var DispatchType $DispatchTypeEnum
     */
    protected $DispatchTypeEnum = null;

    /**
     * @param int $ID
     * @param int $CustomerOrderID
     * @param \DateTime $DateAndTime
     * @param int $CourierServicesRulesID
     * @param int $StatusID
     * @param StatusID $StatusIDEnum
     * @param int $PackagingOption
     * @param int $CustomerOrderShipmentID
     * @param int $DispatchType
     * @param DispatchType $DispatchTypeEnum
     */
    public function __construct($ID, $CustomerOrderID, \DateTime $DateAndTime, $CourierServicesRulesID, $StatusID, $StatusIDEnum, $PackagingOption, $CustomerOrderShipmentID, $DispatchType, $DispatchTypeEnum)
    {
      $this->ID = $ID;
      $this->CustomerOrderID = $CustomerOrderID;
      $this->DateAndTime = $DateAndTime->format(\DateTime::ATOM);
      $this->CourierServicesRulesID = $CourierServicesRulesID;
      $this->StatusID = $StatusID;
      $this->StatusIDEnum = $StatusIDEnum;
      $this->PackagingOption = $PackagingOption;
      $this->CustomerOrderShipmentID = $CustomerOrderShipmentID;
      $this->DispatchType = $DispatchType;
      $this->DispatchTypeEnum = $DispatchTypeEnum;
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
     * @return CustomerOrderDispatch
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerOrderID()
    {
      return $this->CustomerOrderID;
    }

    /**
     * @param int $CustomerOrderID
     * @return CustomerOrderDispatch
     */
    public function setCustomerOrderID($CustomerOrderID)
    {
      $this->CustomerOrderID = $CustomerOrderID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAndTime()
    {
      if ($this->DateAndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateAndTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateAndTime
     * @return CustomerOrderDispatch
     */
    public function setDateAndTime(\DateTime $DateAndTime)
    {
      $this->DateAndTime = $DateAndTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierServicesRulesID()
    {
      return $this->CourierServicesRulesID;
    }

    /**
     * @param int $CourierServicesRulesID
     * @return CustomerOrderDispatch
     */
    public function setCourierServicesRulesID($CourierServicesRulesID)
    {
      $this->CourierServicesRulesID = $CourierServicesRulesID;
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
     * @return CustomerOrderDispatch
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
     * @return CustomerOrderDispatch
     */
    public function setStatusIDEnum($StatusIDEnum)
    {
      $this->StatusIDEnum = $StatusIDEnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourierTrackingNumber()
    {
      return $this->CourierTrackingNumber;
    }

    /**
     * @param string $CourierTrackingNumber
     * @return CustomerOrderDispatch
     */
    public function setCourierTrackingNumber($CourierTrackingNumber)
    {
      $this->CourierTrackingNumber = $CourierTrackingNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackagingOption()
    {
      return $this->PackagingOption;
    }

    /**
     * @param int $PackagingOption
     * @return CustomerOrderDispatch
     */
    public function setPackagingOption($PackagingOption)
    {
      $this->PackagingOption = $PackagingOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageSplitdown()
    {
      return $this->PackageSplitdown;
    }

    /**
     * @param string $PackageSplitdown
     * @return CustomerOrderDispatch
     */
    public function setPackageSplitdown($PackageSplitdown)
    {
      $this->PackageSplitdown = $PackageSplitdown;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerOrderShipmentID()
    {
      return $this->CustomerOrderShipmentID;
    }

    /**
     * @param int $CustomerOrderShipmentID
     * @return CustomerOrderDispatch
     */
    public function setCustomerOrderShipmentID($CustomerOrderShipmentID)
    {
      $this->CustomerOrderShipmentID = $CustomerOrderShipmentID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDispatchType()
    {
      return $this->DispatchType;
    }

    /**
     * @param int $DispatchType
     * @return CustomerOrderDispatch
     */
    public function setDispatchType($DispatchType)
    {
      $this->DispatchType = $DispatchType;
      return $this;
    }

    /**
     * @return DispatchType
     */
    public function getDispatchTypeEnum()
    {
      return $this->DispatchTypeEnum;
    }

    /**
     * @param DispatchType $DispatchTypeEnum
     * @return CustomerOrderDispatch
     */
    public function setDispatchTypeEnum($DispatchTypeEnum)
    {
      $this->DispatchTypeEnum = $DispatchTypeEnum;
      return $this;
    }

}
