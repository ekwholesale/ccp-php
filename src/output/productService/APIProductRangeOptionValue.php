<?php

class APIProductRangeOptionValue
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $OptionID
     */
    protected $OptionID = null;

    /**
     * @var string $OptionValue
     */
    protected $OptionValue = null;

    /**
     * @var int $OptionSortOrder
     */
    protected $OptionSortOrder = null;

    /**
     * @var string $OptionName
     */
    protected $OptionName = null;

    /**
     * @param int $ID
     * @param int $BrandID
     * @param int $OptionID
     * @param int $OptionSortOrder
     */
    public function __construct($ID, $BrandID, $OptionID, $OptionSortOrder)
    {
      $this->ID = $ID;
      $this->BrandID = $BrandID;
      $this->OptionID = $OptionID;
      $this->OptionSortOrder = $OptionSortOrder;
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
     * @return APIProductRangeOptionValue
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return APIProductRangeOptionValue
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOptionID()
    {
      return $this->OptionID;
    }

    /**
     * @param int $OptionID
     * @return APIProductRangeOptionValue
     */
    public function setOptionID($OptionID)
    {
      $this->OptionID = $OptionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getOptionValue()
    {
      return $this->OptionValue;
    }

    /**
     * @param string $OptionValue
     * @return APIProductRangeOptionValue
     */
    public function setOptionValue($OptionValue)
    {
      $this->OptionValue = $OptionValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getOptionSortOrder()
    {
      return $this->OptionSortOrder;
    }

    /**
     * @param int $OptionSortOrder
     * @return APIProductRangeOptionValue
     */
    public function setOptionSortOrder($OptionSortOrder)
    {
      $this->OptionSortOrder = $OptionSortOrder;
      return $this;
    }

    /**
     * @return string
     */
    public function getOptionName()
    {
      return $this->OptionName;
    }

    /**
     * @param string $OptionName
     * @return APIProductRangeOptionValue
     */
    public function setOptionName($OptionName)
    {
      $this->OptionName = $OptionName;
      return $this;
    }

}
