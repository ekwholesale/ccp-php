<?php

class GetDispatchedOrdersResponse
{

    /**
     * @var ResponseObjectOfDispatchedOrdersList $GetDispatchedOrdersResult
     */
    protected $GetDispatchedOrdersResult = null;

    /**
     * @param ResponseObjectOfDispatchedOrdersList $GetDispatchedOrdersResult
     */
    public function __construct($GetDispatchedOrdersResult)
    {
      $this->GetDispatchedOrdersResult = $GetDispatchedOrdersResult;
    }

    /**
     * @return ResponseObjectOfDispatchedOrdersList
     */
    public function getGetDispatchedOrdersResult()
    {
      return $this->GetDispatchedOrdersResult;
    }

    /**
     * @param ResponseObjectOfDispatchedOrdersList $GetDispatchedOrdersResult
     * @return GetDispatchedOrdersResponse
     */
    public function setGetDispatchedOrdersResult($GetDispatchedOrdersResult)
    {
      $this->GetDispatchedOrdersResult = $GetDispatchedOrdersResult;
      return $this;
    }

}
