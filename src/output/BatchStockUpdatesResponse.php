<?php

class BatchStockUpdatesResponse
{

    /**
     * @var ResponseObjectOfBoolean $BatchStockUpdatesResult
     */
    protected $BatchStockUpdatesResult = null;

    /**
     * @param ResponseObjectOfBoolean $BatchStockUpdatesResult
     */
    public function __construct($BatchStockUpdatesResult)
    {
      $this->BatchStockUpdatesResult = $BatchStockUpdatesResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getBatchStockUpdatesResult()
    {
      return $this->BatchStockUpdatesResult;
    }

    /**
     * @param ResponseObjectOfBoolean $BatchStockUpdatesResult
     * @return BatchStockUpdatesResponse
     */
    public function setBatchStockUpdatesResult($BatchStockUpdatesResult)
    {
      $this->BatchStockUpdatesResult = $BatchStockUpdatesResult;
      return $this;
    }

}
