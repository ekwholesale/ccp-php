<?php

class Customer
{

    /**
     * @var CustomerType $TypeEnum
     */
    protected $TypeEnum = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $TradingName
     */
    protected $TradingName = null;

    /**
     * @var string $VATNumber
     */
    protected $VATNumber = null;

    /**
     * @var int $SageVATCode
     */
    protected $SageVATCode = null;

    /**
     * @var float $CreditLimit
     */
    protected $CreditLimit = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var int $AgentID
     */
    protected $AgentID = null;

    /**
     * @var string $SageAccountID
     */
    protected $SageAccountID = null;

    /**
     * @var int $SageStatus
     */
    protected $SageStatus = null;

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

    /**
     * @var int $PaymentTermID
     */
    protected $PaymentTermID = null;

    /**
     * @var int $BarCodeGenerator
     */
    protected $BarCodeGenerator = null;

    /**
     * @var int $LoginID
     */
    protected $LoginID = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $ParentID
     */
    protected $ParentID = null;

    /**
     * @var string $SystemStatus
     */
    protected $SystemStatus = null;

    /**
     * @var int $Type
     */
    protected $Type = null;

    /**
     * @var int $EcomID
     */
    protected $EcomID = null;

    /**
     * @var int $SpecialDeliveryInstructions
     */
    protected $SpecialDeliveryInstructions = null;

    /**
     * @var string $SpecDelInstrNote
     */
    protected $SpecDelInstrNote = null;

    /**
     * @var int $OnWatchList
     */
    protected $OnWatchList = null;

    /**
     * @var string $WatchListReason
     */
    protected $WatchListReason = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var IStatusID $StatusIDEnum
     */
    protected $StatusIDEnum = null;

    /**
     * @var string $QuickBooksId
     */
    protected $QuickBooksId = null;

    /**
     * @param CustomerType $TypeEnum
     * @param int $ID
     * @param int $SageVATCode
     * @param int $PaymentTermID
     * @param int $BarCodeGenerator
     * @param int $LoginID
     * @param int $BrandID
     * @param int $ParentID
     * @param int $Type
     * @param int $EcomID
     * @param int $SpecialDeliveryInstructions
     * @param int $OnWatchList
     * @param int $StatusID
     * @param IStatusID $StatusIDEnum
     */
    public function __construct($TypeEnum, $ID, $SageVATCode, $PaymentTermID, $BarCodeGenerator, $LoginID, $BrandID, $ParentID, $Type, $EcomID, $SpecialDeliveryInstructions, $OnWatchList, $StatusID, $StatusIDEnum)
    {
      $this->TypeEnum = $TypeEnum;
      $this->ID = $ID;
      $this->SageVATCode = $SageVATCode;
      $this->PaymentTermID = $PaymentTermID;
      $this->BarCodeGenerator = $BarCodeGenerator;
      $this->LoginID = $LoginID;
      $this->BrandID = $BrandID;
      $this->ParentID = $ParentID;
      $this->Type = $Type;
      $this->EcomID = $EcomID;
      $this->SpecialDeliveryInstructions = $SpecialDeliveryInstructions;
      $this->OnWatchList = $OnWatchList;
      $this->StatusID = $StatusID;
      $this->StatusIDEnum = $StatusIDEnum;
    }

    /**
     * @return CustomerType
     */
    public function getTypeEnum()
    {
      return $this->TypeEnum;
    }

