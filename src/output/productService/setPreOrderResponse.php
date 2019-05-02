<?php

class setPreOrderResponse
{

    /**
     * @var ResponseObjectOfBoolean $setPreOrderResult
     */
    protected $setPreOrderResult = null;

    /**
     * @param ResponseObjectOfBoolean $setPreOrderResult
     */
    public function __construct($setPreOrderResult)
    {
      $this->setPreOrderResult = $setPreOrderResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetPreOrderResult()
    {
      return $this->setPreOrderResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setPreOrderResult
     * @return setPreOrderResponse
     */
    public function setSetPreOrderResult($setPreOrderResult)
    {
      $this->setPreOrderResult = $setPreOrderResult;
      return $this;
    }

}
