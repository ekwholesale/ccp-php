<?php

class getPrintedOrdersResponseCustom
{

    /**
     * @var ResponseObjectOfApiOrderQueryResponse $getPrintedOrdersResult
     */
    protected $getPrintedOrdersResult = null;

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getPrintedOrdersResult
     */
    public function __construct($getPrintedOrdersResult)
    {
      $this->getPrintedOrdersResult = $getPrintedOrdersResult;
    }

    /**
     * @return ResponseObjectOfApiOrderQueryResponse
     */
    public function getGetPrintedOrdersResult()
    {
      return $this->getPrintedOrdersResult;
    }

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getPrintedOrdersResult
     * @return getPrintedOrdersResponse
     */
    public function setGetPrintedOrdersResult($getPrintedOrdersResult)
    {
      $this->getPrintedOrdersResult = $getPrintedOrdersResult;
      return $this;
    }

}
