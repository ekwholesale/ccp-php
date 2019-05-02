<?php

class MoveStockToBayResponse
{

    /**
     * @var ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $MoveStockToBayResult
     */
    protected $MoveStockToBayResult = null;

    /**
     * @param ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $MoveStockToBayResult
     */
    public function __construct($MoveStockToBayResult)
    {
      $this->MoveStockToBayResult = $MoveStockToBayResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIProductWarehouseBayStockMovement
     */
    public function getMoveStockToBayResult()
    {
      return $this->MoveStockToBayResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIProductWarehouseBayStockMovement $MoveStockToBayResult
     * @return MoveStockToBayResponse
     */
    public function setMoveStockToBayResult($MoveStockToBayResult)
    {
      $this->MoveStockToBayResult = $MoveStockToBayResult;
      return $this;
    }

}
