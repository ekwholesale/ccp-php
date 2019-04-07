<?php

class setDescriptionResponse
{

    /**
     * @var ResponseObjectOfBoolean $setDescriptionResult
     */
    protected $setDescriptionResult = null;

    /**
     * @param ResponseObjectOfBoolean $setDescriptionResult
     */
    public function __construct($setDescriptionResult)
    {
      $this->setDescriptionResult = $setDescriptionResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetDescriptionResult()
    {
      return $this->setDescriptionResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setDescriptionResult
     * @return setDescriptionResponse
     */
    public function setSetDescriptionResult($setDescriptionResult)
    {
      $this->setDescriptionResult = $setDescriptionResult;
      return $this;
    }

}
