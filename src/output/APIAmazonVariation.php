<?php

class APIAmazonVariation
{

    /**
     * @var int $AmazonVariationID
     */
    protected $AmazonVariationID = null;

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
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var string $ASIN
     */
    protected $ASIN = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @param int $AmazonVariationID
     * @param int $VariationID
     * @param int $Stock
     */
    public function __construct($AmazonVariationID, $VariationID, $Stock)
    {
      $this->AmazonVariationID = $AmazonVariationID;
      $this->VariationID = $VariationID;
      $this->Stock = $Stock;
    }

    /**
     * @return int
     */
    public function getAmazonVariationID()
    {
      return $this->AmazonVariationID;
    }

    /**
     * @param int $AmazonVariationID
     * @return APIAmazonVariation
     */
    public function setAmazonVariationID($AmazonVariationID)
    {
      $this->AmazonVariationID = $AmazonVariationID;
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
     * @return APIAmazonVariation
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
     * @return APIAmazonVariation
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
     * @return APIAmazonVariation
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
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
     * @return APIAmazonVariation
     */
    public function setBarcode($Barcode)
    {
      $this->Barcode = $Barcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getASIN()
    {
      return $this->ASIN;
    }

    /**
     * @param string $ASIN
     * @return APIAmazonVariation
     */
    public function setASIN($ASIN)
    {
      $this->ASIN = $ASIN;
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
     * @return APIAmazonVariation
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

}
