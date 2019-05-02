<?php

class getOrderDetailsByIdResponse
{

    /**
     * @var ResponseObjectOfOrderDetail $getOrderDetailsByIdResult
     */
    protected $getOrderDetailsByIdResult = null;

    /**
     * @param ResponseObjectOfOrderDetail $getOrderDetailsByIdResult
     */
    public function __construct($getOrderDetailsByIdResult)
    {
      $this->getOrderDetailsByIdResult = $getOrderDetailsByIdResult;
    }

    /**
     * @return ResponseObjectOfOrderDetail
     */
    public function getGetOrderDetailsByIdResult()
    {
      return $this->getOrderDetailsByIdResult;
    }

    /**
     * @param ResponseObjectOfOrderDetail $getOrderDetailsByIdResult
     * @return getOrderDetailsByIdResponse
     */
    public function setGetOrderDetailsByIdResult($getOrderDetailsByIdResult)
    {
      $this->getOrderDetailsByIdResult = $getOrderDetailsByIdResult;
      return $this;
    }

}
