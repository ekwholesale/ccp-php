<?php

class getNotPrintedOrdersResponse
{

    /**
     * @var ResponseObjectOfApiOrderQueryResponse $getNotPrintedOrdersResult
     */
    protected $getNotPrintedOrdersResult = null;

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getNotPrintedOrdersResult
     */
    public function __construct($getNotPrintedOrdersResult)
    {
      $this->getNotPrintedOrdersResult = $getNotPrintedOrdersResult;
    }

    /**
     * @return ResponseObjectOfApiOrderQueryResponse
     */
    public function getGetNotPrintedOrdersResult()
    {
      return $this->getNotPrintedOrdersResult;
    }

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getNotPrintedOrdersResult
     * @return getNotPrintedOrdersResponse
     */
    public function setGetNotPrintedOrdersResult($getNotPrintedOrdersResult)
    {
      $this->getNotPrintedOrdersResult = $getNotPrintedOrdersResult;
      return $this;
    }

}
