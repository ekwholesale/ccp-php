<?php

class createOrderResponseCustom
{

    /**
     * @var ResponseObjectOfInt32 $createOrderResult
     */
    protected $createOrderResult = null;

    /**
     * @param ResponseObjectOfInt32 $createOrderResult
     */
    public function __construct($createOrderResult)
    {
      $this->createOrderResult = $createOrderResult;
    }

    /**
     * @return ResponseObjectOfInt32
     */
    public function getCreateOrderResult()
    {
      return $this->createOrderResult;
    }

    /**
     * @param ResponseObjectOfInt32 $createOrderResult
     * @return createOrderResponse
     */
    public function setCreateOrderResult($createOrderResult)
    {
      $this->createOrderResult = $createOrderResult;
      return $this;
    }

}
