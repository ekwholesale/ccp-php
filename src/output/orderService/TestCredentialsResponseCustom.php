<?php

class TestCredentialsResponseCustom
{

    /**
     * @var ResponseObjectOfBoolean $TestCredentialsResult
     */
    protected $TestCredentialsResult = null;

    /**
     * @param ResponseObjectOfBoolean $TestCredentialsResult
     */
    public function __construct($TestCredentialsResult)
    {
      $this->TestCredentialsResult = $TestCredentialsResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getTestCredentialsResult()
    {
      return $this->TestCredentialsResult;
    }

    /**
     * @param ResponseObjectOfBoolean $TestCredentialsResult
     * @return TestCredentialsResponse
     */
    public function setTestCredentialsResult($TestCredentialsResult)
    {
      $this->TestCredentialsResult = $TestCredentialsResult;
      return $this;
    }

}
