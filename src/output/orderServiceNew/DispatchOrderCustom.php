<?php

class DispatchOrderCustom
{

    /**
     * @var RequestObjectOfAPIDispatchOrderRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIDispatchOrderRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIDispatchOrderRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIDispatchOrderRequest $request
     * @return DispatchOrder
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
