<?php

class GetActiveStockFromBayResponse
{

    /**
     * @var ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $GetActiveStockFromBayResult
     */
    protected $GetActiveStockFromBayResult = null;

    /**
     * @param ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $GetActiveStockFromBayResult
     */
    public function __construct($GetActiveStockFromBayResult)
    {
      $this->GetActiveStockFromBayResult = $GetActiveStockFromBayResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIProductWarehouseBayStockMovement
     */
    public function getGetActiveStockFromBayResult()
    {
      return $this->GetActiveStockFromBayResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $GetActiveStockFromBayResult
     * @return GetActiveStockFromBayResponse
     */
    public function setGetActiveStockFromBayResult($GetActiveStockFromBayResult)
    {
      $this->GetActiveStockFromBayResult = $GetActiveStockFromBayResult;
      return $this;
    }

}
