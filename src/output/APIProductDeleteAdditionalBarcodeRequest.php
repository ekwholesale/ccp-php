<?php

class APIProductDeleteAdditionalBarcodeRequest
{

    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var string $barcode
     */
    protected $barcode = null;

    /**
     * @param int $productId
     */
    public function __construct($productId)
    {
      $this->productId = $productId;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->productId;
    }

    /**
     * @param int $productId
     * @return APIProductDeleteAdditionalBarcodeRequest
     */
    public function setProductId($productId)
    {
      $this->productId = $productId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
      return $this->barcode;
    }

    /**
     * @param string $barcode
     * @return APIProductDeleteAdditionalBarcodeRequest
     */
    public function setBarcode($barcode)
    {
      $this->barcode = $barcode;
      return $this;
    }

}
