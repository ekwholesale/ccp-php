<?php

class setVatRateIDResponse
{

    /**
     * @var ResponseObjectOfBoolean $setVatRateIDResult
     */
    protected $setVatRateIDResult = null;

    /**
     * @param ResponseObjectOfBoolean $setVatRateIDResult
     */
    public function __construct($setVatRateIDResult)
    {
      $this->setVatRateIDResult = $setVatRateIDResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetVatRateIDResult()
    {
      return $this->setVatRateIDResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setVatRateIDResult
     * @return setVatRateIDResponse
     */
    public function setSetVatRateIDResult($setVatRateIDResult)
    {
      $this->setVatRateIDResult = $setVatRateIDResult;
      return $this;
    }

}
