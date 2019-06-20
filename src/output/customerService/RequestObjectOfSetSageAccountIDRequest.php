<?php

class RequestObjectOfSetSageAccountIDRequest
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
     * @var SetSageAccountIDRequest $Content
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
     * @return RequestObjectOfSetSageAccountIDRequest
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
     * @return RequestObjectOfSetSageAccountIDRequest
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return SetSageAccountIDRequest
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param SetSageAccountIDRequest $Content
     * @return RequestObjectOfSetSageAccountIDRequest
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
