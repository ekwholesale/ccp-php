<?php

class SubmitOrderResponseCustom
{

    /**
     * @var ResponseObjectOfOrderDetail $SubmitOrderResult
     */
    protected $SubmitOrderResult = null;

    /**
     * @param ResponseObjectOfOrderDetail $SubmitOrderResult
     */
    public function __construct($SubmitOrderResult)
    {
      $this->SubmitOrderResult = $SubmitOrderResult;
    }

    /**
     * @return ResponseObjectOfOrderDetail
     */
    public function getSubmitOrderResult()
    {
      return $this->SubmitOrderResult;
    }

    /**
     * @param ResponseObjectOfOrderDetail $SubmitOrderResult
     * @return SubmitOrderResponse
     */
    public function setSubmitOrderResult($SubmitOrderResult)
    {
      $this->SubmitOrderResult = $SubmitOrderResult;
      return $this;
    }

}
