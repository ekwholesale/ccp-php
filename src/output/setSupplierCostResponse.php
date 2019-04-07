<?php

class setSupplierCostResponse
{

    /**
     * @var ResponseObjectOfDecimal $setSupplierCostResult
     */
    protected $setSupplierCostResult = null;

    /**
     * @param ResponseObjectOfDecimal $setSupplierCostResult
     */
    public function __construct($setSupplierCostResult)
    {
      $this->setSupplierCostResult = $setSupplierCostResult;
    }

    /**
     * @return ResponseObjectOfDecimal
     */
    public function getSetSupplierCostResult()
    {
      return $this->setSupplierCostResult;
    }

    /**
     * @param ResponseObjectOfDecimal $setSupplierCostResult
     * @return setSupplierCostResponse
     */
    public function setSetSupplierCostResult($setSupplierCostResult)
    {
      $this->setSupplierCostResult = $setSupplierCostResult;
      return $this;
    }

}
