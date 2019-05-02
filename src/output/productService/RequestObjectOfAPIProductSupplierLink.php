<?php

class RequestObjectOfAPIProductSupplierLink
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
     * @var APIProductSupplierLink $Content
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
     * @return RequestObjectOfAPIProductSupplierLink
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
     * @return RequestObjectOfAPIProductSupplierLink
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return APIProductSupplierLink
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param APIProductSupplierLink $Content
     * @return RequestObjectOfAPIProductSupplierLink
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
