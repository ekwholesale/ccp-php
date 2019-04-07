<?php

class getProductsResponse
{

    /**
     * @var ResponseObjectOfAPIProductList $getProductsResult
     */
    protected $getProductsResult = null;

    /**
     * @param ResponseObjectOfAPIProductList $getProductsResult
     */
    public function __construct($getProductsResult)
    {
      $this->getProductsResult = $getProductsResult;
    }

    /**
     * @return ResponseObjectOfAPIProductList
     */
    public function getGetProductsResult()
    {
      return $this->getProductsResult;
    }

    /**
     * @param ResponseObjectOfAPIProductList $getProductsResult
     * @return getProductsResponse
     */
    public function setGetProductsResult($getProductsResult)
    {
      $this->getProductsResult = $getProductsResult;
      return $this;
    }

}
