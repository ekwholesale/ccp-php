<?php

class RequestObjectOfAPISetOrderPickStatusRequest
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
     * @var APISetOrderPickStatusRequest $Content
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
     * @return RequestObjectOfAPISetOrderPickStatusRequest
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
     * @return RequestObjectOfAPISetOrderPickStatusRequest
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return APISetOrderPickStatusRequest
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param APISetOrderPickStatusRequest $Content
     * @return RequestObjectOfAPISetOrderPickStatusRequest
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
