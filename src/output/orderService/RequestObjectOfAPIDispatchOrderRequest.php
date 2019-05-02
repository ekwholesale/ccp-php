<?php

class RequestObjectOfAPIDispatchOrderRequest
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
     * @var APIDispatchOrderRequest $Content
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
     * @return RequestObjectOfAPIDispatchOrderRequest
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
     * @return RequestObjectOfAPIDispatchOrderRequest
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return APIDispatchOrderRequest
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param APIDispatchOrderRequest $Content
     * @return RequestObjectOfAPIDispatchOrderRequest
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
