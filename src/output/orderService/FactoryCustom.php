<?php

class FactoryCustom
{

    /**
     * @var string $SupplierSKU
     */
    protected $SupplierSKU = null;

    /**
     * @var float $SupplierPrice
     */
    protected $SupplierPrice = null;

    /**
     * @var ArrayOfProductFactoryLink $ProductLinks
     */
    protected $ProductLinks = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $DaysFromOrderToCompletion
     */
    protected $DaysFromOrderToCompletion = null;

    /**
     * @var int $DaysFromCompletionToDelivery
     */
    protected $DaysFromCompletionToDelivery = null;

    /**
     * @var string $DeliveryMethod
     */
    protected $DeliveryMethod = null;

    /**
     * @var string $SageAccountID
     */
    protected $SageAccountID = null;

    /**
     * @var int $SageVATCode
     */
    protected $SageVATCode = null;

    /**
     * @var string $CurrencySymbol
     */
    protected $CurrencySymbol = null;

    /**
     * @var float $ExchangeRate
     */
    protected $ExchangeRate = null;

    /**
     * @var string $NominalCodeID
     */
    protected $NominalCodeID = null;

    /**
     * @var int $LoginID
     */
    protected $LoginID = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var StatusID $StatusIDEnum
     */
    protected $StatusIDEnum = null;

    /**
     * @var int $FactoryPOType
     */
    protected $FactoryPOType = null;

    /**
     * @var string $AccountReference
     */
    protected $AccountReference = null;

    /**
     * @param float $SupplierPrice
     * @param int $ID
     * @param int $BrandID
     * @param int $DaysFromOrderToCompletion
     * @param int $DaysFromCompletionToDelivery
     * @param int $SageVATCode
     * @param float $ExchangeRate
     * @param int $LoginID
     * @param int $StatusID
     * @param StatusID $StatusIDEnum
     * @param int $FactoryPOType
     */
    public function __construct($SupplierPrice, $ID, $BrandID, $DaysFromOrderToCompletion, $DaysFromCompletionToDelivery, $SageVATCode, $ExchangeRate, $LoginID, $StatusID, $StatusIDEnum, $FactoryPOType)
    {
      $this->SupplierPrice = $SupplierPrice;
      $this->ID = $ID;
      $this->BrandID = $BrandID;
      $this->DaysFromOrderToCompletion = $DaysFromOrderToCompletion;
      $this->DaysFromCompletionToDelivery = $DaysFromCompletionToDelivery;
      $this->SageVATCode = $SageVATCode;
      $this->ExchangeRate = $ExchangeRate;
      $this->LoginID = $LoginID;
      $this->StatusID = $StatusID;
      $this->StatusIDEnum = $StatusIDEnum;
      $this->FactoryPOType = $FactoryPOType;
    }

    /**
     * @return string
     */
    public function getSupplierSKU()
    {
      return $this->SupplierSKU;
    }

    /**
     * @param string $SupplierSKU
     * @return Factory
     */
    public function setSupplierSKU($SupplierSKU)
    {
      $this->SupplierSKU = $SupplierSKU;
      return $this;
    }

    /**
     * @return float
     */
    public function getSupplierPrice()
    {
      return $this->SupplierPrice;
    }

    /**
     * @param float $SupplierPrice
     * @return Factory
     */
    public function setSupplierPrice($SupplierPrice)
    {
      $this->SupplierPrice = $SupplierPrice;
      return $this;
    }

    /**
     * @return ArrayOfProductFactoryLink
     */
    public function getProductLinks()
    {
      return $this->ProductLinks;
    }

    /**
     * @param ArrayOfProductFactoryLink $ProductLinks
     * @return Factory
     */
    public function setProductLinks($ProductLinks)
    {
      $this->ProductLinks = $ProductLinks;
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
     * @return Factory
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
     * @return Factory
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return Factory
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysFromOrderToCompletion()
    {
      return $this->DaysFromOrderToCompletion;
    }

    /**
     * @param int $DaysFromOrderToCompletion
     * @return Factory
     */
    public function setDaysFromOrderToCompletion($DaysFromOrderToCompletion)
    {
      $this->DaysFromOrderToCompletion = $DaysFromOrderToCompletion;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysFromCompletionToDelivery()
    {
      return $this->DaysFromCompletionToDelivery;
    }

    /**
     * @param int $DaysFromCompletionToDelivery
     * @return Factory
     */
    public function setDaysFromCompletionToDelivery($DaysFromCompletionToDelivery)
    {
      $this->DaysFromCompletionToDelivery = $DaysFromCompletionToDelivery;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryMethod()
    {
      return $this->DeliveryMethod;
    }

    /**
     * @param string $DeliveryMethod
     * @return Factory
     */
    public function setDeliveryMethod($DeliveryMethod)
    {
      $this->DeliveryMethod = $DeliveryMethod;
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
     * @return Factory
     */
    public function setSageAccountID($SageAccountID)
    {
      $this->SageAccountID = $SageAccountID;
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
     * @return Factory
     */
    public function setSageVATCode($SageVATCode)
    {
      $this->SageVATCode = $SageVATCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
      return $this->CurrencySymbol;
    }

    /**
     * @param string $CurrencySymbol
     * @return Factory
     */
    public function setCurrencySymbol($CurrencySymbol)
    {
      $this->CurrencySymbol = $CurrencySymbol;
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
     * @return Factory
     */
    public function setExchangeRate($ExchangeRate)
    {
      $this->ExchangeRate = $ExchangeRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getNominalCodeID()
    {
      return $this->NominalCodeID;
    }

    /**
     * @param string $NominalCodeID
     * @return Factory
     */
    public function setNominalCodeID($NominalCodeID)
    {
      $this->NominalCodeID = $NominalCodeID;
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
     * @return Factory
     */
    public function setLoginID($LoginID)
    {
      $this->LoginID = $LoginID;
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
     * @return Factory
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
     * @return Factory
     */
    public function setStatusIDEnum($StatusIDEnum)
    {
      $this->StatusIDEnum = $StatusIDEnum;
      return $this;
    }

    /**
     * @return int
     */
    public function getFactoryPOType()
    {
      return $this->FactoryPOType;
    }

    /**
     * @param int $FactoryPOType
     * @return Factory
     */
    public function setFactoryPOType($FactoryPOType)
    {
      $this->FactoryPOType = $FactoryPOType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountReference()
    {
      return $this->AccountReference;
    }

    /**
     * @param string $AccountReference
     * @return Factory
     */
    public function setAccountReference($AccountReference)
    {
      $this->AccountReference = $AccountReference;
      return $this;
    }

}
