<?php

class getOrderDetailsByReferenceResponse
{

    /**
     * @var ResponseObjectOfOrderDetail $getOrderDetailsByReferenceResult
     */
    protected $getOrderDetailsByReferenceResult = null;

    /**
     * @param ResponseObjectOfOrderDetail $getOrderDetailsByReferenceResult
     */
    public function __construct($getOrderDetailsByReferenceResult)
    {
      $this->getOrderDetailsByReferenceResult = $getOrderDetailsByReferenceResult;
    }

    /**
     * @return ResponseObjectOfOrderDetail
     */
    public function getOrderDetailsByReferenceResult()
    {
      return $this->getOrderDetailsByReferenceResult;
    }

    /**
     * @param ResponseObjectOfOrderDetail $getOrderDetailsByReferenceResult
     * @return getOrderDetailsByReferenceResponse
     */
    public function setOrderDetailsByReferenceResult($getOrderDetailsByReferenceResult)
    {
      $this->getOrderDetailsByReferenceResult = $getOrderDetailsByReferenceResult;
      return $this;
    }

}
