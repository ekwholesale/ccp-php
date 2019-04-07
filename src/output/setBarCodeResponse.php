<?php

class setBarCodeResponse
{

    /**
     * @var ResponseObjectOfBoolean $setBarCodeResult
     */
    protected $setBarCodeResult = null;

    /**
     * @param ResponseObjectOfBoolean $setBarCodeResult
     */
    public function __construct($setBarCodeResult)
    {
      $this->setBarCodeResult = $setBarCodeResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetBarCodeResult()
    {
      return $this->setBarCodeResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setBarCodeResult
     * @return setBarCodeResponse
     */
    public function setSetBarCodeResult($setBarCodeResult)
    {
      $this->setBarCodeResult = $setBarCodeResult;
      return $this;
    }

}
