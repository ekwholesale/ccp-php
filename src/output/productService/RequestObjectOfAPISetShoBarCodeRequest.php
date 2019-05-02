<?php

class RequestObjectOfAPISetShoBarCodeRequest
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
     * @var APISetShoBarCodeRequest $Content
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
     * @return RequestObjectOfAPISetShoBarCodeRequest
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
     * @return RequestObjectOfAPISetShoBarCodeRequest
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return APISetShoBarCodeRequest
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param APISetShoBarCodeRequest $Content
     * @return RequestObjectOfAPISetShoBarCodeRequest
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
