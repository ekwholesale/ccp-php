<?php

class GetDataResponse
{

    /**
     * @var string $GetDataResult
     */
    protected $GetDataResult = null;

    /**
     * @param string $GetDataResult
     */
    public function __construct($GetDataResult)
    {
      $this->GetDataResult = $GetDataResult;
    }

    /**
     * @return string
     */
    public function getGetDataResult()
    {
      return $this->GetDataResult;
    }

    /**
     * @param string $GetDataResult
     * @return GetDataResponse
     */
    public function setGetDataResult($GetDataResult)
    {
      $this->GetDataResult = $GetDataResult;
      return $this;
    }

}
