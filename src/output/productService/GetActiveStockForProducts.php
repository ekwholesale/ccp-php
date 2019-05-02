<?php

class GetActiveStockForProducts
{

    /**
     * @var RequestObjectOfListOfString $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfListOfString $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfListOfString
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfListOfString $request
     * @return GetActiveStockForProducts
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
