<?php

class getProductByBarcodeResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $getProductByBarcodeResult
     */
    protected $getProductByBarcodeResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $getProductByBarcodeResult
     */
    public function __construct($getProductByBarcodeResult)
    {
      $this->getProductByBarcodeResult = $getProductByBarcodeResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getProductByBarcodeResult()
    {
      return $this->getProductByBarcodeResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $getProductByBarcodeResult
     * @return getProductByBarcodeResponse
     */
    public function setGetProductByBarcodeResult($getProductByBarcodeResult)
    {
      $this->getProductByBarcodeResult = $getProductByBarcodeResult;
      return $this;
    }

}
