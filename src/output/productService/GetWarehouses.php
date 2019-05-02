<?php

class GetWarehouses
{

    /**
     * @var RequestObjectOfInt32 $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfInt32 $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfInt32
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfInt32 $request
     * @return GetWarehouses
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
