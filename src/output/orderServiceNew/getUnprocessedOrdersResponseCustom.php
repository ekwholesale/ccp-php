<?php

class getUnprocessedOrdersResponseCustom
{

    /**
     * @var ResponseObjectOfApiOrderQueryResponse $getUnprocessedOrdersResult
     */
    protected $getUnprocessedOrdersResult = null;

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getUnprocessedOrdersResult
     */
    public function __construct($getUnprocessedOrdersResult)
    {
      $this->getUnprocessedOrdersResult = $getUnprocessedOrdersResult;
    }

    /**
     * @return ResponseObjectOfApiOrderQueryResponse
     */
    public function getGetUnprocessedOrdersResult()
    {
      return $this->getUnprocessedOrdersResult;
    }

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getUnprocessedOrdersResult
     * @return getUnprocessedOrdersResponse
     */
    public function setGetUnprocessedOrdersResult($getUnprocessedOrdersResult)
    {
      $this->getUnprocessedOrdersResult = $getUnprocessedOrdersResult;
      return $this;
    }

}
