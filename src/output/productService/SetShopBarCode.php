<?php

class SetShopBarCode
{

    /**
     * @var RequestObjectOfAPISetShoBarCodeRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPISetShoBarCodeRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPISetShoBarCodeRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPISetShoBarCodeRequest $request
     * @return SetShopBarCode
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
