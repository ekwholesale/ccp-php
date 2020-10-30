<?php

class APIOrderCreateOrderRequestCustom
{

    /**
     * @var int $nCustomerID
     */
    protected $nCustomerID = null;

    /**
     * @var int $intBrandID
     */
    protected $intBrandID = null;

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

    /**
     * @var int $nSeasonID
     */
    protected $nSeasonID = null;

    /**
     * @var int $nLoginID
     */
    protected $nLoginID = null;

    /**
     * @var int $nOrderID
     */
    protected $nOrderID = null;

    /**
     * @var int $nSendEmail
     */
    protected $nSendEmail = null;

    /**
     * @var string $strReference
     */
    protected $strReference = null;

    /**
     * @var int $nPaymentTermID
     */
    protected $nPaymentTermID = null;

    /**
     * @var \DateTime $strDeliveryDate
     */
    protected $strDeliveryDate = null;

    /**
     * @var \DateTime $ShipByDate
     */
    protected $ShipByDate = null;

    /**
     * @var string $strPostageOverride
     */
    protected $strPostageOverride = null;

    /**
     * @var float $NetCarriage
     */
    protected $NetCarriage = null;

    /**
     * @var float $VATCarriage
     */
    protected $VATCarriage = null;

    /**
     * @var float $decCarriageTotal
     */
    protected $decCarriageTotal = null;

    /**
     * @var int $intAddByLoginID
     */
    protected $intAddByLoginID = null;

    /**
     * @var int $intPaymentStatus
     */
    protected $intPaymentStatus = null;

    /**
     * @var int $intDaysOfCredit
     */
    protected $intDaysOfCredit = null;

    /**
     * @var boolean $doTriggers
     */
    protected $doTriggers = null;

    /**
     * @var string $ShippingService
     */
    protected $ShippingService = null;

    /**
     * @var int $ShippingRuleID
     */
    protected $ShippingRuleID = null;

    /**
     * @var string $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var APIOrderBillingAddress $BillingAddress
     */
    protected $BillingAddress = null;

    /**
     * @var APIOrderShippingAddress $ShippingAddress
     */
    protected $ShippingAddress = null;

    /**
     * @var ArrayOfAPIOrderItem $orderItems
     */
    protected $orderItems = null;

    /**
     * @param int $nCustomerID
     * @param int $intBrandID
     * @param int $nSeasonID
     * @param int $nLoginID
     * @param int $nOrderID
     * @param int $nSendEmail
     * @param int $nPaymentTermID
     * @param \DateTime $strDeliveryDate
     * @param \DateTime $ShipByDate
     * @param float $NetCarriage
     * @param float $VATCarriage
     * @param float $decCarriageTotal
     * @param int $intAddByLoginID
     * @param int $intPaymentStatus
     * @param int $intDaysOfCredit
     * @param boolean $doTriggers
     * @param int $ShippingRuleID
     */
    public function __construct($nCustomerID, $intBrandID, $nSeasonID, $nLoginID, $nOrderID, $nSendEmail, $nPaymentTermID, \DateTime $strDeliveryDate, \DateTime $ShipByDate, $NetCarriage, $VATCarriage, $decCarriageTotal, $intAddByLoginID, $intPaymentStatus, $intDaysOfCredit, $doTriggers, $ShippingRuleID)
    {
      $this->nCustomerID = $nCustomerID;
      $this->intBrandID = $intBrandID;
      $this->nSeasonID = $nSeasonID;
      $this->nLoginID = $nLoginID;
      $this->nOrderID = $nOrderID;
      $this->nSendEmail = $nSendEmail;
      $this->nPaymentTermID = $nPaymentTermID;
      $this->strDeliveryDate = $strDeliveryDate->format(\DateTime::ATOM);
      $this->ShipByDate = $ShipByDate->format(\DateTime::ATOM);
      $this->NetCarriage = $NetCarriage;
      $this->VATCarriage = $VATCarriage;
      $this->decCarriageTotal = $decCarriageTotal;
      $this->intAddByLoginID = $intAddByLoginID;
      $this->intPaymentStatus = $intPaymentStatus;
      $this->intDaysOfCredit = $intDaysOfCredit;
      $this->doTriggers = $doTriggers;
      $this->ShippingRuleID = $ShippingRuleID;
    }

