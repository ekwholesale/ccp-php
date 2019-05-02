<?php

class setStockLevelResponse
{

    /**
     * @var ResponseObjectOfInt32 $setStockLevelResult
     */
    protected $setStockLevelResult = null;

    /**
     * @param ResponseObjectOfInt32 $setStockLevelResult
     */
    public function __construct($setStockLevelResult)
    {
      $this->setStockLevelResult = $setStockLevelResult;
    }

    /**
     * @return ResponseObjectOfInt32
     */
    public function getSetStockLevelResult()
    {
      return $this->setStockLevelResult;
    }

    /**
     * @param ResponseObjectOfInt32 $setStockLevelResult
     * @return setStockLevelResponse
     */
    public function setSetStockLevelResult($setStockLevelResult)
    {
      $this->setStockLevelResult = $setStockLevelResult;
      return $this;
    }

}
