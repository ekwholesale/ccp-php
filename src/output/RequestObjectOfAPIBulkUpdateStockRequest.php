<?php

class RequestObjectOfAPIBulkUpdateStockRequest
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
     * @var APIBulkUpdateStockRequest $Content
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
     * @return RequestObjectOfAPIBulkUpdateStockRequest
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
     * @return RequestObjectOfAPIBulkUpdateStockRequest
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return APIBulkUpdateStockRequest
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param APIBulkUpdateStockRequest $Content
     * @return RequestObjectOfAPIBulkUpdateStockRequest
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
