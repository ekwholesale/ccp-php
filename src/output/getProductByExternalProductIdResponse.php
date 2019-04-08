<?php

class getProductByExternalProductIdResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $getProductByExternalProductIdResult
     */
    protected $getProductByExternalProductIdResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $getProductByExternalProductIdResult
     */
    public function __construct($getProductByExternalProductIdResult)
    {
      $this->getProductByExternalProductIdResult = $getProductByExternalProductIdResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getProductByExternalProductIdResult()
    {
      return $this->getProductByExternalProductIdResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $getProductByExternalProductIdResult
     * @return getProductByExternalProductIdResponse
     */
    public function setGetProductByExternalProductIdResult($getProductByExternalProductIdResult)
    {
      $this->getProductByExternalProductIdResult = $getProductByExternalProductIdResult;
      return $this;
    }

}
