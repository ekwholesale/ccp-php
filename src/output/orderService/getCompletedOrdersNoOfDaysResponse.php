<?php

class getCompletedOrdersNoOfDaysResponse
{

    /**
     * @var ResponseObjectOfApiOrderQueryResponse $getCompletedOrdersNoOfDaysResult
     */
    protected $getCompletedOrdersNoOfDaysResult = null;

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getCompletedOrdersNoOfDaysResult
     */
    public function __construct($getCompletedOrdersNoOfDaysResult)
    {
      $this->getCompletedOrdersNoOfDaysResult = $getCompletedOrdersNoOfDaysResult;
    }

    /**
     * @return ResponseObjectOfApiOrderQueryResponse
     */
    public function getGetCompletedOrdersNoOfDaysResult()
    {
      return $this->getCompletedOrdersNoOfDaysResult;
    }

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getCompletedOrdersNoOfDaysResult
     * @return getCompletedOrdersNoOfDaysResponse
     */
    public function setGetCompletedOrdersNoOfDaysResult($getCompletedOrdersNoOfDaysResult)
    {
      $this->getCompletedOrdersNoOfDaysResult = $getCompletedOrdersNoOfDaysResult;
      return $this;
    }

}
