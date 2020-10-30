<?php

class RequestObjectOfAPIOrderCreateOrderRequestCustom
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
     * @var APIOrderCreateOrderRequest $Content
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
     * @return RequestObjectOfAPIOrderCreateOrderRequest
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
     * @return RequestObjectOfAPIOrderCreateOrderRequest
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return APIOrderCreateOrderRequest
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param APIOrderCreateOrderRequest $Content
     * @return RequestObjectOfAPIOrderCreateOrderRequest
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
