<?php

class ProductOptionValueCustom2
{

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var int $RangeId
     */
    protected $RangeId = null;

    /**
     * @var int $OptionId
     */
    protected $OptionId = null;

    /**
     * @var int $ValueId
     */
    protected $ValueId = null;

    /**
     * @var boolean $IsMasterOption
     */
    protected $IsMasterOption = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var string $RangeName
     */
    protected $RangeName = null;

    /**
     * @var string $OptionName
     */
    protected $OptionName = null;

    /**
     * @var string $OptionValue
     */
    protected $OptionValue = null;

    /**
     * @var string $ProductSKU
     */
    protected $ProductSKU = null;

    /**
     * @var string $RangeSKU
     */
    protected $RangeSKU = null;

    /**
     * @var boolean $isDropdown
     */
    protected $isDropdown = null;

    /**
     * @var boolean $IsFilter
     */
    protected $IsFilter = null;

    /**
     * @param int $ProductId
     * @param int $RangeId
     * @param int $OptionId
     * @param int $ValueId
     * @param boolean $IsMasterOption
     * @param boolean $isDropdown
     * @param boolean $IsFilter
     */
    public function __construct($ProductId, $RangeId, $OptionId, $ValueId, $IsMasterOption, $isDropdown, $IsFilter)
    {
      $this->ProductId = $ProductId;
      $this->RangeId = $RangeId;
      $this->OptionId = $OptionId;
      $this->ValueId = $ValueId;
      $this->IsMasterOption = $IsMasterOption;
      $this->isDropdown = $isDropdown;
      $this->IsFilter = $IsFilter;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->ProductId;
    }

    /**
     * @param int $ProductId
     * @return ProductOptionValue
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getRangeId()
    {
      return $this->RangeId;
    }

    /**
     * @param int $RangeId
     * @return ProductOptionValue
     */
    public function setRangeId($RangeId)
    {
      $this->RangeId = $RangeId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOptionId()
    {
      return $this->OptionId;
    }

    /**
     * @param int $OptionId
     * @return ProductOptionValue
     */
    public function setOptionId($OptionId)
    {
      $this->OptionId = $OptionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getValueId()
    {
      return $this->ValueId;
    }

    /**
     * @param int $ValueId
     * @return ProductOptionValue
     */
    public function setValueId($ValueId)
    {
      $this->ValueId = $ValueId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMasterOption()
    {
      return $this->IsMasterOption;
    }

    /**
     * @param boolean $IsMasterOption
     * @return ProductOptionValue
     */
    public function setIsMasterOption($IsMasterOption)
    {
      $this->IsMasterOption = $IsMasterOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return ProductOptionValue
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRangeName()
    {
      return $this->RangeName;
    }

    /**
     * @param string $RangeName
     * @return ProductOptionValue
     */
    public function setRangeName($RangeName)
    {
      $this->RangeName = $RangeName;
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
     * @return ProductOptionValue
     */
    public function setOptionName($OptionName)
    {
      $this->OptionName = $OptionName;
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
     * @return ProductOptionValue
     */
    public function setOptionValue($OptionValue)
    {
      $this->OptionValue = $OptionValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductSKU()
    {
      return $this->ProductSKU;
    }

    /**
     * @param string $ProductSKU
     * @return ProductOptionValue
     */
    public function setProductSKU($ProductSKU)
    {
      $this->ProductSKU = $ProductSKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getRangeSKU()
    {
      return $this->RangeSKU;
    }

    /**
     * @param string $RangeSKU
     * @return ProductOptionValue
     */
    public function setRangeSKU($RangeSKU)
    {
      $this->RangeSKU = $RangeSKU;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDropdown()
    {
      return $this->isDropdown;
    }

    /**
     * @param boolean $isDropdown
     * @return ProductOptionValue
     */
    public function setIsDropdown($isDropdown)
    {
      $this->isDropdown = $isDropdown;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFilter()
    {
      return $this->IsFilter;
    }

    /**
     * @param boolean $IsFilter
     * @return ProductOptionValue
     */
    public function setIsFilter($IsFilter)
    {
      $this->IsFilter = $IsFilter;
      return $this;
    }

}
