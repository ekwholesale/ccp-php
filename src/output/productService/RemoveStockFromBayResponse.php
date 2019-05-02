<?php

class RemoveStockFromBayResponse
{

    /**
     * @var ResponseObjectOfBoolean $RemoveStockFromBayResult
     */
    protected $RemoveStockFromBayResult = null;

    /**
     * @param ResponseObjectOfBoolean $RemoveStockFromBayResult
     */
    public function __construct($RemoveStockFromBayResult)
    {
      $this->RemoveStockFromBayResult = $RemoveStockFromBayResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getRemoveStockFromBayResult()
    {
      return $this->RemoveStockFromBayResult;
    }

    /**
     * @param ResponseObjectOfBoolean $RemoveStockFromBayResult
     * @return RemoveStockFromBayResponse
     */
    public function setRemoveStockFromBayResult($RemoveStockFromBayResult)
    {
      $this->RemoveStockFromBayResult = $RemoveStockFromBayResult;
      return $this;
    }

}
