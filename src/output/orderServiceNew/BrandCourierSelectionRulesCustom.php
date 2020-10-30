<?php

class BrandCourierSelectionRulesCustom
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $BrandCourierSelectionID
     */
    protected $BrandCourierSelectionID = null;

    /**
     * @var string $RuleName
     */
    protected $RuleName = null;

    /**
     * @var string $Field
     */
    protected $Field = null;

    /**
     * @var string $Operator
     */
    protected $Operator = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var int $StatusId
     */
    protected $StatusId = null;

    /**
     * @var StatusID $StatusIdEnum
     */
    protected $StatusIdEnum = null;

    /**
     * @var boolean $IsOptional
     */
    protected $IsOptional = null;

    /**
     * @param int $id
     * @param int $BrandID
     * @param int $BrandCourierSelectionID
     * @param int $StatusId
     * @param StatusID $StatusIdEnum
     * @param boolean $IsOptional
     */
    public function __construct($id, $BrandID, $BrandCourierSelectionID, $StatusId, $StatusIdEnum, $IsOptional)
    {
      $this->id = $id;
      $this->BrandID = $BrandID;
      $this->BrandCourierSelectionID = $BrandCourierSelectionID;
      $this->StatusId = $StatusId;
      $this->StatusIdEnum = $StatusIdEnum;
      $this->IsOptional = $IsOptional;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return BrandCourierSelectionRules
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return BrandCourierSelectionRules
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return int
     */
    public function getBrandCourierSelectionID()
    {
      return $this->BrandCourierSelectionID;
    }

    /**
     * @param int $BrandCourierSelectionID
     * @return BrandCourierSelectionRules
     */
    public function setBrandCourierSelectionID($BrandCourierSelectionID)
    {
      $this->BrandCourierSelectionID = $BrandCourierSelectionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleName()
    {
      return $this->RuleName;
    }

    /**
     * @param string $RuleName
     * @return BrandCourierSelectionRules
     */
    public function setRuleName($RuleName)
    {
      $this->RuleName = $RuleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param string $Field
     * @return BrandCourierSelectionRules
     */
    public function setField($Field)
    {
      $this->Field = $Field;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
      return $this->Operator;
    }

    /**
     * @param string $Operator
     * @return BrandCourierSelectionRules
     */
    public function setOperator($Operator)
    {
      $this->Operator = $Operator;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return BrandCourierSelectionRules
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusId()
    {
      return $this->StatusId;
    }

    /**
     * @param int $StatusId
     * @return BrandCourierSelectionRules
     */
    public function setStatusId($StatusId)
    {
      $this->StatusId = $StatusId;
      return $this;
    }

    /**
     * @return StatusID
     */
    public function getStatusIdEnum()
    {
      return $this->StatusIdEnum;
    }

    /**
     * @param StatusID $StatusIdEnum
     * @return BrandCourierSelectionRules
     */
    public function setStatusIdEnum($StatusIdEnum)
    {
      $this->StatusIdEnum = $StatusIdEnum;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOptional()
    {
      return $this->IsOptional;
    }

    /**
     * @param boolean $IsOptional
     * @return BrandCourierSelectionRules
     */
    public function setIsOptional($IsOptional)
    {
      $this->IsOptional = $IsOptional;
      return $this;
    }

}
