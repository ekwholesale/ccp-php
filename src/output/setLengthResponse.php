<?php

class setLengthResponse
{

    /**
     * @var ResponseObjectOfBoolean $setLengthResult
     */
    protected $setLengthResult = null;

    /**
     * @param ResponseObjectOfBoolean $setLengthResult
     */
    public function __construct($setLengthResult)
    {
      $this->setLengthResult = $setLengthResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetLengthResult()
    {
      return $this->setLengthResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setLengthResult
     * @return setLengthResponse
     */
    public function setSetLengthResult($setLengthResult)
    {
      $this->setLengthResult = $setLengthResult;
      return $this;
    }

}
