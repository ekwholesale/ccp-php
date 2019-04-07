<?php

class APIProductImage
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var string $strBS64
     */
    protected $strBS64 = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var string $FileExtension
     */
    protected $FileExtension = null;

    /**
     * @var string $URL
     */
    protected $URL = null;

    /**
     * @param int $ID
     * @param int $ProductID
     * @param int $BrandID
     */
    public function __construct($ID, $ProductID, $BrandID)
    {
      $this->ID = $ID;
      $this->ProductID = $ProductID;
      $this->BrandID = $BrandID;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return APIProductImage
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return APIProductImage
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
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
     * @return APIProductImage
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return string
     */
    public function getStrBS64()
    {
      return $this->strBS64;
    }

    /**
     * @param string $strBS64
     * @return APIProductImage
     */
    public function setStrBS64($strBS64)
    {
      $this->strBS64 = $strBS64;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return APIProductImage
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileExtension()
    {
      return $this->FileExtension;
    }

    /**
     * @param string $FileExtension
     * @return APIProductImage
     */
    public function setFileExtension($FileExtension)
    {
      $this->FileExtension = $FileExtension;
      return $this;
    }

    /**
     * @return string
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param string $URL
     * @return APIProductImage
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

}
