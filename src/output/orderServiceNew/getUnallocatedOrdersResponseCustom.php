<?php

class getUnallocatedOrdersResponseCustom
{

    /**
     * @var ResponseObjectOfApiOrderQueryResponse $getUnallocatedOrdersResult
     */
    protected $getUnallocatedOrdersResult = null;

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getUnallocatedOrdersResult
     */
    public function __construct($getUnallocatedOrdersResult)
    {
      $this->getUnallocatedOrdersResult = $getUnallocatedOrdersResult;
    }

    /**
     * @return ResponseObjectOfApiOrderQueryResponse
     */
    public function getGetUnallocatedOrdersResult()
    {
      return $this->getUnallocatedOrdersResult;
    }

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $getUnallocatedOrdersResult
     * @return getUnallocatedOrdersResponse
     */
    public function setGetUnallocatedOrdersResult($getUnallocatedOrdersResult)
    {
      $this->getUnallocatedOrdersResult = $getUnallocatedOrdersResult;
      return $this;
    }

}
