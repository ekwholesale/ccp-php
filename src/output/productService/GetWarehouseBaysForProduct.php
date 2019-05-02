<?php

class GetWarehouseBaysForProduct
{

    /**
     * @var RequestObjectOfAPIProductWarehouseBayStockMovementRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIProductWarehouseBayStockMovementRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIProductWarehouseBayStockMovementRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIProductWarehouseBayStockMovementRequest $request
     * @return GetWarehouseBaysForProduct
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
