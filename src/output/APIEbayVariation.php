<?php

class APIEbayVariation
{

    /**
     * @var int $EbayVariationID
     */
    protected $EbayVariationID = null;

    /**
     * @var int $VariationID
     */
    protected $VariationID = null;

    /**
     * @var int $Stock
     */
    protected $Stock = null;

    /**
     * @var string $Options
     */
    protected $Options = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var string $ListingID
     */
    protected $ListingID = null;

    /**
     * @param int $EbayVariationID
     * @param int $VariationID
     * @param int $Stock
     */
    public function __construct($EbayVariationID, $VariationID, $Stock)
    {
      $this->EbayVariationID = $EbayVariationID;
      $this->VariationID = $VariationID;
      $this->Stock = $Stock;
    }

    /**
     * @return int
     */
    public function getEbayVariationID()
    {
      return $this->EbayVariationID;
    }

    /**
     * @param int $EbayVariationID
     * @return APIEbayVariation
     */
    public function setEbayVariationID($EbayVariationID)
    {
      $this->EbayVariationID = $EbayVariationID;
      return $this;
    }

    /**
     * @return int
     */
    public function getVariationID()
    {
      return $this->VariationID;
    }

    /**
     * @param int $VariationID
     * @return APIEbayVariation
     */
    public function setVariationID($VariationID)
    {
      $this->VariationID = $VariationID;
      return $this;
    }

    /**
     * @return int
     */
    public function getStock()
    {
      return $this->Stock;
    }

    /**
     * @param int $Stock
     * @return APIEbayVariation
     */
    public function setStock($Stock)
    {
      $this->Stock = $Stock;
      return $this;
    }

    /**
     * @return string
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param string $Options
     * @return APIEbayVariation
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
      return $this;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param string $SKU
     * @return APIEbayVariation
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
      return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return APIEbayVariation
     */
    public function setBarcode($Barcode)
    {
      $this->Barcode = $Barcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getListingID()
    {
      return $this->ListingID;
    }

    /**
     * @param string $ListingID
     * @return APIEbayVariation
     */
    public function setListingID($ListingID)
    {
      $this->ListingID = $ListingID;
      return $this;
    }

}
