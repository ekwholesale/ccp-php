<?php

class setExternalProductIdResponse
{

    /**
     * @var ResponseObjectOfBoolean $setExternalProductIdResult
     */
    protected $setExternalProductIdResult = null;

    /**
     * @param ResponseObjectOfBoolean $setExternalProductIdResult
     */
    public function __construct($setExternalProductIdResult)
    {
      $this->setExternalProductIdResult = $setExternalProductIdResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetExternalProductIdResult()
    {
      return $this->setExternalProductIdResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setExternalProductIdResult
     * @return setExternalProductIdResponse
     */
    public function setSetExternalProductIdResult($setExternalProductIdResult)
    {
      $this->setExternalProductIdResult = $setExternalProductIdResult;
      return $this;
    }

}
