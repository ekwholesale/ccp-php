<?php

class AddCustomer
{

    /**
     * @var RequestObjectOfAPICustomerAddCustomerRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPICustomerAddCustomerRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPICustomerAddCustomerRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPICustomerAddCustomerRequest $request
     * @return AddCustomer
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
