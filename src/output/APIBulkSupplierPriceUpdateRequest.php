<?php

class APIBulkSupplierPriceUpdateRequest
{

    /**
     * @var ArrayOfAPISupplierPriceUpdateRequest $SupplierPriceUpdates
     */
    protected $SupplierPriceUpdates = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfAPISupplierPriceUpdateRequest
     */
    public function getSupplierPriceUpdates()
    {
      return $this->SupplierPriceUpdates;
    }

    /**
     * @param ArrayOfAPISupplierPriceUpdateRequest $SupplierPriceUpdates
     * @return APIBulkSupplierPriceUpdateRequest
     */
    public function setSupplierPriceUpdates($SupplierPriceUpdates)
    {
      $this->SupplierPriceUpdates = $SupplierPriceUpdates;
      return $this;
    }

}
