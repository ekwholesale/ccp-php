<?php

class TestCredentialsResponse
{

    /**
     * @var ResponseObjectOfboolean $TestCredentialsResult
     */
    protected $TestCredentialsResult = null;

    /**
     * @param ResponseObjectOfboolean $TestCredentialsResult
     */
    public function __construct($TestCredentialsResult)
    {
      $this->TestCredentialsResult = $TestCredentialsResult;
    }

    /**
     * @return ResponseObjectOfboolean
     */
    public function getTestCredentialsResult()
    {
      return $this->TestCredentialsResult;
    }

    /**
     * @param ResponseObjectOfboolean $TestCredentialsResult
     * @return TestCredentialsResponse
     */
    public function setTestCredentialsResult($TestCredentialsResult)
    {
      $this->TestCredentialsResult = $TestCredentialsResult;
      return $this;
    }

}
