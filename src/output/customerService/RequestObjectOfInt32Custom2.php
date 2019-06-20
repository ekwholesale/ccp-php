<?php

class RequestObjectOfInt32Custom2
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
     * @var int $Content
     */
    protected $Content = null;

    /**
     * @param int $BrandID
     * @param int $Content
     */
    public function __construct($BrandID, $Content)
    {
      $this->BrandID = $BrandID;
      $this->Content = $Content;
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
     * @return RequestObjectOfInt32
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
     * @return RequestObjectOfInt32
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

    /**
     * @return int
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param int $Content
     * @return RequestObjectOfInt32
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
