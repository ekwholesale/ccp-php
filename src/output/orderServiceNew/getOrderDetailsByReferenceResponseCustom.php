<?php

class getOrderDetailsByReferenceResponseCustom
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
    public function getGetOrderDetailsByReferenceResult()
    {
      return $this->getOrderDetailsByReferenceResult;
    }

    /**
     * @param ResponseObjectOfOrderDetail $getOrderDetailsByReferenceResult
     * @return getOrderDetailsByReferenceResponse
     */
    public function setGetOrderDetailsByReferenceResult($getOrderDetailsByReferenceResult)
    {
      $this->getOrderDetailsByReferenceResult = $getOrderDetailsByReferenceResult;
      return $this;
    }

}
