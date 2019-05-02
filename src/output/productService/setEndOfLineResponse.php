<?php

class setEndOfLineResponse
{

    /**
     * @var ResponseObjectOfBoolean $setEndOfLineResult
     */
    protected $setEndOfLineResult = null;

    /**
     * @param ResponseObjectOfBoolean $setEndOfLineResult
     */
    public function __construct($setEndOfLineResult)
    {
      $this->setEndOfLineResult = $setEndOfLineResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetEndOfLineResult()
    {
      return $this->setEndOfLineResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setEndOfLineResult
     * @return setEndOfLineResponse
     */
    public function setSetEndOfLineResult($setEndOfLineResult)
    {
      $this->setEndOfLineResult = $setEndOfLineResult;
      return $this;
    }

}
