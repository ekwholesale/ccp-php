<?php

class AddStockToBayResponse
{

    /**
     * @var ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $AddStockToBayResult
     */
    protected $AddStockToBayResult = null;

    /**
     * @param ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $AddStockToBayResult
     */
    public function __construct($AddStockToBayResult)
    {
      $this->AddStockToBayResult = $AddStockToBayResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIProductWarehouseBayStockMovement
     */
    public function getAddStockToBayResult()
    {
      return $this->AddStockToBayResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $AddStockToBayResult
     * @return AddStockToBayResponse
     */
    public function setAddStockToBayResult($AddStockToBayResult)
    {
      $this->AddStockToBayResult = $AddStockToBayResult;
      return $this;
    }

}
