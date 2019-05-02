<?php

class RequestObjectOfApiOrderQueryRequest
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
     * @var ApiOrderQueryRequest $Content
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
     * @return RequestObjectOfApiOrderQueryRequest
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
     * @return RequestObjectOfApiOrderQueryRequest
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return ApiOrderQueryRequest
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param ApiOrderQueryRequest $Content
     * @return RequestObjectOfApiOrderQueryRequest
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
