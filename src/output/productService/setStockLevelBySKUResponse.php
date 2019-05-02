<?php

class setStockLevelBySKUResponse
{

    /**
     * @var ResponseObjectOfInt32 $setStockLevelBySKUResult
     */
    protected $setStockLevelBySKUResult = null;

    /**
     * @param ResponseObjectOfInt32 $setStockLevelBySKUResult
     */
    public function __construct($setStockLevelBySKUResult)
    {
      $this->setStockLevelBySKUResult = $setStockLevelBySKUResult;
    }

    /**
     * @return ResponseObjectOfInt32
     */
    public function getSetStockLevelBySKUResult()
    {
      return $this->setStockLevelBySKUResult;
    }

    /**
     * @param ResponseObjectOfInt32 $setStockLevelBySKUResult
     * @return setStockLevelBySKUResponse
     */
    public function setSetStockLevelBySKUResult($setStockLevelBySKUResult)
    {
      $this->setStockLevelBySKUResult = $setStockLevelBySKUResult;
      return $this;
    }

}
