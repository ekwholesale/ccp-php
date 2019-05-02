<?php

class getAllocatedOrdersResponse
{

    /**
     * @var ResponseObjectOfApiOrderQueryResponse $getAllocatedOrdersResult
     */
    protected $getAllocatedOrdersResult = null;

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getAllocatedOrdersResult
     */
    public function __construct($getAllocatedOrdersResult)
    {
      $this->getAllocatedOrdersResult = $getAllocatedOrdersResult;
    }

    /**
     * @return ResponseObjectOfApiOrderQueryResponse
     */
    public function getGetAllocatedOrdersResult()
    {
      return $this->getAllocatedOrdersResult;
    }

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getAllocatedOrdersResult
     * @return getAllocatedOrdersResponse
     */
    public function setGetAllocatedOrdersResult($getAllocatedOrdersResult)
    {
      $this->getAllocatedOrdersResult = $getAllocatedOrdersResult;
      return $this;
    }

}
