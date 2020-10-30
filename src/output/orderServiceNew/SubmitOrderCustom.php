<?php

class SubmitOrderCustom
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
     * @return SubmitOrder
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
