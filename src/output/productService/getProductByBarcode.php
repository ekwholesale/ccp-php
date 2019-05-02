<?php

class getProductByBarcode
{

    /**
     * @var RequestObjectOfString $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfString $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfString
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfString $request
     * @return getProductByBarcode
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
