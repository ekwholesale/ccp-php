<?php

class GetWarehousesResponse
{

    /**
     * @var ResponseObjectOfListOfAPIWarehouseDetails $GetWarehousesResult
     */
    protected $GetWarehousesResult = null;

    /**
     * @param ResponseObjectOfListOfAPIWarehouseDetails $GetWarehousesResult
     */
    public function __construct($GetWarehousesResult)
    {
      $this->GetWarehousesResult = $GetWarehousesResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIWarehouseDetails
     */
    public function getGetWarehousesResult()
    {
      return $this->GetWarehousesResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIWarehouseDetails $GetWarehousesResult
     * @return GetWarehousesResponse
     */
    public function setGetWarehousesResult($GetWarehousesResult)
    {
      $this->GetWarehousesResult = $GetWarehousesResult;
      return $this;
    }

}
