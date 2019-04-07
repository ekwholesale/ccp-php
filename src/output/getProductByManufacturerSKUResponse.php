<?php

class getProductByManufacturerSKUResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $getProductByManufacturerSKUResult
     */
    protected $getProductByManufacturerSKUResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $getProductByManufacturerSKUResult
     */
    public function __construct($getProductByManufacturerSKUResult)
    {
      $this->getProductByManufacturerSKUResult = $getProductByManufacturerSKUResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getProductByManufacturerSKUResult()
    {
      return $this->getProductByManufacturerSKUResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $getProductByManufacturerSKUResult
     * @return getProductByManufacturerSKUResponse
     */
    public function setGetProductByManufacturerSKUResult($getProductByManufacturerSKUResult)
    {
      $this->getProductByManufacturerSKUResult = $getProductByManufacturerSKUResult;
      return $this;
    }

}
