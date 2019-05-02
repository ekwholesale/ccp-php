<?php

class markOrderAsPickedResponse
{

    /**
     * @var ResponseObjectOfAPIOrder $markOrderAsPickedResult
     */
    protected $markOrderAsPickedResult = null;

    /**
     * @param ResponseObjectOfAPIOrder $markOrderAsPickedResult
     */
    public function __construct($markOrderAsPickedResult)
    {
      $this->markOrderAsPickedResult = $markOrderAsPickedResult;
    }

    /**
     * @return ResponseObjectOfAPIOrder
     */
    public function getMarkOrderAsPickedResult()
    {
      return $this->markOrderAsPickedResult;
    }

    /**
     * @param ResponseObjectOfAPIOrder $markOrderAsPickedResult
     * @return markOrderAsPickedResponse
     */
    public function setMarkOrderAsPickedResult($markOrderAsPickedResult)
    {
      $this->markOrderAsPickedResult = $markOrderAsPickedResult;
      return $this;
    }

}
