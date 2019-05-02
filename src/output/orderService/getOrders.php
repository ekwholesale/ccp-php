<?php

class getOrders
{

    /**
     * @var RequestObjectOfAPIGetOrdersRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIGetOrdersRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIGetOrdersRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIGetOrdersRequest $request
     * @return getOrders
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
