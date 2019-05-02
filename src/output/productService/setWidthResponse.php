<?php

class setWidthResponse
{

    /**
     * @var ResponseObjectOfBoolean $setWidthResult
     */
    protected $setWidthResult = null;

    /**
     * @param ResponseObjectOfBoolean $setWidthResult
     */
    public function __construct($setWidthResult)
    {
      $this->setWidthResult = $setWidthResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetWidthResult()
    {
      return $this->setWidthResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setWidthResult
     * @return setWidthResponse
     */
    public function setSetWidthResult($setWidthResult)
    {
      $this->setWidthResult = $setWidthResult;
      return $this;
    }

}
