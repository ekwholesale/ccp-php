<?php

class CustomerOrderShipmentCustom
{

    /**
     * @var ShippingCourierType $Courier
     */
    protected $Courier = null;

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var int $NoItems
     */
    protected $NoItems = null;

    /**
     * @var string $RuleUsed
     */
    protected $RuleUsed = null;

    /**
     * @var string $TariffUsed
     */
    protected $TariffUsed = null;

    /**
     * @var int $WeightGM
     */
    protected $WeightGM = null;

    /**
     * @var CustomerOrderDispatch $Dispatch
     */
    protected $Dispatch = null;

    /**
     * @var CustomerOrder $CustomerOrder
     */
    protected $CustomerOrder = null;

    /**
     * @var Customer $Customer
     */
    protected $Customer = null;

    /**
     * @var Address $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $CourierType
     */
    protected $CourierType = null;

    /**
     * @var int $CustomerOrderID
     */
    protected $CustomerOrderID = null;

    /**
     * @var string $LabelURL
     */
    protected $LabelURL = null;

    /**
     * @var string $ManifestID
     */
    protected $ManifestID = null;

    /**
     * @var \DateTime $ShipmentDate
     */
    protected $ShipmentDate = null;

    /**
     * @var string $ShipmentID
     */
    protected $ShipmentID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var IStatusID $StatusIDEnum
     */
    protected $StatusIDEnum = null;

    /**
     * @var int $UserID
     */
    protected $UserID = null;

    /**
     * @var string $SecondaryParameter
     */
    protected $SecondaryParameter = null;

    /**
     * @param ShippingCourierType $Courier
     * @param int $NoItems
     * @param int $WeightGM
     * @param int $ID
     * @param int $CourierType
     * @param int $CustomerOrderID
     * @param \DateTime $ShipmentDate
     * @param int $StatusID
     * @param IStatusID $StatusIDEnum
     * @param int $UserID
     */
    public function __construct($Courier, $NoItems, $WeightGM, $ID, $CourierType, $CustomerOrderID, \DateTime $ShipmentDate, $StatusID, $StatusIDEnum, $UserID)
    {
      $this->Courier = $Courier;
      $this->NoItems = $NoItems;
      $this->WeightGM = $WeightGM;
      $this->ID = $ID;
      $this->CourierType = $CourierType;
      $this->CustomerOrderID = $CustomerOrderID;
      $this->ShipmentDate = $ShipmentDate->format(\DateTime::ATOM);
      $this->StatusID = $StatusID;
      $this->StatusIDEnum = $StatusIDEnum;
      $this->UserID = $UserID;
    }

    /**
     * @return ShippingCourierType
     */
    public function getCourier()
    {
      return $this->Courier;
    }

    /**
     * @param ShippingCourierType $Courier
     * @return CustomerOrderShipment
     */
    public function setCourier($Courier)
    {
      $this->Courier = $Courier;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return CustomerOrderShipment
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return int
     */
    public function getNoItems()
    {
      return $this->NoItems;
    }

    /**
     * @param int $NoItems
     * @return CustomerOrderShipment
     */
    public function setNoItems($NoItems)
    {
      $this->NoItems = $NoItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleUsed()
    {
      return $this->RuleUsed;
    }

    /**
     * @param string $RuleUsed
     * @return CustomerOrderShipment
     */
    public function setRuleUsed($RuleUsed)
    {
      $this->RuleUsed = $RuleUsed;
      return $this;
    }

    /**
     * @return string
     */
    public function getTariffUsed()
    {
      return $this->TariffUsed;
    }

    /**
     * @param string $TariffUsed
     * @return CustomerOrderShipment
     */
    public function setTariffUsed($TariffUsed)
    {
      $this->TariffUsed = $TariffUsed;
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
     * @return CustomerOrderShipment
     */
    public function setWeightGM($WeightGM)
    {
      $this->WeightGM = $WeightGM;
      return $this;
    }

    /**
     * @return CustomerOrderDispatch
     */
    public function getDispatch()
    {
      return $this->Dispatch;
    }

    /**
     * @param CustomerOrderDispatch $Dispatch
     * @return CustomerOrderShipment
     */
    public function setDispatch($Dispatch)
    {
      $this->Dispatch = $Dispatch;
      return $this;
    }

    /**
     * @return CustomerOrder
     */
    public function getCustomerOrder()
    {
      return $this->CustomerOrder;
    }

    /**
     * @param CustomerOrder $CustomerOrder
     * @return CustomerOrderShipment
     */
    public function setCustomerOrder($CustomerOrder)
    {
      $this->CustomerOrder = $CustomerOrder;
      return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param Customer $Customer
     * @return CustomerOrderShipment
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return Address
     */
    public function getDeliveryAddress()
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param Address $DeliveryAddress
     * @return CustomerOrderShipment
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
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
     * @return CustomerOrderShipment
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierType()
    {
      return $this->CourierType;
    }

    /**
     * @param int $CourierType
     * @return CustomerOrderShipment
     */
    public function setCourierType($CourierType)
    {
      $this->CourierType = $CourierType;
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
     * @return CustomerOrderShipment
     */
    public function setCustomerOrderID($CustomerOrderID)
    {
      $this->CustomerOrderID = $CustomerOrderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelURL()
    {
      return $this->LabelURL;
    }

    /**
     * @param string $LabelURL
     * @return CustomerOrderShipment
     */
    public function setLabelURL($LabelURL)
    {
      $this->LabelURL = $LabelURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getManifestID()
    {
      return $this->ManifestID;
    }

    /**
     * @param string $ManifestID
     * @return CustomerOrderShipment
     */
    public function setManifestID($ManifestID)
    {
      $this->ManifestID = $ManifestID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipmentDate()
    {
      if ($this->ShipmentDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShipmentDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShipmentDate
     * @return CustomerOrderShipment
     */
    public function setShipmentDate(\DateTime $ShipmentDate)
    {
      $this->ShipmentDate = $ShipmentDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentID()
    {
      return $this->ShipmentID;
    }

    /**
     * @param string $ShipmentID
     * @return CustomerOrderShipment
     */
    public function setShipmentID($ShipmentID)
    {
      $this->ShipmentID = $ShipmentID;
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
     * @return CustomerOrderShipment
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
     * @return CustomerOrderShipment
     */
    public function setStatusIDEnum($StatusIDEnum)
    {
      $this->StatusIDEnum = $StatusIDEnum;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param int $UserID
     * @return CustomerOrderShipment
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondaryParameter()
    {
      return $this->SecondaryParameter;
    }

    /**
     * @param string $SecondaryParameter
     * @return CustomerOrderShipment
     */
    public function setSecondaryParameter($SecondaryParameter)
    {
      $this->SecondaryParameter = $SecondaryParameter;
      return $this;
    }

}
