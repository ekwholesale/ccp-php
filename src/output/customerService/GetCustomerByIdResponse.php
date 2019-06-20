<?php

class GetCustomerByIdResponse
{

    /**
     * @var ResponseObjectOfAPICustomer $GetCustomerByIdResult
     */
    protected $GetCustomerByIdResult = null;

    /**
     * @param ResponseObjectOfAPICustomer $GetCustomerByIdResult
     */
    public function __construct($GetCustomerByIdResult)
    {
      $this->GetCustomerByIdResult = $GetCustomerByIdResult;
    }

    /**
     * @return ResponseObjectOfAPICustomer
     */
    public function getGetCustomerByIdResult()
    {
      return $this->GetCustomerByIdResult;
    }

    /**
     * @param ResponseObjectOfAPICustomer $GetCustomerByIdResult
     * @return GetCustomerByIdResponse
     */
    public function setGetCustomerByIdResult($GetCustomerByIdResult)
    {
      $this->GetCustomerByIdResult = $GetCustomerByIdResult;
      return $this;
    }

}
