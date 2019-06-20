<?php

class APICustomerList
{

    /**
     * @var ArrayOfAPICustomer $customers
     */
    protected $customers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfAPICustomer
     */
    public function getCustomers()
    {
      return $this->customers;
    }

    /**
     * @param ArrayOfAPICustomer $customers
     * @return APICustomerList
     */
    public function setCustomers($customers)
    {
      $this->customers = $customers;
      return $this;
    }

}
