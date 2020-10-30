<?php

class APIInvoiceSummaryCustom
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $ProformaID
     */
    protected $ProformaID = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var float $NetAmount
     */
    protected $NetAmount = null;

    /**
     * @var float $VATAmount
     */
    protected $VATAmount = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $AmountPaid
     */
    protected $AmountPaid = null;

    /**
     * @param int $ID
     * @param int $ProformaID
     * @param int $BrandID
     * @param int $SalesChannelID
     * @param \DateTime $InvoiceDate
     * @param int $CustomerID
     * @param float $NetAmount
     * @param float $VATAmount
     * @param float $Amount
     * @param float $AmountPaid
     */
    public function __construct($ID, $ProformaID, $BrandID, $SalesChannelID, \DateTime $InvoiceDate, $CustomerID, $NetAmount, $VATAmount, $Amount, $AmountPaid)
    {
      $this->ID = $ID;
      $this->ProformaID = $ProformaID;
      $this->BrandID = $BrandID;
      $this->SalesChannelID = $SalesChannelID;
      $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
      $this->CustomerID = $CustomerID;
      $this->NetAmount = $NetAmount;
      $this->VATAmount = $VATAmount;
      $this->Amount = $Amount;
      $this->AmountPaid = $AmountPaid;
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
     * @return APIInvoiceSummary
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getProformaID()
    {
      return $this->ProformaID;
    }

    /**
     * @param int $ProformaID
     * @return APIInvoiceSummary
     */
    public function setProformaID($ProformaID)
    {
      $this->ProformaID = $ProformaID;
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
     * @return APIInvoiceSummary
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
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
     * @return APIInvoiceSummary
     */
    public function setSalesChannelID($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
      if ($this->InvoiceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InvoiceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InvoiceDate
     * @return APIInvoiceSummary
     */
    public function setInvoiceDate(\DateTime $InvoiceDate)
    {
      $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
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
     * @return APIInvoiceSummary
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetAmount()
    {
      return $this->NetAmount;
    }

    /**
     * @param float $NetAmount
     * @return APIInvoiceSummary
     */
    public function setNetAmount($NetAmount)
    {
      $this->NetAmount = $NetAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getVATAmount()
    {
      return $this->VATAmount;
    }

    /**
     * @param float $VATAmount
     * @return APIInvoiceSummary
     */
    public function setVATAmount($VATAmount)
    {
      $this->VATAmount = $VATAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return APIInvoiceSummary
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountPaid()
    {
      return $this->AmountPaid;
    }

    /**
     * @param float $AmountPaid
     * @return APIInvoiceSummary
     */
    public function setAmountPaid($AmountPaid)
    {
      $this->AmountPaid = $AmountPaid;
      return $this;
    }

}
