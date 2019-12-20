<?php

class GetWarehouseBaysResponse
{

    /**
     * @var ResponseObjectOfListOfAPIWarehouseBay $GetWarehouseBaysResult
     */
    protected $GetWarehouseBaysResult = null;

    /**
     * @param ResponseObjectOfListOfAPIWarehouseBay $GetWarehouseBaysResult
     */
    public function __construct($GetWarehouseBaysResult)
    {
      $this->GetWarehouseBaysResult = $GetWarehouseBaysResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIWarehouseBay
     */
    public function GetWarehouseBaysResult()
    {
      return $this->GetWarehouseBaysResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIWarehouseBay $GetWarehouseBaysResult
     * @return GetWarehouseBaysResponse
     */
    public function setGetWarehouseBaysResult($GetWarehouseBaysResult)
    {
      $this->GetWarehouseBaysResult = $GetWarehouseBaysResult;
      return $this;
    }

}
