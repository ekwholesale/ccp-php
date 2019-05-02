<?php

class CustomerOrder
{

    /**
     * @var SalesChannelType $SalesChannelType
     */
    protected $SalesChannelType = null;

    /**
     * @var string $CurrentShipmentID
     */
    protected $CurrentShipmentID = null;

    /**
     * @var Customer $Customer
     */
    protected $Customer = null;

    /**
     * @var SalesChannel $SalesChannel
     */
    protected $SalesChannel = null;

    /**
     * @var int $OrderType
     */
    protected $OrderType = null;

    /**
     * @var Address $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var float $TotalValue
     */
    protected $TotalValue = null;

    /**
     * @var float $PostageValue
     */
    protected $PostageValue = null;

    /**
     * @var float $ItemValue
     */
    protected $ItemValue = null;

    /**
     * @var boolean $GroupedOrder
     */
    protected $GroupedOrder = null;

    /**
     * @var int $CourierType
     */
    protected $CourierType = null;

    /**
     * @var boolean $IsInternational
     */
    protected $IsInternational = null;

    /**
     * @var BrandCourierSelection $CourierRule
     */
    protected $CourierRule = null;

    /**
     * @var CourierServicesRules $ShippingTariff
     */
    protected $ShippingTariff = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $ExternalOrderRef
     */
    protected $ExternalOrderRef = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var \DateTime $DispatchDate
     */
    protected $DispatchDate = null;

    /**
     * @var int $SeasonID
     */
    protected $SeasonID = null;

    /**
     * @var string $StatusDescription
     */
    protected $StatusDescription = null;

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var int $Payment
     */
    protected $Payment = null;

    /**
     * @var int $PartOrderID
     */
    protected $PartOrderID = null;

    /**
     * @var \DateTime $PickTicketSent
     */
    protected $PickTicketSent = null;

    /**
     * @var int $EcomOrderID
     */
    protected $EcomOrderID = null;

    /**
     * @var int $BarCodeReader
     */
    protected $BarCodeReader = null;

    /**
     * @var int $ShippingType
     */
    protected $ShippingType = null;

    /**
     * @var float $PostageNet
     */
    protected $PostageNet = null;

    /**
     * @var float $PostageVAT
     */
    protected $PostageVAT = null;

    /**
     * @var float $Postage
     */
    protected $Postage = null;

    /**
     * @var float $PostageNetGBP
     */
    protected $PostageNetGBP = null;

    /**
     * @var float $PostageVATGBP
     */
    protected $PostageVATGBP = null;

    /**
     * @var float $GBPPost
     */
    protected $GBPPost = null;

    /**
     * @var float $TotalGross
     */
    protected $TotalGross = null;

    /**
     * @var float $TotalGrossGBP
     */
    protected $TotalGrossGBP = null;

    /**
     * @var float $TotalNet
     */
    protected $TotalNet = null;

    /**
     * @var float $TotalNetGBP
     */
    protected $TotalNetGBP = null;

    /**
     * @var float $TotalVAT
     */
    protected $TotalVAT = null;

    /**
     * @var float $TotalVATGBP
     */
    protected $TotalVATGBP = null;

    /**
     * @var float $DiscountGross
     */
    protected $DiscountGross = null;

    /**
     * @var float $DiscountGrossGBP
     */
    protected $DiscountGrossGBP = null;

    /**
     * @var float $DiscountNet
     */
    protected $DiscountNet = null;

    /**
     * @var float $DiscountNetGBP
     */
    protected $DiscountNetGBP = null;

    /**
     * @var float $DiscountVAT
     */
    protected $DiscountVAT = null;

    /**
     * @var float $DiscountVATGBP
     */
    protected $DiscountVATGBP = null;

    /**
     * @var int $CountryID
     */
    protected $CountryID = null;

    /**
     * @var float $ExchangeRate
     */
    protected $ExchangeRate = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var \DateTime $PickListPrinted
     */
    protected $PickListPrinted = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var string $PreDispatchTrackingNumber
     */
    protected $PreDispatchTrackingNumber = null;

    /**
     * @var string $PreDispatchTrackingUrl
     */
    protected $PreDispatchTrackingUrl = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var int $DefaultCSRuleID
     */
    protected $DefaultCSRuleID = null;

    /**
     * @var float $DefaultCSRuleCost
     */
    protected $DefaultCSRuleCost = null;

    /**
     * @var float $DefaultCSRuleCostGBP
     */
    protected $DefaultCSRuleCostGBP = null;

    /**
     * @var int $DefaultBCSID
     */
    protected $DefaultBCSID = null;

    /**
     * @var string $ShippingServiceName
     */
    protected $ShippingServiceName = null;

    /**
     * @var int $PickStatus
     */
    protected $PickStatus = null;

    /**
     * @var \DateTime $LockPickUntil
     */
    protected $LockPickUntil = null;

    /**
     * @var float $LoyaltyPayment
     */
    protected $LoyaltyPayment = null;

    /**
     * @var int $LoyaltyPointsAvailable
     */
    protected $LoyaltyPointsAvailable = null;

    /**
     * @var int $LoyaltyPointsSpent
     */
    protected $LoyaltyPointsSpent = null;

    /**
     * @var int $LoyaltyPointsEarned
     */
    protected $LoyaltyPointsEarned = null;

    /**
     * @var int $IsFBA
     */
    protected $IsFBA = null;

    /**
     * @var float $TotalFactoryCost
     */
    protected $TotalFactoryCost = null;

