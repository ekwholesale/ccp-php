<?php

class getOrderByIdResponseCustom
{

    /**
     * @var ResponseObjectOfAPIOrder $getOrderByIdResult
     */
    protected $getOrderByIdResult = null;

    /**
     * @param ResponseObjectOfAPIOrder $getOrderByIdResult
     */
    public function __construct($getOrderByIdResult)
    {
      $this->getOrderByIdResult = $getOrderByIdResult;
    }

    /**
     * @return ResponseObjectOfAPIOrder
     */
    public function getGetOrderByIdResult()
    {
      return $this->getOrderByIdResult;
    }

    /**
     * @param ResponseObjectOfAPIOrder $getOrderByIdResult
     * @return getOrderByIdResponse
     */
    public function setGetOrderByIdResult($getOrderByIdResult)
    {
      $this->getOrderByIdResult = $getOrderByIdResult;
      return $this;
    }

}
