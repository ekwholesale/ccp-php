<?php

class addStockTransactionResponse
{

    /**
     * @var ResponseObjectOfInt32 $addStockTransactionResult
     */
    protected $addStockTransactionResult = null;

    /**
     * @param ResponseObjectOfInt32 $addStockTransactionResult
     */
    public function __construct($addStockTransactionResult)
    {
      $this->addStockTransactionResult = $addStockTransactionResult;
    }

    /**
     * @return ResponseObjectOfInt32
     */
    public function getAddStockTransactionResult()
    {
      return $this->addStockTransactionResult;
    }

    /**
     * @param ResponseObjectOfInt32 $addStockTransactionResult
     * @return addStockTransactionResponse
     */
    public function setAddStockTransactionResult($addStockTransactionResult)
    {
      $this->addStockTransactionResult = $addStockTransactionResult;
      return $this;
    }

}