    /**
     * @return int
     */
    public function getNCustomerID()
    {
      return $this->nCustomerID;
    }

    /**
     * @param int $nCustomerID
     * @return APIOrderCreateOrderRequest
     */
    public function setNCustomerID($nCustomerID)
    {
      $this->nCustomerID = $nCustomerID;
      return $this;
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
     * @return APIOrderCreateOrderRequest
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
     * @return APIOrderCreateOrderRequest
     */
    public function setSalesChannelID($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
      return $this;
    }

    /**
     * @return int
     */
    public function getNSeasonID()
    {
      return $this->nSeasonID;
    }

    /**
     * @param int $nSeasonID
     * @return APIOrderCreateOrderRequest
     */
    public function setNSeasonID($nSeasonID)
    {
      $this->nSeasonID = $nSeasonID;
      return $this;
    }

    /**
     * @return int
     */
    public function getNLoginID()
    {
      return $this->nLoginID;
    }

    /**
     * @param int $nLoginID
     * @return APIOrderCreateOrderRequest
     */
    public function setNLoginID($nLoginID)
    {
      $this->nLoginID = $nLoginID;
      return $this;
    }

    /**
     * @return int
     */
    public function getNOrderID()
    {
      return $this->nOrderID;
    }

    /**
     * @param int $nOrderID
     * @return APIOrderCreateOrderRequest
     */
    public function setNOrderID($nOrderID)
    {
      $this->nOrderID = $nOrderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getNSendEmail()
    {
      return $this->nSendEmail;
    }

    /**
     * @param int $nSendEmail
     * @return APIOrderCreateOrderRequest
     */
    public function setNSendEmail($nSendEmail)
    {
      $this->nSendEmail = $nSendEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getStrReference()
    {
      return $this->strReference;
    }

    /**
     * @param string $strReference
     * @return APIOrderCreateOrderRequest
     */
    public function setStrReference($strReference)
    {
      $this->strReference = $strReference;
      return $this;
    }

    /**
     * @return int
     */
    public function getNPaymentTermID()
    {
      return $this->nPaymentTermID;
    }

    /**
     * @param int $nPaymentTermID
     * @return APIOrderCreateOrderRequest
     */
    public function setNPaymentTermID($nPaymentTermID)
    {
      $this->nPaymentTermID = $nPaymentTermID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStrDeliveryDate()
    {
      if ($this->strDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->strDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $strDeliveryDate
     * @return APIOrderCreateOrderRequest
     */
    public function setStrDeliveryDate(\DateTime $strDeliveryDate)
    {
      $this->strDeliveryDate = $strDeliveryDate->format(\DateTime::ATOM);
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
     * @return APIOrderCreateOrderRequest
     */
    public function setShipByDate(\DateTime $ShipByDate)
    {
      $this->ShipByDate = $ShipByDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getStrPostageOverride()
    {
      return $this->strPostageOverride;
    }

    /**
     * @param string $strPostageOverride
     * @return APIOrderCreateOrderRequest
     */
    public function setStrPostageOverride($strPostageOverride)
    {
      $this->strPostageOverride = $strPostageOverride;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetCarriage()
    {
      return $this->NetCarriage;
    }

    /**
     * @param float $NetCarriage
     * @return APIOrderCreateOrderRequest
     */
    public function setNetCarriage($NetCarriage)
    {
      $this->NetCarriage = $NetCarriage;
      return $this;
    }

    /**
     * @return float
     */
    public function getVATCarriage()
    {
      return $this->VATCarriage;
    }

    /**
     * @param float $VATCarriage
     * @return APIOrderCreateOrderRequest
     */
    public function setVATCarriage($VATCarriage)
    {
      $this->VATCarriage = $VATCarriage;
      return $this;
    }

    /**
     * @return float
     */
    public function getDecCarriageTotal()
    {
      return $this->decCarriageTotal;
    }

    /**
     * @param float $decCarriageTotal
     * @return APIOrderCreateOrderRequest
     */
    public function setDecCarriageTotal($decCarriageTotal)
    {
      $this->decCarriageTotal = $decCarriageTotal;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntAddByLoginID()
    {
      return $this->intAddByLoginID;
    }

    /**
     * @param int $intAddByLoginID
     * @return APIOrderCreateOrderRequest
     */
    public function setIntAddByLoginID($intAddByLoginID)
    {
      $this->intAddByLoginID = $intAddByLoginID;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntPaymentStatus()
    {
      return $this->intPaymentStatus;
    }

    /**
     * @param int $intPaymentStatus
     * @return APIOrderCreateOrderRequest
     */
    public function setIntPaymentStatus($intPaymentStatus)
    {
      $this->intPaymentStatus = $intPaymentStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntDaysOfCredit()
    {
      return $this->intDaysOfCredit;
    }

    /**
     * @param int $intDaysOfCredit
     * @return APIOrderCreateOrderRequest
     */
    public function setIntDaysOfCredit($intDaysOfCredit)
    {
      $this->intDaysOfCredit = $intDaysOfCredit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoTriggers()
    {
      return $this->doTriggers;
    }

    /**
     * @param boolean $doTriggers
     * @return APIOrderCreateOrderRequest
     */
    public function setDoTriggers($doTriggers)
    {
      $this->doTriggers = $doTriggers;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingService()
    {
      return $this->ShippingService;
    }

    /**
     * @param string $ShippingService
     * @return APIOrderCreateOrderRequest
     */
    public function setShippingService($ShippingService)
    {
      $this->ShippingService = $ShippingService;
      return $this;
    }

    /**
     * @return int
     */
    public function getShippingRuleID()
    {
      return $this->ShippingRuleID;
    }

    /**
     * @param int $ShippingRuleID
     * @return APIOrderCreateOrderRequest
     */
    public function setShippingRuleID($ShippingRuleID)
    {
      $this->ShippingRuleID = $ShippingRuleID;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalReference()
    {
      return $this->ExternalReference;
    }

    /**
     * @param string $ExternalReference
     * @return APIOrderCreateOrderRequest
     */
    public function setExternalReference($ExternalReference)
    {
      $this->ExternalReference = $ExternalReference;
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
     * @return APIOrderCreateOrderRequest
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return APIOrderBillingAddress
     */
    public function getBillingAddress()
    {
      return $this->BillingAddress;
    }

    /**
     * @param APIOrderBillingAddress $BillingAddress
     * @return APIOrderCreateOrderRequest
     */
    public function setBillingAddress($BillingAddress)
    {
      $this->BillingAddress = $BillingAddress;
      return $this;
    }

    /**
     * @return APIOrderShippingAddress
     */
    public function getShippingAddress()
    {
      return $this->ShippingAddress;
    }

    /**
     * @param APIOrderShippingAddress $ShippingAddress
     * @return APIOrderCreateOrderRequest
     */
    public function setShippingAddress($ShippingAddress)
    {
      $this->ShippingAddress = $ShippingAddress;
      return $this;
    }

    /**
     * @return ArrayOfAPIOrderItem
     */
    public function getOrderItems()
    {
      return $this->orderItems;
    }

    /**
     * @param ArrayOfAPIOrderItem $orderItems
     * @return APIOrderCreateOrderRequest
     */
    public function setOrderItems($orderItems)
    {
      $this->orderItems = $orderItems;
      return $this;
    }

}
