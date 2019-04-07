<?php

class setManufacturerSKUResponse
{

    /**
     * @var ResponseObjectOfBoolean $setManufacturerSKUResult
     */
    protected $setManufacturerSKUResult = null;

    /**
     * @param ResponseObjectOfBoolean $setManufacturerSKUResult
     */
    public function __construct($setManufacturerSKUResult)
    {
      $this->setManufacturerSKUResult = $setManufacturerSKUResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetManufacturerSKUResult()
    {
      return $this->setManufacturerSKUResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setManufacturerSKUResult
     * @return setManufacturerSKUResponse
     */
    public function setSetManufacturerSKUResult($setManufacturerSKUResult)
    {
      $this->setManufacturerSKUResult = $setManufacturerSKUResult;
      return $this;
    }

}
