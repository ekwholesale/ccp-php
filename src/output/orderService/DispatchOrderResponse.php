<?php

class DispatchOrderResponse
{

    /**
     * @var ResponseObjectOfAPIDispatchOrderResponse $DispatchOrderResult
     */
    protected $DispatchOrderResult = null;

    /**
     * @param ResponseObjectOfAPIDispatchOrderResponse $DispatchOrderResult
     */
    public function __construct($DispatchOrderResult)
    {
      $this->DispatchOrderResult = $DispatchOrderResult;
    }

    /**
     * @return ResponseObjectOfAPIDispatchOrderResponse
     */
    public function getDispatchOrderResult()
    {
      return $this->DispatchOrderResult;
    }

    /**
     * @param ResponseObjectOfAPIDispatchOrderResponse $DispatchOrderResult
     * @return DispatchOrderResponse
     */
    public function setDispatchOrderResult($DispatchOrderResult)
    {
      $this->DispatchOrderResult = $DispatchOrderResult;
      return $this;
    }

}
