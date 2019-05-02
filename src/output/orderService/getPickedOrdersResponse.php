<?php

class getPickedOrdersResponse
{

    /**
     * @var ResponseObjectOfApiOrderQueryResponse $getPickedOrdersResult
     */
    protected $getPickedOrdersResult = null;

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getPickedOrdersResult
     */
    public function __construct($getPickedOrdersResult)
    {
      $this->getPickedOrdersResult = $getPickedOrdersResult;
    }

    /**
     * @return ResponseObjectOfApiOrderQueryResponse
     */
    public function getGetPickedOrdersResult()
    {
      return $this->getPickedOrdersResult;
    }

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getPickedOrdersResult
     * @return getPickedOrdersResponse
     */
    public function setGetPickedOrdersResult($getPickedOrdersResult)
    {
      $this->getPickedOrdersResult = $getPickedOrdersResult;
      return $this;
    }

}