    /**
     * @var float $TotalFactoryCostGBP
     */
    protected $TotalFactoryCostGBP = null;

    /**
     * @var float $TotalExtraCost
     */
    protected $TotalExtraCost = null;

    /**
     * @var float $TotalExtraCostGBP
     */
    protected $TotalExtraCostGBP = null;

    /**
     * @var float $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var float $TotalCostGBP
     */
    protected $TotalCostGBP = null;

    /**
     * @var float $TotalProfit
     */
    protected $TotalProfit = null;

    /**
     * @var float $TotalProfitGBP
     */
    protected $TotalProfitGBP = null;

    /**
     * @var int $DeliveryAddressID
     */
    protected $DeliveryAddressID = null;

    /**
     * @var int $BillingAddressID
     */
    protected $BillingAddressID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var StatusID $StatusIDEnum
     */
    protected $StatusIDEnum = null;

    /**
     * @var int $IsExported
     */
    protected $IsExported = null;

    /**
     * @var \DateTime $ExportedDate
     */
    protected $ExportedDate = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var \DateTime $HideUntilDate
     */
    protected $HideUntilDate = null;

    /**
     * @var int $AssignedToWarehouseId
     */
    protected $AssignedToWarehouseId = null;

    /**
     * @var int $ExternalOrderType
     */
    protected $ExternalOrderType = null;

    /**
     * @var \DateTime $ShipByDate
     */
    protected $ShipByDate = null;

    /**
     * @var float $ExpectedTotalGross
     */
    protected $ExpectedTotalGross = null;

    /**
     * @var float $TotalRowNetBeforeDiscount
     */
    protected $TotalRowNetBeforeDiscount = null;

    /**
     * @var float $TotalRowVatBeforeDiscount
     */
    protected $TotalRowVatBeforeDiscount = null;

    /**
     * @var float $TotalRowGrossBeforeDiscount
     */
    protected $TotalRowGrossBeforeDiscount = null;

    /**
     * @var float $TotalOrderDiscountGross
     */
    protected $TotalOrderDiscountGross = null;

    /**
     * @var float $TotalOrderDiscountNet
     */
    protected $TotalOrderDiscountNet = null;

    /**
     * @var float $TotalOrderDiscountVat
     */
    protected $TotalOrderDiscountVat = null;

    /**
     * @var float $TotalItemDiscountGross
     */
    protected $TotalItemDiscountGross = null;

    /**
     * @var float $TotalItemDiscountNet
     */
    protected $TotalItemDiscountNet = null;

    /**
     * @var float $TotalItemDiscountVat
     */
    protected $TotalItemDiscountVat = null;

    /**
     * @var float $ExtraCostsGross
     */
    protected $ExtraCostsGross = null;

    /**
     * @var float $ExtraCostsNet
     */
    protected $ExtraCostsNet = null;

    /**
     * @var float $ExtraCostsVat
     */
    protected $ExtraCostsVat = null;

