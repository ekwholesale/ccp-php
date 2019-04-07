<?php

class getProducts
{

    /**
     * @var RequestObjectOfAPIProductGetProductListRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIProductGetProductListRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIProductGetProductListRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIProductGetProductListRequest $request
     * @return getProducts
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
