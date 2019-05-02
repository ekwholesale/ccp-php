<?php

class setPickStatusResponse
{

    /**
     * @var ResponseObjectOfAPIOrder $setPickStatusResult
     */
    protected $setPickStatusResult = null;

    /**
     * @param ResponseObjectOfAPIOrder $setPickStatusResult
     */
    public function __construct($setPickStatusResult)
    {
      $this->setPickStatusResult = $setPickStatusResult;
    }

    /**
     * @return ResponseObjectOfAPIOrder
     */
    public function getSetPickStatusResult()
    {
      return $this->setPickStatusResult;
    }

    /**
     * @param ResponseObjectOfAPIOrder $setPickStatusResult
     * @return setPickStatusResponse
     */
    public function setSetPickStatusResult($setPickStatusResult)
    {
      $this->setPickStatusResult = $setPickStatusResult;
      return $this;
    }

}
