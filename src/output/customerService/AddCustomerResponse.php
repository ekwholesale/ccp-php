<?php

class AddCustomerResponse
{

    /**
     * @var ResponseObjectOfAPICustomer $AddCustomerResult
     */
    protected $AddCustomerResult = null;

    /**
     * @param ResponseObjectOfAPICustomer $AddCustomerResult
     */
    public function __construct($AddCustomerResult)
    {
      $this->AddCustomerResult = $AddCustomerResult;
    }

    /**
     * @return ResponseObjectOfAPICustomer
     */
    public function getAddCustomerResult()
    {
      return $this->AddCustomerResult;
    }

    /**
     * @param ResponseObjectOfAPICustomer $AddCustomerResult
     * @return AddCustomerResponse
     */
    public function setAddCustomerResult($AddCustomerResult)
    {
      $this->AddCustomerResult = $AddCustomerResult;
      return $this;
    }

}
