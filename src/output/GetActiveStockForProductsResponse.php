<?php

class GetActiveStockForProductsResponse
{

    /**
     * @var ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $GetActiveStockForProductsResult
     */
    protected $GetActiveStockForProductsResult = null;

    /**
     * @param ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $GetActiveStockForProductsResult
     */
    public function __construct($GetActiveStockForProductsResult)
    {
      $this->GetActiveStockForProductsResult = $GetActiveStockForProductsResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIProductWarehouseBayStockMovement
     */
    public function getGetActiveStockForProductsResult()
    {
      return $this->GetActiveStockForProductsResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $GetActiveStockForProductsResult
     * @return GetActiveStockForProductsResponse
     */
    public function setGetActiveStockForProductsResult($GetActiveStockForProductsResult)
    {
      $this->GetActiveStockForProductsResult = $GetActiveStockForProductsResult;
      return $this;
    }

}
