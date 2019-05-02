<?php

class createOrder
{

    /**
     * @var RequestObjectOfAPIOrderCreateOrderRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIOrderCreateOrderRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIOrderCreateOrderRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIOrderCreateOrderRequest $request
     * @return createOrder
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
