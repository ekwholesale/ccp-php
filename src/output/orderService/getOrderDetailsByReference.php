<?php

class getOrderDetailsByReference
{

    /**
     * @var RequestObjectOfArrayOfString $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfArrayOfString $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfArrayOfString
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfArrayOfString $request
     * @return getOrderDetailsByReference
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
