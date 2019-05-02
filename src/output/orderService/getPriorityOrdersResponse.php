<?php

class getPriorityOrdersResponse
{

    /**
     * @var ResponseObjectOfApiOrderQueryResponse $getPriorityOrdersResult
     */
    protected $getPriorityOrdersResult = null;

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getPriorityOrdersResult
     */
    public function __construct($getPriorityOrdersResult)
    {
      $this->getPriorityOrdersResult = $getPriorityOrdersResult;
    }

    /**
     * @return ResponseObjectOfApiOrderQueryResponse
     */
    public function getGetPriorityOrdersResult()
    {
      return $this->getPriorityOrdersResult;
    }

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getPriorityOrdersResult
     * @return getPriorityOrdersResponse
     */
    public function setGetPriorityOrdersResult($getPriorityOrdersResult)
    {
      $this->getPriorityOrdersResult = $getPriorityOrdersResult;
      return $this;
    }

}