    /**
     * @param int $OrderType
     * @param float $TotalValue
     * @param float $PostageValue
     * @param float $ItemValue
     * @param boolean $GroupedOrder
     * @param int $CourierType
     * @param boolean $IsInternational
     * @param int $ID
     * @param int $BrandID
     * @param \DateTime $Date
     * @param \DateTime $DeliveryDate
     * @param \DateTime $DispatchDate
     * @param int $SeasonID
     * @param int $SalesChannelID
     * @param int $CustomerID
     * @param int $Payment
     * @param int $PartOrderID
     * @param int $EcomOrderID
     * @param int $BarCodeReader
     * @param int $ShippingType
     * @param float $PostageNet
     * @param float $PostageVAT
     * @param float $Postage
     * @param float $PostageNetGBP
     * @param float $PostageVATGBP
     * @param float $GBPPost
     * @param float $TotalGross
     * @param float $TotalGrossGBP
     * @param float $TotalNet
     * @param float $TotalNetGBP
     * @param float $TotalVAT
     * @param float $TotalVATGBP
     * @param float $DiscountGross
     * @param float $DiscountGrossGBP
     * @param float $DiscountNet
     * @param float $DiscountNetGBP
     * @param float $DiscountVAT
     * @param float $DiscountVATGBP
     * @param int $CountryID
     * @param float $ExchangeRate
     * @param int $Priority
     * @param int $DefaultCSRuleID
     * @param float $DefaultCSRuleCost
     * @param float $DefaultCSRuleCostGBP
     * @param int $DefaultBCSID
     * @param int $PickStatus
     * @param int $IsFBA
     * @param float $TotalFactoryCost
     * @param float $TotalFactoryCostGBP
     * @param float $TotalExtraCost
     * @param float $TotalExtraCostGBP
     * @param float $TotalCost
     * @param float $TotalCostGBP
     * @param float $TotalProfit
     * @param float $TotalProfitGBP
     * @param int $DeliveryAddressID
     * @param int $BillingAddressID
     * @param int $StatusID
     * @param StatusID $StatusIDEnum
     * @param \DateTime $CreationDate
     * @param \DateTime $HideUntilDate
     * @param int $AssignedToWarehouseId
     * @param int $ExternalOrderType
     * @param float $ExpectedTotalGross
     * @param float $TotalRowNetBeforeDiscount
     * @param float $TotalRowVatBeforeDiscount
     * @param float $TotalRowGrossBeforeDiscount
     * @param float $TotalOrderDiscountGross
     * @param float $TotalOrderDiscountNet
     * @param float $TotalOrderDiscountVat
     * @param float $TotalItemDiscountGross
     * @param float $TotalItemDiscountNet
     * @param float $TotalItemDiscountVat
     * @param float $ExtraCostsGross
     * @param float $ExtraCostsNet
     * @param float $ExtraCostsVat
     */
    public function __construct($OrderType, $TotalValue, $PostageValue, $ItemValue, $GroupedOrder, $CourierType, $IsInternational, $ID, $BrandID, \DateTime $Date, \DateTime $DeliveryDate, \DateTime $DispatchDate, $SeasonID, $SalesChannelID, $CustomerID, $Payment, $PartOrderID, $EcomOrderID, $BarCodeReader, $ShippingType, $PostageNet, $PostageVAT, $Postage, $PostageNetGBP, $PostageVATGBP, $GBPPost, $TotalGross, $TotalGrossGBP, $TotalNet, $TotalNetGBP, $TotalVAT, $TotalVATGBP, $DiscountGross, $DiscountGrossGBP, $DiscountNet, $DiscountNetGBP, $DiscountVAT, $DiscountVATGBP, $CountryID, $ExchangeRate, $Priority, $DefaultCSRuleID, $DefaultCSRuleCost, $DefaultCSRuleCostGBP, $DefaultBCSID, $PickStatus, $IsFBA, $TotalFactoryCost, $TotalFactoryCostGBP, $TotalExtraCost, $TotalExtraCostGBP, $TotalCost, $TotalCostGBP, $TotalProfit, $TotalProfitGBP, $DeliveryAddressID, $BillingAddressID, $StatusID, $StatusIDEnum, \DateTime $CreationDate, \DateTime $HideUntilDate, $AssignedToWarehouseId, $ExternalOrderType, $ExpectedTotalGross, $TotalRowNetBeforeDiscount, $TotalRowVatBeforeDiscount, $TotalRowGrossBeforeDiscount, $TotalOrderDiscountGross, $TotalOrderDiscountNet, $TotalOrderDiscountVat, $TotalItemDiscountGross, $TotalItemDiscountNet, $TotalItemDiscountVat, $ExtraCostsGross, $ExtraCostsNet, $ExtraCostsVat)
    {
      $this->OrderType = $OrderType;
      $this->TotalValue = $TotalValue;
      $this->PostageValue = $PostageValue;
      $this->ItemValue = $ItemValue;
      $this->GroupedOrder = $GroupedOrder;
      $this->CourierType = $CourierType;
      $this->IsInternational = $IsInternational;
      $this->ID = $ID;
      $this->BrandID = $BrandID;
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      $this->DispatchDate = $DispatchDate->format(\DateTime::ATOM);
      $this->SeasonID = $SeasonID;
      $this->SalesChannelID = $SalesChannelID;
      $this->CustomerID = $CustomerID;
      $this->Payment = $Payment;
      $this->PartOrderID = $PartOrderID;
      $this->EcomOrderID = $EcomOrderID;
      $this->BarCodeReader = $BarCodeReader;
      $this->ShippingType = $ShippingType;
      $this->PostageNet = $PostageNet;
      $this->PostageVAT = $PostageVAT;
      $this->Postage = $Postage;
      $this->PostageNetGBP = $PostageNetGBP;
      $this->PostageVATGBP = $PostageVATGBP;
      $this->GBPPost = $GBPPost;
      $this->TotalGross = $TotalGross;
      $this->TotalGrossGBP = $TotalGrossGBP;
      $this->TotalNet = $TotalNet;
      $this->TotalNetGBP = $TotalNetGBP;
      $this->TotalVAT = $TotalVAT;
      $this->TotalVATGBP = $TotalVATGBP;
      $this->DiscountGross = $DiscountGross;
      $this->DiscountGrossGBP = $DiscountGrossGBP;
      $this->DiscountNet = $DiscountNet;
      $this->DiscountNetGBP = $DiscountNetGBP;
      $this->DiscountVAT = $DiscountVAT;
      $this->DiscountVATGBP = $DiscountVATGBP;
      $this->CountryID = $CountryID;
      $this->ExchangeRate = $ExchangeRate;
      $this->Priority = $Priority;
      $this->DefaultCSRuleID = $DefaultCSRuleID;
      $this->DefaultCSRuleCost = $DefaultCSRuleCost;
      $this->DefaultCSRuleCostGBP = $DefaultCSRuleCostGBP;
      $this->DefaultBCSID = $DefaultBCSID;
      $this->PickStatus = $PickStatus;
      $this->IsFBA = $IsFBA;
      $this->TotalFactoryCost = $TotalFactoryCost;
      $this->TotalFactoryCostGBP = $TotalFactoryCostGBP;
      $this->TotalExtraCost = $TotalExtraCost;
      $this->TotalExtraCostGBP = $TotalExtraCostGBP;
      $this->TotalCost = $TotalCost;
      $this->TotalCostGBP = $TotalCostGBP;
      $this->TotalProfit = $TotalProfit;
      $this->TotalProfitGBP = $TotalProfitGBP;
      $this->DeliveryAddressID = $DeliveryAddressID;
      $this->BillingAddressID = $BillingAddressID;
      $this->StatusID = $StatusID;
      $this->StatusIDEnum = $StatusIDEnum;
      $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
      $this->HideUntilDate = $HideUntilDate->format(\DateTime::ATOM);
      $this->AssignedToWarehouseId = $AssignedToWarehouseId;
      $this->ExternalOrderType = $ExternalOrderType;
      $this->ExpectedTotalGross = $ExpectedTotalGross;
      $this->TotalRowNetBeforeDiscount = $TotalRowNetBeforeDiscount;
      $this->TotalRowVatBeforeDiscount = $TotalRowVatBeforeDiscount;
      $this->TotalRowGrossBeforeDiscount = $TotalRowGrossBeforeDiscount;
      $this->TotalOrderDiscountGross = $TotalOrderDiscountGross;
      $this->TotalOrderDiscountNet = $TotalOrderDiscountNet;
      $this->TotalOrderDiscountVat = $TotalOrderDiscountVat;
      $this->TotalItemDiscountGross = $TotalItemDiscountGross;
      $this->TotalItemDiscountNet = $TotalItemDiscountNet;
      $this->TotalItemDiscountVat = $TotalItemDiscountVat;
      $this->ExtraCostsGross = $ExtraCostsGross;
      $this->ExtraCostsNet = $ExtraCostsNet;
      $this->ExtraCostsVat = $ExtraCostsVat;
    }

