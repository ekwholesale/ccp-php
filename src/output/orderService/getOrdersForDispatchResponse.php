<?php

class getOrdersForDispatchResponse
{

    /**
     * @var ResponseObjectOfApiOrderQueryResponse $getOrdersForDispatchResult
     */
    protected $getOrdersForDispatchResult = null;

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getOrdersForDispatchResult
     */
    public function __construct($getOrdersForDispatchResult)
    {
      $this->getOrdersForDispatchResult = $getOrdersForDispatchResult;
    }

    /**
     * @return ResponseObjectOfApiOrderQueryResponse
     */
    public function getGetOrdersForDispatchResult()
    {
      return $this->getOrdersForDispatchResult;
    }

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getOrdersForDispatchResult
     * @return getOrdersForDispatchResponse
     */
    public function setGetOrdersForDispatchResult($getOrdersForDispatchResult)
    {
      $this->getOrdersForDispatchResult = $getOrdersForDispatchResult;
      return $this;
    }

}
