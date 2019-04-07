<?php

class RequestObjectOfListOfAPIProductSalesChannelLink
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
     * @var ArrayOfAPIProductSalesChannelLink $Content
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
     * @return RequestObjectOfListOfAPIProductSalesChannelLink
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
     * @return RequestObjectOfListOfAPIProductSalesChannelLink
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return ArrayOfAPIProductSalesChannelLink
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param ArrayOfAPIProductSalesChannelLink $Content
     * @return RequestObjectOfListOfAPIProductSalesChannelLink
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
