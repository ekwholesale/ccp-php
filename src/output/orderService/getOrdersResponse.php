<?php

class getOrdersResponse
{

    /**
     * @var ResponseObjectOfListOfAPIOrder $getOrdersResult
     */
    protected $getOrdersResult = null;

    /**
     * @param ResponseObjectOfListOfAPIOrder $getOrdersResult
     */
    public function __construct($getOrdersResult)
    {
      $this->getOrdersResult = $getOrdersResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIOrder
     */
    public function getGetOrdersResult()
    {
      return $this->getOrdersResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIOrder $getOrdersResult
     * @return getOrdersResponse
     */
    public function setGetOrdersResult($getOrdersResult)
    {
      $this->getOrdersResult = $getOrdersResult;
      return $this;
    }

}