    /**
     * @return SalesChannelType
     */
    public function getSalesChannelType()
    {
      return $this->SalesChannelType;
    }

    /**
     * @param SalesChannelType $SalesChannelType
     * @return CustomerOrder
     */
    public function setSalesChannelType($SalesChannelType)
    {
      $this->SalesChannelType = $SalesChannelType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrentShipmentID()
    {
      return $this->CurrentShipmentID;
    }

    /**
     * @param string $CurrentShipmentID
     * @return CustomerOrder
     */
    public function setCurrentShipmentID($CurrentShipmentID)
    {
      $this->CurrentShipmentID = $CurrentShipmentID;
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
     * @return CustomerOrder
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return SalesChannel
     */
    public function getSalesChannel()
    {
      return $this->SalesChannel;
    }

    /**
     * @param SalesChannel $SalesChannel
     * @return CustomerOrder
     */
    public function setSalesChannel($SalesChannel)
    {
      $this->SalesChannel = $SalesChannel;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderType()
    {
      return $this->OrderType;
    }

    /**
     * @param int $OrderType
     * @return CustomerOrder
     */
    public function setOrderType($OrderType)
    {
      $this->OrderType = $OrderType;
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
     * @return CustomerOrder
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalValue()
    {
      return $this->TotalValue;
    }

    /**
     * @param float $TotalValue
     * @return CustomerOrder
     */
    public function setTotalValue($TotalValue)
    {
      $this->TotalValue = $TotalValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostageValue()
    {
      return $this->PostageValue;
    }

    /**
     * @param float $PostageValue
     * @return CustomerOrder
     */
    public function setPostageValue($PostageValue)
    {
      $this->PostageValue = $PostageValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemValue()
    {
      return $this->ItemValue;
    }

    /**
     * @param float $ItemValue
     * @return CustomerOrder
     */
    public function setItemValue($ItemValue)
    {
      $this->ItemValue = $ItemValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGroupedOrder()
    {
      return $this->GroupedOrder;
    }

    /**
     * @param boolean $GroupedOrder
     * @return CustomerOrder
     */
    public function setGroupedOrder($GroupedOrder)
    {
      $this->GroupedOrder = $GroupedOrder;
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
     * @return CustomerOrder
     */
    public function setCourierType($CourierType)
    {
      $this->CourierType = $CourierType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInternational()
    {
      return $this->IsInternational;
    }

    /**
     * @param boolean $IsInternational
     * @return CustomerOrder
     */
    public function setIsInternational($IsInternational)
    {
      $this->IsInternational = $IsInternational;
      return $this;
    }

    /**
     * @return BrandCourierSelection
     */
    public function getCourierRule()
    {
      return $this->CourierRule;
    }

    /**
     * @param BrandCourierSelection $CourierRule
     * @return CustomerOrder
     */
    public function setCourierRule($CourierRule)
    {
      $this->CourierRule = $CourierRule;
      return $this;
    }

    /**
     * @return CourierServicesRules
     */
    public function getShippingTariff()
    {
      return $this->ShippingTariff;
    }

    /**
     * @param CourierServicesRules $ShippingTariff
     * @return CustomerOrder
     */
    public function setShippingTariff($ShippingTariff)
    {
      $this->ShippingTariff = $ShippingTariff;
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
     * @return CustomerOrder
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
     * @return CustomerOrder
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return CustomerOrder
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return CustomerOrder
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalOrderRef()
    {
      return $this->ExternalOrderRef;
    }

    /**
     * @param string $ExternalOrderRef
     * @return CustomerOrder
     */
    public function setExternalOrderRef($ExternalOrderRef)
    {
      $this->ExternalOrderRef = $ExternalOrderRef;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return CustomerOrder
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDispatchDate()
    {
      if ($this->DispatchDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DispatchDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DispatchDate
     * @return CustomerOrder
     */
    public function setDispatchDate(\DateTime $DispatchDate)
    {
      $this->DispatchDate = $DispatchDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getSeasonID()
    {
      return $this->SeasonID;
    }

    /**
     * @param int $SeasonID
     * @return CustomerOrder
     */
    public function setSeasonID($SeasonID)
    {
      $this->SeasonID = $SeasonID;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusDescription()
    {
      return $this->StatusDescription;
    }

    /**
     * @param string $StatusDescription
     * @return CustomerOrder
     */
    public function setStatusDescription($StatusDescription)
    {
      $this->StatusDescription = $StatusDescription;
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
     * @return CustomerOrder
     */
    public function setSalesChannelID($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param int $CustomerID
     * @return CustomerOrder
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param int $Payment
     * @return CustomerOrder
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return int
     */
    public function getPartOrderID()
    {
      return $this->PartOrderID;
    }

    /**
     * @param int $PartOrderID
     * @return CustomerOrder
     */
    public function setPartOrderID($PartOrderID)
    {
      $this->PartOrderID = $PartOrderID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickTicketSent()
    {
      if ($this->PickTicketSent == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PickTicketSent);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PickTicketSent
     * @return CustomerOrder
     */
    public function setPickTicketSent(\DateTime $PickTicketSent = null)
    {
      if ($PickTicketSent == null) {
       $this->PickTicketSent = null;
      } else {
        $this->PickTicketSent = $PickTicketSent->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getEcomOrderID()
    {
      return $this->EcomOrderID;
    }

    /**
     * @param int $EcomOrderID
     * @return CustomerOrder
     */
    public function setEcomOrderID($EcomOrderID)
    {
      $this->EcomOrderID = $EcomOrderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getBarCodeReader()
    {
      return $this->BarCodeReader;
    }

    /**
     * @param int $BarCodeReader
     * @return CustomerOrder
     */
    public function setBarCodeReader($BarCodeReader)
    {
      $this->BarCodeReader = $BarCodeReader;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingType()
    {
      return $this->ShippingType;
    }

    /**
     * @param int $ShippingType
     * @return CustomerOrder
     */
    public function setShippingType($ShippingType)
    {
      $this->ShippingType = $ShippingType;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostageNet()
    {
      return $this->PostageNet;
    }

    /**
     * @param float $PostageNet
     * @return CustomerOrder
     */
    public function setPostageNet($PostageNet)
    {
      $this->PostageNet = $PostageNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostageVAT()
    {
      return $this->PostageVAT;
    }

    /**
     * @param float $PostageVAT
     * @return CustomerOrder
     */
    public function setPostageVAT($PostageVAT)
    {
      $this->PostageVAT = $PostageVAT;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostage()
    {
      return $this->Postage;
    }

    /**
     * @param float $Postage
     * @return CustomerOrder
     */
    public function setPostage($Postage)
    {
      $this->Postage = $Postage;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostageNetGBP()
    {
      return $this->PostageNetGBP;
    }

    /**
     * @param float $PostageNetGBP
     * @return CustomerOrder
     */
    public function setPostageNetGBP($PostageNetGBP)
    {
      $this->PostageNetGBP = $PostageNetGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostageVATGBP()
    {
      return $this->PostageVATGBP;
    }

    /**
     * @param float $PostageVATGBP
     * @return CustomerOrder
     */
    public function setPostageVATGBP($PostageVATGBP)
    {
      $this->PostageVATGBP = $PostageVATGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getGBPPost()
    {
      return $this->GBPPost;
    }

    /**
     * @param float $GBPPost
     * @return CustomerOrder
     */
    public function setGBPPost($GBPPost)
    {
      $this->GBPPost = $GBPPost;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalGross()
    {
      return $this->TotalGross;
    }

    /**
     * @param float $TotalGross
     * @return CustomerOrder
     */
    public function setTotalGross($TotalGross)
    {
      $this->TotalGross = $TotalGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalGrossGBP()
    {
      return $this->TotalGrossGBP;
    }

    /**
     * @param float $TotalGrossGBP
     * @return CustomerOrder
     */
    public function setTotalGrossGBP($TotalGrossGBP)
    {
      $this->TotalGrossGBP = $TotalGrossGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalNet()
    {
      return $this->TotalNet;
    }

    /**
     * @param float $TotalNet
     * @return CustomerOrder
     */
    public function setTotalNet($TotalNet)
    {
      $this->TotalNet = $TotalNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalNetGBP()
    {
      return $this->TotalNetGBP;
    }

    /**
     * @param float $TotalNetGBP
     * @return CustomerOrder
     */
    public function setTotalNetGBP($TotalNetGBP)
    {
      $this->TotalNetGBP = $TotalNetGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalVAT()
    {
      return $this->TotalVAT;
    }

    /**
     * @param float $TotalVAT
     * @return CustomerOrder
     */
    public function setTotalVAT($TotalVAT)
    {
      $this->TotalVAT = $TotalVAT;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalVATGBP()
    {
      return $this->TotalVATGBP;
    }

    /**
     * @param float $TotalVATGBP
     * @return CustomerOrder
     */
    public function setTotalVATGBP($TotalVATGBP)
    {
      $this->TotalVATGBP = $TotalVATGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountGross()
    {
      return $this->DiscountGross;
    }

    /**
     * @param float $DiscountGross
     * @return CustomerOrder
     */
    public function setDiscountGross($DiscountGross)
    {
      $this->DiscountGross = $DiscountGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountGrossGBP()
    {
      return $this->DiscountGrossGBP;
    }

    /**
     * @param float $DiscountGrossGBP
     * @return CustomerOrder
     */
    public function setDiscountGrossGBP($DiscountGrossGBP)
    {
      $this->DiscountGrossGBP = $DiscountGrossGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountNet()
    {
      return $this->DiscountNet;
    }

    /**
     * @param float $DiscountNet
     * @return CustomerOrder
     */
    public function setDiscountNet($DiscountNet)
    {
      $this->DiscountNet = $DiscountNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountNetGBP()
    {
      return $this->DiscountNetGBP;
    }

    /**
     * @param float $DiscountNetGBP
     * @return CustomerOrder
     */
    public function setDiscountNetGBP($DiscountNetGBP)
    {
      $this->DiscountNetGBP = $DiscountNetGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountVAT()
    {
      return $this->DiscountVAT;
    }

    /**
     * @param float $DiscountVAT
     * @return CustomerOrder
     */
    public function setDiscountVAT($DiscountVAT)
    {
      $this->DiscountVAT = $DiscountVAT;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountVATGBP()
    {
      return $this->DiscountVATGBP;
    }

    /**
     * @param float $DiscountVATGBP
     * @return CustomerOrder
     */
    public function setDiscountVATGBP($DiscountVATGBP)
    {
      $this->DiscountVATGBP = $DiscountVATGBP;
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
     * @return CustomerOrder
     */
    public function setCountryID($CountryID)
    {
      $this->CountryID = $CountryID;
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
     * @return CustomerOrder
     */
    public function setExchangeRate($ExchangeRate)
    {
      $this->ExchangeRate = $ExchangeRate;
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
     * @return CustomerOrder
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickListPrinted()
    {
      if ($this->PickListPrinted == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PickListPrinted);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PickListPrinted
     * @return CustomerOrder
     */
    public function setPickListPrinted(\DateTime $PickListPrinted = null)
    {
      if ($PickListPrinted == null) {
       $this->PickListPrinted = null;
      } else {
        $this->PickListPrinted = $PickListPrinted->format(\DateTime::ATOM);
      }
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
     * @return CustomerOrder
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreDispatchTrackingNumber()
    {
      return $this->PreDispatchTrackingNumber;
    }

    /**
     * @param string $PreDispatchTrackingNumber
     * @return CustomerOrder
     */
    public function setPreDispatchTrackingNumber($PreDispatchTrackingNumber)
    {
      $this->PreDispatchTrackingNumber = $PreDispatchTrackingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreDispatchTrackingUrl()
    {
      return $this->PreDispatchTrackingUrl;
    }

    /**
     * @param string $PreDispatchTrackingUrl
     * @return CustomerOrder
     */
    public function setPreDispatchTrackingUrl($PreDispatchTrackingUrl)
    {
      $this->PreDispatchTrackingUrl = $PreDispatchTrackingUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return CustomerOrder
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultCSRuleID()
    {
      return $this->DefaultCSRuleID;
    }

    /**
     * @param int $DefaultCSRuleID
     * @return CustomerOrder
     */
    public function setDefaultCSRuleID($DefaultCSRuleID)
    {
      $this->DefaultCSRuleID = $DefaultCSRuleID;
      return $this;
    }

    /**
     * @return float
     */
    public function getDefaultCSRuleCost()
    {
      return $this->DefaultCSRuleCost;
    }

    /**
     * @param float $DefaultCSRuleCost
     * @return CustomerOrder
     */
    public function setDefaultCSRuleCost($DefaultCSRuleCost)
    {
      $this->DefaultCSRuleCost = $DefaultCSRuleCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getDefaultCSRuleCostGBP()
    {
      return $this->DefaultCSRuleCostGBP;
    }

    /**
     * @param float $DefaultCSRuleCostGBP
     * @return CustomerOrder
     */
    public function setDefaultCSRuleCostGBP($DefaultCSRuleCostGBP)
    {
      $this->DefaultCSRuleCostGBP = $DefaultCSRuleCostGBP;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultBCSID()
    {
      return $this->DefaultBCSID;
    }

    /**
     * @param int $DefaultBCSID
     * @return CustomerOrder
     */
    public function setDefaultBCSID($DefaultBCSID)
    {
      $this->DefaultBCSID = $DefaultBCSID;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingServiceName()
    {
      return $this->ShippingServiceName;
    }

    /**
     * @param string $ShippingServiceName
     * @return CustomerOrder
     */
    public function setShippingServiceName($ShippingServiceName)
    {
      $this->ShippingServiceName = $ShippingServiceName;
      return $this;
    }

    /**
     * @return int
     */
    public function getPickStatus()
    {
      return $this->PickStatus;
    }

    /**
     * @param int $PickStatus
     * @return CustomerOrder
     */
    public function setPickStatus($PickStatus)
    {
      $this->PickStatus = $PickStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLockPickUntil()
    {
      if ($this->LockPickUntil == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LockPickUntil);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LockPickUntil
     * @return CustomerOrder
     */
    public function setLockPickUntil(\DateTime $LockPickUntil = null)
    {
      if ($LockPickUntil == null) {
       $this->LockPickUntil = null;
      } else {
        $this->LockPickUntil = $LockPickUntil->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getLoyaltyPayment()
    {
      return $this->LoyaltyPayment;
    }

    /**
     * @param float $LoyaltyPayment
     * @return CustomerOrder
     */
    public function setLoyaltyPayment($LoyaltyPayment)
    {
      $this->LoyaltyPayment = $LoyaltyPayment;
      return $this;
    }

    /**
     * @return int
     */
    public function getLoyaltyPointsAvailable()
    {
      return $this->LoyaltyPointsAvailable;
    }

    /**
     * @param int $LoyaltyPointsAvailable
     * @return CustomerOrder
     */
    public function setLoyaltyPointsAvailable($LoyaltyPointsAvailable)
    {
      $this->LoyaltyPointsAvailable = $LoyaltyPointsAvailable;
      return $this;
    }

    /**
     * @return int
     */
    public function getLoyaltyPointsSpent()
    {
      return $this->LoyaltyPointsSpent;
    }

    /**
     * @param int $LoyaltyPointsSpent
     * @return CustomerOrder
     */
    public function setLoyaltyPointsSpent($LoyaltyPointsSpent)
    {
      $this->LoyaltyPointsSpent = $LoyaltyPointsSpent;
      return $this;
    }

    /**
     * @return int
     */
    public function getLoyaltyPointsEarned()
    {
      return $this->LoyaltyPointsEarned;
    }

    /**
     * @param int $LoyaltyPointsEarned
     * @return CustomerOrder
     */
    public function setLoyaltyPointsEarned($LoyaltyPointsEarned)
    {
      $this->LoyaltyPointsEarned = $LoyaltyPointsEarned;
      return $this;
    }

    /**
     * @return int
     */
    public function getIsFBA()
    {
      return $this->IsFBA;
    }

    /**
     * @param int $IsFBA
     * @return CustomerOrder
     */
    public function setIsFBA($IsFBA)
    {
      $this->IsFBA = $IsFBA;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalFactoryCost()
    {
      return $this->TotalFactoryCost;
    }

    /**
     * @param float $TotalFactoryCost
     * @return CustomerOrder
     */
    public function setTotalFactoryCost($TotalFactoryCost)
    {
      $this->TotalFactoryCost = $TotalFactoryCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalFactoryCostGBP()
    {
      return $this->TotalFactoryCostGBP;
    }

    /**
     * @param float $TotalFactoryCostGBP
     * @return CustomerOrder
     */
    public function setTotalFactoryCostGBP($TotalFactoryCostGBP)
    {
      $this->TotalFactoryCostGBP = $TotalFactoryCostGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalExtraCost()
    {
      return $this->TotalExtraCost;
    }

    /**
     * @param float $TotalExtraCost
     * @return CustomerOrder
     */
    public function setTotalExtraCost($TotalExtraCost)
    {
      $this->TotalExtraCost = $TotalExtraCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalExtraCostGBP()
    {
      return $this->TotalExtraCostGBP;
    }

    /**
     * @param float $TotalExtraCostGBP
     * @return CustomerOrder
     */
    public function setTotalExtraCostGBP($TotalExtraCostGBP)
    {
      $this->TotalExtraCostGBP = $TotalExtraCostGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param float $TotalCost
     * @return CustomerOrder
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalCostGBP()
    {
      return $this->TotalCostGBP;
    }

    /**
     * @param float $TotalCostGBP
     * @return CustomerOrder
     */
    public function setTotalCostGBP($TotalCostGBP)
    {
      $this->TotalCostGBP = $TotalCostGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalProfit()
    {
      return $this->TotalProfit;
    }

    /**
     * @param float $TotalProfit
     * @return CustomerOrder
     */
    public function setTotalProfit($TotalProfit)
    {
      $this->TotalProfit = $TotalProfit;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalProfitGBP()
    {
      return $this->TotalProfitGBP;
    }

    /**
     * @param float $TotalProfitGBP
     * @return CustomerOrder
     */
    public function setTotalProfitGBP($TotalProfitGBP)
    {
      $this->TotalProfitGBP = $TotalProfitGBP;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryAddressID()
    {
      return $this->DeliveryAddressID;
    }

    /**
     * @param int $DeliveryAddressID
     * @return CustomerOrder
     */
    public function setDeliveryAddressID($DeliveryAddressID)
    {
      $this->DeliveryAddressID = $DeliveryAddressID;
      return $this;
    }

    /**
     * @return int
     */
    public function getBillingAddressID()
    {
      return $this->BillingAddressID;
    }

    /**
     * @param int $BillingAddressID
     * @return CustomerOrder
     */
    public function setBillingAddressID($BillingAddressID)
    {
      $this->BillingAddressID = $BillingAddressID;
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
     * @return CustomerOrder
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
     * @return CustomerOrder
     */
    public function setStatusIDEnum($StatusIDEnum)
    {
      $this->StatusIDEnum = $StatusIDEnum;
      return $this;
    }

    /**
     * @return int
     */
    public function getIsExported()
    {
      return $this->IsExported;
    }

    /**
     * @param int $IsExported
     * @return CustomerOrder
     */
    public function setIsExported($IsExported)
    {
      $this->IsExported = $IsExported;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExportedDate()
    {
      if ($this->ExportedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExportedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExportedDate
     * @return CustomerOrder
     */
    public function setExportedDate(\DateTime $ExportedDate = null)
    {
      if ($ExportedDate == null) {
       $this->ExportedDate = null;
      } else {
        $this->ExportedDate = $ExportedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
      if ($this->CreationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationDate
     * @return CustomerOrder
     */
    public function setCreationDate(\DateTime $CreationDate)
    {
      $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getHideUntilDate()
    {
      if ($this->HideUntilDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->HideUntilDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $HideUntilDate
     * @return CustomerOrder
     */
    public function setHideUntilDate(\DateTime $HideUntilDate)
    {
      $this->HideUntilDate = $HideUntilDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getAssignedToWarehouseId()
    {
      return $this->AssignedToWarehouseId;
    }

    /**
     * @param int $AssignedToWarehouseId
     * @return CustomerOrder
     */
    public function setAssignedToWarehouseId($AssignedToWarehouseId)
    {
      $this->AssignedToWarehouseId = $AssignedToWarehouseId;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalOrderType()
    {
      return $this->ExternalOrderType;
    }

    /**
     * @param int $ExternalOrderType
     * @return CustomerOrder
     */
    public function setExternalOrderType($ExternalOrderType)
    {
      $this->ExternalOrderType = $ExternalOrderType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipByDate()
    {
      if ($this->ShipByDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShipByDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShipByDate
     * @return CustomerOrder
     */
    public function setShipByDate(\DateTime $ShipByDate = null)
    {
      if ($ShipByDate == null) {
       $this->ShipByDate = null;
      } else {
        $this->ShipByDate = $ShipByDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getExpectedTotalGross()
    {
      return $this->ExpectedTotalGross;
    }

    /**
     * @param float $ExpectedTotalGross
     * @return CustomerOrder
     */
    public function setExpectedTotalGross($ExpectedTotalGross)
    {
      $this->ExpectedTotalGross = $ExpectedTotalGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalRowNetBeforeDiscount()
    {
      return $this->TotalRowNetBeforeDiscount;
    }

    /**
     * @param float $TotalRowNetBeforeDiscount
     * @return CustomerOrder
     */
    public function setTotalRowNetBeforeDiscount($TotalRowNetBeforeDiscount)
    {
      $this->TotalRowNetBeforeDiscount = $TotalRowNetBeforeDiscount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalRowVatBeforeDiscount()
    {
      return $this->TotalRowVatBeforeDiscount;
    }

    /**
     * @param float $TotalRowVatBeforeDiscount
     * @return CustomerOrder
     */
    public function setTotalRowVatBeforeDiscount($TotalRowVatBeforeDiscount)
    {
      $this->TotalRowVatBeforeDiscount = $TotalRowVatBeforeDiscount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalRowGrossBeforeDiscount()
    {
      return $this->TotalRowGrossBeforeDiscount;
    }

    /**
     * @param float $TotalRowGrossBeforeDiscount
     * @return CustomerOrder
     */
    public function setTotalRowGrossBeforeDiscount($TotalRowGrossBeforeDiscount)
    {
      $this->TotalRowGrossBeforeDiscount = $TotalRowGrossBeforeDiscount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalOrderDiscountGross()
    {
      return $this->TotalOrderDiscountGross;
    }

    /**
     * @param float $TotalOrderDiscountGross
     * @return CustomerOrder
     */
    public function setTotalOrderDiscountGross($TotalOrderDiscountGross)
    {
      $this->TotalOrderDiscountGross = $TotalOrderDiscountGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalOrderDiscountNet()
    {
      return $this->TotalOrderDiscountNet;
    }

    /**
     * @param float $TotalOrderDiscountNet
     * @return CustomerOrder
     */
    public function setTotalOrderDiscountNet($TotalOrderDiscountNet)
    {
      $this->TotalOrderDiscountNet = $TotalOrderDiscountNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalOrderDiscountVat()
    {
      return $this->TotalOrderDiscountVat;
    }

    /**
     * @param float $TotalOrderDiscountVat
     * @return CustomerOrder
     */
    public function setTotalOrderDiscountVat($TotalOrderDiscountVat)
    {
      $this->TotalOrderDiscountVat = $TotalOrderDiscountVat;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalItemDiscountGross()
    {
      return $this->TotalItemDiscountGross;
    }

    /**
     * @param float $TotalItemDiscountGross
     * @return CustomerOrder
     */
    public function setTotalItemDiscountGross($TotalItemDiscountGross)
    {
      $this->TotalItemDiscountGross = $TotalItemDiscountGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalItemDiscountNet()
    {
      return $this->TotalItemDiscountNet;
    }

    /**
     * @param float $TotalItemDiscountNet
     * @return CustomerOrder
     */
    public function setTotalItemDiscountNet($TotalItemDiscountNet)
    {
      $this->TotalItemDiscountNet = $TotalItemDiscountNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalItemDiscountVat()
    {
      return $this->TotalItemDiscountVat;
    }

    /**
     * @param float $TotalItemDiscountVat
     * @return CustomerOrder
     */
    public function setTotalItemDiscountVat($TotalItemDiscountVat)
    {
      $this->TotalItemDiscountVat = $TotalItemDiscountVat;
      return $this;
    }

    /**
     * @return float
     */
    public function getExtraCostsGross()
    {
      return $this->ExtraCostsGross;
    }

    /**
     * @param float $ExtraCostsGross
     * @return CustomerOrder
     */
    public function setExtraCostsGross($ExtraCostsGross)
    {
      $this->ExtraCostsGross = $ExtraCostsGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getExtraCostsNet()
    {
      return $this->ExtraCostsNet;
    }

    /**
     * @param float $ExtraCostsNet
     * @return CustomerOrder
     */
    public function setExtraCostsNet($ExtraCostsNet)
    {
      $this->ExtraCostsNet = $ExtraCostsNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getExtraCostsVat()
    {
      return $this->ExtraCostsVat;
    }

    /**
     * @param float $ExtraCostsVat
     * @return CustomerOrder
     */
    public function setExtraCostsVat($ExtraCostsVat)
    {
      $this->ExtraCostsVat = $ExtraCostsVat;
      return $this;
    }

}
