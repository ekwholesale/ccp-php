<?php

class BatchSupplierPriceUpdatesResponse
{

    /**
     * @var ResponseObjectOfBoolean $BatchSupplierPriceUpdatesResult
     */
    protected $BatchSupplierPriceUpdatesResult = null;

    /**
     * @param ResponseObjectOfBoolean $BatchSupplierPriceUpdatesResult
     */
    public function __construct($BatchSupplierPriceUpdatesResult)
    {
      $this->BatchSupplierPriceUpdatesResult = $BatchSupplierPriceUpdatesResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getBatchSupplierPriceUpdatesResult()
    {
      return $this->BatchSupplierPriceUpdatesResult;
    }

    /**
     * @param ResponseObjectOfBoolean $BatchSupplierPriceUpdatesResult
     * @return BatchSupplierPriceUpdatesResponse
     */
    public function setBatchSupplierPriceUpdatesResult($BatchSupplierPriceUpdatesResult)
    {
      $this->BatchSupplierPriceUpdatesResult = $BatchSupplierPriceUpdatesResult;
      return $this;
    }

}
