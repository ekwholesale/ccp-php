<?php

class deleteAdditionalBarcode
{

    /**
     * @var RequestObjectOfAPIProductDeleteAdditionalBarcodeRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIProductDeleteAdditionalBarcodeRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIProductDeleteAdditionalBarcodeRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIProductDeleteAdditionalBarcodeRequest $request
     * @return deleteAdditionalBarcode
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
