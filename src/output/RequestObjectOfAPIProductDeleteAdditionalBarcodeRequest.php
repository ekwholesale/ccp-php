<?php

class RequestObjectOfAPIProductDeleteAdditionalBarcodeRequest
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
     * @var APIProductDeleteAdditionalBarcodeRequest $Content
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
     * @return RequestObjectOfAPIProductDeleteAdditionalBarcodeRequest
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
     * @return RequestObjectOfAPIProductDeleteAdditionalBarcodeRequest
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return APIProductDeleteAdditionalBarcodeRequest
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param APIProductDeleteAdditionalBarcodeRequest $Content
     * @return RequestObjectOfAPIProductDeleteAdditionalBarcodeRequest
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
