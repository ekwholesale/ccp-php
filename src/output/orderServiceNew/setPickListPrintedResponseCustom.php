<?php

class setPickListPrintedResponseCustom
{

    /**
     * @var ResponseObjectOfAPIOrder $setPickListPrintedResult
     */
    protected $setPickListPrintedResult = null;

    /**
     * @param ResponseObjectOfAPIOrder $setPickListPrintedResult
     */
    public function __construct($setPickListPrintedResult)
    {
      $this->setPickListPrintedResult = $setPickListPrintedResult;
    }

    /**
     * @return ResponseObjectOfAPIOrder
     */
    public function getSetPickListPrintedResult()
    {
      return $this->setPickListPrintedResult;
    }

    /**
     * @param ResponseObjectOfAPIOrder $setPickListPrintedResult
     * @return setPickListPrintedResponse
     */
    public function setSetPickListPrintedResult($setPickListPrintedResult)
    {
      $this->setPickListPrintedResult = $setPickListPrintedResult;
      return $this;
    }

}
