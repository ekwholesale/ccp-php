<?php

class setStatusIDResponse
{

    /**
     * @var ResponseObjectOfBoolean $setStatusIDResult
     */
    protected $setStatusIDResult = null;

    /**
     * @param ResponseObjectOfBoolean $setStatusIDResult
     */
    public function __construct($setStatusIDResult)
    {
      $this->setStatusIDResult = $setStatusIDResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetStatusIDResult()
    {
      return $this->setStatusIDResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setStatusIDResult
     * @return setStatusIDResponse
     */
    public function setSetStatusIDResult($setStatusIDResult)
    {
      $this->setStatusIDResult = $setStatusIDResult;
      return $this;
    }

}
