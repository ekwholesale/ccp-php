<?php

class setPickStatus
{

    /**
     * @var RequestObjectOfAPISetOrderPickStatusRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPISetOrderPickStatusRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPISetOrderPickStatusRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPISetOrderPickStatusRequest $request
     * @return setPickStatus
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
