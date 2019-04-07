<?php

class deleteAdditionalBarcodeResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $deleteAdditionalBarcodeResult
     */
    protected $deleteAdditionalBarcodeResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $deleteAdditionalBarcodeResult
     */
    public function __construct($deleteAdditionalBarcodeResult)
    {
      $this->deleteAdditionalBarcodeResult = $deleteAdditionalBarcodeResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getDeleteAdditionalBarcodeResult()
    {
      return $this->deleteAdditionalBarcodeResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $deleteAdditionalBarcodeResult
     * @return deleteAdditionalBarcodeResponse
     */
    public function setDeleteAdditionalBarcodeResult($deleteAdditionalBarcodeResult)
    {
      $this->deleteAdditionalBarcodeResult = $deleteAdditionalBarcodeResult;
      return $this;
    }

}
