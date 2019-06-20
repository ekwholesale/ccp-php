<?php

class UpdateCustomerResponse
{

    /**
     * @var ResponseObjectOfAPICustomer $UpdateCustomerResult
     */
    protected $UpdateCustomerResult = null;

    /**
     * @param ResponseObjectOfAPICustomer $UpdateCustomerResult
     */
    public function __construct($UpdateCustomerResult)
    {
      $this->UpdateCustomerResult = $UpdateCustomerResult;
    }

    /**
     * @return ResponseObjectOfAPICustomer
     */
    public function getUpdateCustomerResult()
    {
      return $this->UpdateCustomerResult;
    }

    /**
     * @param ResponseObjectOfAPICustomer $UpdateCustomerResult
     * @return UpdateCustomerResponse
     */
    public function setUpdateCustomerResult($UpdateCustomerResult)
    {
      $this->UpdateCustomerResult = $UpdateCustomerResult;
      return $this;
    }

}
