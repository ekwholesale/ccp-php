<?php

class BatchStockUpdates
{

    /**
     * @var RequestObjectOfAPIBulkUpdateStockRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIBulkUpdateStockRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIBulkUpdateStockRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIBulkUpdateStockRequest $request
     * @return BatchStockUpdates
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