    /**
     * @param CustomerType $TypeEnum
     * @return Customer
     */
    public function setTypeEnum($TypeEnum)
    {
      $this->TypeEnum = $TypeEnum;
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
     * @return Customer
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return Customer
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
     * @return Customer
     */
    public function setTradingName($TradingName)
    {
      $this->TradingName = $TradingName;
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
     * @return Customer
     */
    public function setVATNumber($VATNumber)
    {
      $this->VATNumber = $VATNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getSageVATCode()
    {
      return $this->SageVATCode;
    }

    /**
     * @param int $SageVATCode
     * @return Customer
     */
    public function setSageVATCode($SageVATCode)
    {
      $this->SageVATCode = $SageVATCode;
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
     * @return Customer
     */
    public function setCreditLimit($CreditLimit)
    {
      $this->CreditLimit = $CreditLimit;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return Customer
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
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
     * @return Customer
     */
    public function setAgentID($AgentID)
    {
      $this->AgentID = $AgentID;
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
     * @return Customer
     */
    public function setSageAccountID($SageAccountID)
    {
      $this->SageAccountID = $SageAccountID;
      return $this;
    }

    /**
     * @return int
     */
    public function getSageStatus()
    {
      return $this->SageStatus;
    }

    /**
     * @param int $SageStatus
     * @return Customer
     */
    public function setSageStatus($SageStatus)
    {
      $this->SageStatus = $SageStatus;
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
     * @return Customer
     */
    public function setSalesChannelID($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentTermID()
    {
      return $this->PaymentTermID;
    }

    /**
     * @param int $PaymentTermID
     * @return Customer
     */
    public function setPaymentTermID($PaymentTermID)
    {
      $this->PaymentTermID = $PaymentTermID;
      return $this;
    }

    /**
     * @return int
     */
    public function getBarCodeGenerator()
    {
      return $this->BarCodeGenerator;
    }

    /**
     * @param int $BarCodeGenerator
     * @return Customer
     */
    public function setBarCodeGenerator($BarCodeGenerator)
    {
      $this->BarCodeGenerator = $BarCodeGenerator;
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
     * @return Customer
     */
    public function setLoginID($LoginID)
    {
      $this->LoginID = $LoginID;
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
     * @return Customer
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentID()
    {
      return $this->ParentID;
    }

    /**
     * @param int $ParentID
     * @return Customer
     */
    public function setParentID($ParentID)
    {
      $this->ParentID = $ParentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSystemStatus()
    {
      return $this->SystemStatus;
    }

    /**
     * @param string $SystemStatus
     * @return Customer
     */
    public function setSystemStatus($SystemStatus)
    {
      $this->SystemStatus = $SystemStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param int $Type
     * @return Customer
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getEcomID()
    {
      return $this->EcomID;
    }

    /**
     * @param int $EcomID
     * @return Customer
     */
    public function setEcomID($EcomID)
    {
      $this->EcomID = $EcomID;
      return $this;
    }

    /**
     * @return int
     */
    public function getSpecialDeliveryInstructions()
    {
      return $this->SpecialDeliveryInstructions;
    }

    /**
     * @param int $SpecialDeliveryInstructions
     * @return Customer
     */
    public function setSpecialDeliveryInstructions($SpecialDeliveryInstructions)
    {
      $this->SpecialDeliveryInstructions = $SpecialDeliveryInstructions;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecDelInstrNote()
    {
      return $this->SpecDelInstrNote;
    }

    /**
     * @param string $SpecDelInstrNote
     * @return Customer
     */
    public function setSpecDelInstrNote($SpecDelInstrNote)
    {
      $this->SpecDelInstrNote = $SpecDelInstrNote;
      return $this;
    }

    /**
     * @return int
     */
    public function getOnWatchList()
    {
      return $this->OnWatchList;
    }

    /**
     * @param int $OnWatchList
     * @return Customer
     */
    public function setOnWatchList($OnWatchList)
    {
      $this->OnWatchList = $OnWatchList;
      return $this;
    }

    /**
     * @return string
     */
    public function getWatchListReason()
    {
      return $this->WatchListReason;
    }

    /**
     * @param string $WatchListReason
     * @return Customer
     */
    public function setWatchListReason($WatchListReason)
    {
      $this->WatchListReason = $WatchListReason;
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
     * @return Customer
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
     * @return Customer
     */
    public function setStatusIDEnum($StatusIDEnum)
    {
      $this->StatusIDEnum = $StatusIDEnum;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuickBooksId()
    {
      return $this->QuickBooksId;
    }

    /**
     * @param string $QuickBooksId
     * @return Customer
     */
    public function setQuickBooksId($QuickBooksId)
    {
      $this->QuickBooksId = $QuickBooksId;
      return $this;
    }

}
