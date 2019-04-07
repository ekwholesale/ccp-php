<?php

class APIBulkUpdateStockRequest
{

    /**
     * @var ArrayOfAPIUpdateStockRequest $StockUpdates
     */
    protected $StockUpdates = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfAPIUpdateStockRequest
     */
    public function getStockUpdates()
    {
      return $this->StockUpdates;
    }

    /**
     * @param ArrayOfAPIUpdateStockRequest $StockUpdates
     * @return APIBulkUpdateStockRequest
     */
    public function setStockUpdates($StockUpdates)
    {
      $this->StockUpdates = $StockUpdates;
      return $this;
    }

}
