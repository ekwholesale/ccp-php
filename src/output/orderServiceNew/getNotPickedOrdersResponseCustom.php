<?php

class getNotPickedOrdersResponseCustom
{

    /**
     * @var ResponseObjectOfApiOrderQueryResponse $getNotPickedOrdersResult
     */
    protected $getNotPickedOrdersResult = null;

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getNotPickedOrdersResult
     */
    public function __construct($getNotPickedOrdersResult)
    {
      $this->getNotPickedOrdersResult = $getNotPickedOrdersResult;
    }

    /**
     * @return ResponseObjectOfApiOrderQueryResponse
     */
    public function getGetNotPickedOrdersResult()
    {
      return $this->getNotPickedOrdersResult;
    }

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getNotPickedOrdersResult
     * @return getNotPickedOrdersResponse
     */
    public function setGetNotPickedOrdersResult($getNotPickedOrdersResult)
    {
      $this->getNotPickedOrdersResult = $getNotPickedOrdersResult;
      return $this;
    }

}
