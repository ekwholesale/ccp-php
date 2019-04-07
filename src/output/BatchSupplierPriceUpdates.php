<?php

class BatchSupplierPriceUpdates
{

    /**
     * @var RequestObjectOfAPIBulkSupplierPriceUpdateRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIBulkSupplierPriceUpdateRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIBulkSupplierPriceUpdateRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIBulkSupplierPriceUpdateRequest $request
     * @return BatchSupplierPriceUpdates
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
