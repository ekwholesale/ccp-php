<?php

class RequestObjectOfstring
{

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @var string $SecurityHash
     */
    protected $SecurityHash = null;

    
    public function __construct()
    {
    
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
     * @return RequestObjectOfstring
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return RequestObjectOfstring
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
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
     * @return RequestObjectOfstring
     */
    public function setSecurityHash($SecurityHash)
    {
      $this->SecurityHash = $SecurityHash;
      return $this;
    }

}
