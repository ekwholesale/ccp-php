<?php

class APISetShoBarCodeRequest
{

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @param int $SalesChannelID
     */
    public function __construct($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
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
     * @return APISetShoBarCodeRequest
     */
    public function setSalesChannelID($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
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
     * @return APISetShoBarCodeRequest
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
     * @return APISetShoBarCodeRequest
     */
    public function setBarcode($Barcode)
    {
      $this->Barcode = $Barcode;
      return $this;
    }

}
