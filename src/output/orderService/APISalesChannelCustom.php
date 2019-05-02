<?php

class APISalesChannelCustom
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var int $ExternalShopID
     */
    protected $ExternalShopID = null;

    /**
     * @param int $ID
     * @param int $ExternalShopID
     */
    public function __construct($ID, $ExternalShopID)
    {
      $this->ID = $ID;
      $this->ExternalShopID = $ExternalShopID;
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
     * @return APISalesChannel
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return APISalesChannel
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return APISalesChannel
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return APISalesChannel
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalShopID()
    {
      return $this->ExternalShopID;
    }

    /**
     * @param int $ExternalShopID
     * @return APISalesChannel
     */
    public function setExternalShopID($ExternalShopID)
    {
      $this->ExternalShopID = $ExternalShopID;
      return $this;
    }

}
