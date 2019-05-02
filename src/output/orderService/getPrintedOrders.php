<?php

class getPrintedOrders
{

    /**
     * @var RequestObjectOfApiOrderQueryRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfApiOrderQueryRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfApiOrderQueryRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfApiOrderQueryRequest $request
     * @return getPrintedOrders
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
