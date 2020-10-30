<?php

class TestCredentialsCustom3
{

    /**
     * @var RequestObjectOfString $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfString $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfString
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfString $request
     * @return TestCredentials
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
