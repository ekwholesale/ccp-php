<?php

class RequestObjectOfAPIProductSalesChannelLink
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
     * @var APIProductSalesChannelLink $Content
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
     * @return RequestObjectOfAPIProductSalesChannelLink
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
     * @return RequestObjectOfAPIProductSalesChannelLink
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return APIProductSalesChannelLink
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param APIProductSalesChannelLink $Content
     * @return RequestObjectOfAPIProductSalesChannelLink
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
