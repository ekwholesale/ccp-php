<?php

class GetWarehouseBaysForProductResponse
{

    /**
     * @var ResponseObjectOfListOfAPIWarehouseBay $GetWarehouseBaysForProductResult
     */
    protected $GetWarehouseBaysForProductResult = null;

    /**
     * @param ResponseObjectOfListOfAPIWarehouseBay $GetWarehouseBaysForProductResult
     */
    public function __construct($GetWarehouseBaysForProductResult)
    {
      $this->GetWarehouseBaysForProductResult = $GetWarehouseBaysForProductResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIWarehouseBay
     */
    public function getGetWarehouseBaysForProductResult()
    {
      return $this->GetWarehouseBaysForProductResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIWarehouseBay $GetWarehouseBaysForProductResult
     * @return GetWarehouseBaysForProductResponse
     */
    public function setGetWarehouseBaysForProductResult($GetWarehouseBaysForProductResult)
    {
      $this->GetWarehouseBaysForProductResult = $GetWarehouseBaysForProductResult;
      return $this;
    }

}
