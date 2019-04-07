<?php

class setStockLevel
{

    /**
     * @var RequestObjectOfAPIProductStockTransaction $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIProductStockTransaction $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIProductStockTransaction
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIProductStockTransaction $request
     * @return setStockLevel
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
