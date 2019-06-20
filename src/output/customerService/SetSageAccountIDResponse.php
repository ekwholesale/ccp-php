<?php

class SetSageAccountIDResponse
{

    /**
     * @var ResponseObjectOfAPICustomer $SetSageAccountIDResult
     */
    protected $SetSageAccountIDResult = null;

    /**
     * @param ResponseObjectOfAPICustomer $SetSageAccountIDResult
     */
    public function __construct($SetSageAccountIDResult)
    {
      $this->SetSageAccountIDResult = $SetSageAccountIDResult;
    }

    /**
     * @return ResponseObjectOfAPICustomer
     */
    public function getSetSageAccountIDResult()
    {
      return $this->SetSageAccountIDResult;
    }

    /**
     * @param ResponseObjectOfAPICustomer $SetSageAccountIDResult
     * @return SetSageAccountIDResponse
     */
    public function setSetSageAccountIDResult($SetSageAccountIDResult)
    {
      $this->SetSageAccountIDResult = $SetSageAccountIDResult;
      return $this;
    }

}
