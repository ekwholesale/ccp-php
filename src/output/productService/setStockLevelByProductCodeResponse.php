<?php

class setStockLevelByProductCodeResponse
{

    /**
     * @var ResponseObjectOfInt32 $setStockLevelByProductCodeResult
     */
    protected $setStockLevelByProductCodeResult = null;

    /**
     * @param ResponseObjectOfInt32 $setStockLevelByProductCodeResult
     */
    public function __construct($setStockLevelByProductCodeResult)
    {
      $this->setStockLevelByProductCodeResult = $setStockLevelByProductCodeResult;
    }

    /**
     * @return ResponseObjectOfInt32
     */
    public function getSetStockLevelByProductCodeResult()
    {
      return $this->setStockLevelByProductCodeResult;
    }

    /**
     * @param ResponseObjectOfInt32 $setStockLevelByProductCodeResult
     * @return setStockLevelByProductCodeResponse
     */
    public function setSetStockLevelByProductCodeResult($setStockLevelByProductCodeResult)
    {
      $this->setStockLevelByProductCodeResult = $setStockLevelByProductCodeResult;
      return $this;
    }

}
