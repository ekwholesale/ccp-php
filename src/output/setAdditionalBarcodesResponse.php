<?php

class setAdditionalBarcodesResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $setAdditionalBarcodesResult
     */
    protected $setAdditionalBarcodesResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $setAdditionalBarcodesResult
     */
    public function __construct($setAdditionalBarcodesResult)
    {
      $this->setAdditionalBarcodesResult = $setAdditionalBarcodesResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getSetAdditionalBarcodesResult()
    {
      return $this->setAdditionalBarcodesResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $setAdditionalBarcodesResult
     * @return setAdditionalBarcodesResponse
     */
    public function setSetAdditionalBarcodesResult($setAdditionalBarcodesResult)
    {
      $this->setAdditionalBarcodesResult = $setAdditionalBarcodesResult;
      return $this;
    }

}
