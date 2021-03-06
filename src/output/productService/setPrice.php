<?php

class setPrice
{

    /**
     * @var RequestObjectOfAPIProduct $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIProduct $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIProduct
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIProduct $request
     * @return setPrice
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
