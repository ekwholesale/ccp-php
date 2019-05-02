<?php

class RequestObjectOfAPIBulkSupplierPriceUpdateRequest
{

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var string $SecurityHash
     */
    protected $SecurityHash = null;

    /**
     * @var APIBulkSupplierPriceUpdateRequest $Content
     */
    protected $Content = null;

    /**
     * @param int $BrandID
     */
    public function __construct($BrandID)
    {
      $this->BrandID = $BrandID;
    }

    /**
     * @return int
     */
    public function getBrandID()
    {
      return $this->BrandID;
    }

    /**
     * @param int $BrandID
     * @return RequestObjectOfAPIBulkSupplierPriceUpdateRequest
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecurityHash()
    {
      return $this->SecurityHash;
    }

    /**
     * @param string $SecurityHash
     * @return RequestObjectOfAPIBulkSupplierPriceUpdateRequest
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return APIBulkSupplierPriceUpdateRequest
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param APIBulkSupplierPriceUpdateRequest $Content
     * @return RequestObjectOfAPIBulkSupplierPriceUpdateRequest
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
