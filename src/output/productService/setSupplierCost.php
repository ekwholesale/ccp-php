<?php

class setSupplierCost
{

    /**
     * @var RequestObjectOfAPIProductSupplierLink $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIProductSupplierLink $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIProductSupplierLink
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIProductSupplierLink $request
     * @return setSupplierCost
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
