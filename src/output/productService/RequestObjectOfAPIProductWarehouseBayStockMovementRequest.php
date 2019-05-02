<?php

class RequestObjectOfAPIProductWarehouseBayStockMovementRequest
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
     * @var APIProductWarehouseBayStockMovementRequest $Content
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
     * @return RequestObjectOfAPIProductWarehouseBayStockMovementRequest
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
     * @return RequestObjectOfAPIProductWarehouseBayStockMovementRequest
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return APIProductWarehouseBayStockMovementRequest
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param APIProductWarehouseBayStockMovementRequest $Content
     * @return RequestObjectOfAPIProductWarehouseBayStockMovementRequest
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
