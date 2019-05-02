<?php

class setHeightResponse
{

    /**
     * @var ResponseObjectOfBoolean $setHeightResult
     */
    protected $setHeightResult = null;

    /**
     * @param ResponseObjectOfBoolean $setHeightResult
     */
    public function __construct($setHeightResult)
    {
      $this->setHeightResult = $setHeightResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetHeightResult()
    {
      return $this->setHeightResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setHeightResult
     * @return setHeightResponse
     */
    public function setSetHeightResult($setHeightResult)
    {
      $this->setHeightResult = $setHeightResult;
      return $this;
    }

}
