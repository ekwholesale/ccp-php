<?php

class TestCredentials
{

    /**
     * @var RequestObjectOfstring $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfstring $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfstring
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfstring $request
     * @return TestCredentials
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
