<?php

class setPriceResponse
{

    /**
     * @var ResponseObjectOfBoolean $setPriceResult
     */
    protected $setPriceResult = null;

    /**
     * @param ResponseObjectOfBoolean $setPriceResult
     */
    public function __construct($setPriceResult)
    {
      $this->setPriceResult = $setPriceResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetPriceResult()
    {
      return $this->setPriceResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setPriceResult
     * @return setPriceResponse
     */
    public function setSetPriceResult($setPriceResult)
    {
      $this->setPriceResult = $setPriceResult;
      return $this;
    }

}
