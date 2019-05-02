<?php

class BrandCourierSelectionProduct
{

    /**
     * @var BrandCourierSelectionProductType $BrandCourierSelectionProductTypeEnum
     */
    protected $BrandCourierSelectionProductTypeEnum = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $BrandCourierSelectionProductType
     */
    protected $BrandCourierSelectionProductType = null;

    /**
     * @var int $StatusId
     */
    protected $StatusId = null;

    /**
     * @var StatusID $StatusIdEnum
     */
    protected $StatusIdEnum = null;

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var int $BrandCourierSelectionID
     */
    protected $BrandCourierSelectionID = null;

    /**
     * @var float $QuantityFrom
     */
    protected $QuantityFrom = null;

    /**
     * @var float $QuantityTo
     */
    protected $QuantityTo = null;

    /**
     * @var int $ProductRangeId
     */
    protected $ProductRangeId = null;

    /**
     * @var boolean $IncludeAllRange
     */
    protected $IncludeAllRange = null;

    /**
     * @var boolean $isRequired
     */
    protected $isRequired = null;

    /**
     * @var float $LabelQuantity
     */
    protected $LabelQuantity = null;

    /**
     * @var float $InitialQuantity
     */
    protected $InitialQuantity = null;

    /**
     * @var float $InitialQuantityCost
     */
    protected $InitialQuantityCost = null;

    /**
     * @var float $FurtherQuantity
     */
    protected $FurtherQuantity = null;

    /**
     * @var float $FurtherQuantityCost
     */
    protected $FurtherQuantityCost = null;

    /**
     * @param BrandCourierSelectionProductType $BrandCourierSelectionProductTypeEnum
     * @param int $id
     * @param int $BrandCourierSelectionProductType
     * @param int $StatusId
     * @param StatusID $StatusIdEnum
     * @param int $ProductId
     * @param int $BrandCourierSelectionID
     * @param float $QuantityFrom
     * @param float $QuantityTo
     * @param int $ProductRangeId
     * @param boolean $IncludeAllRange
     * @param boolean $isRequired
     * @param float $LabelQuantity
     * @param float $InitialQuantity
     * @param float $InitialQuantityCost
     * @param float $FurtherQuantity
     * @param float $FurtherQuantityCost
     */
    public function __construct($BrandCourierSelectionProductTypeEnum, $id, $BrandCourierSelectionProductType, $StatusId, $StatusIdEnum, $ProductId, $BrandCourierSelectionID, $QuantityFrom, $QuantityTo, $ProductRangeId, $IncludeAllRange, $isRequired, $LabelQuantity, $InitialQuantity, $InitialQuantityCost, $FurtherQuantity, $FurtherQuantityCost)
    {
      $this->BrandCourierSelectionProductTypeEnum = $BrandCourierSelectionProductTypeEnum;
      $this->id = $id;
      $this->BrandCourierSelectionProductType = $BrandCourierSelectionProductType;
      $this->StatusId = $StatusId;
      $this->StatusIdEnum = $StatusIdEnum;
      $this->ProductId = $ProductId;
      $this->BrandCourierSelectionID = $BrandCourierSelectionID;
      $this->QuantityFrom = $QuantityFrom;
      $this->QuantityTo = $QuantityTo;
      $this->ProductRangeId = $ProductRangeId;
      $this->IncludeAllRange = $IncludeAllRange;
      $this->isRequired = $isRequired;
      $this->LabelQuantity = $LabelQuantity;
      $this->InitialQuantity = $InitialQuantity;
      $this->InitialQuantityCost = $InitialQuantityCost;
      $this->FurtherQuantity = $FurtherQuantity;
      $this->FurtherQuantityCost = $FurtherQuantityCost;
    }

    /**
     * @return BrandCourierSelectionProductType
     */
    public function getBrandCourierSelectionProductTypeEnum()
    {
      return $this->BrandCourierSelectionProductTypeEnum;
    }

    /**
     * @param BrandCourierSelectionProductType $BrandCourierSelectionProductTypeEnum
     * @return BrandCourierSelectionProduct
     */
    public function setBrandCourierSelectionProductTypeEnum($BrandCourierSelectionProductTypeEnum)
    {
      $this->BrandCourierSelectionProductTypeEnum = $BrandCourierSelectionProductTypeEnum;
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
     * @return BrandCourierSelectionProduct
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
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
     * @return BrandCourierSelectionProduct
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getBrandCourierSelectionProductType()
    {
      return $this->BrandCourierSelectionProductType;
    }

    /**
     * @param int $BrandCourierSelectionProductType
     * @return BrandCourierSelectionProduct
     */
    public function setBrandCourierSelectionProductType($BrandCourierSelectionProductType)
    {
      $this->BrandCourierSelectionProductType = $BrandCourierSelectionProductType;
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
     * @return BrandCourierSelectionProduct
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
     * @return BrandCourierSelectionProduct
     */
    public function setStatusIdEnum($StatusIdEnum)
    {
      $this->StatusIdEnum = $StatusIdEnum;
      return $this;
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
     * @return BrandCourierSelectionProduct
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
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
     * @return BrandCourierSelectionProduct
     */
    public function setBrandCourierSelectionID($BrandCourierSelectionID)
    {
      $this->BrandCourierSelectionID = $BrandCourierSelectionID;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityFrom()
    {
      return $this->QuantityFrom;
    }

    /**
     * @param float $QuantityFrom
     * @return BrandCourierSelectionProduct
     */
    public function setQuantityFrom($QuantityFrom)
    {
      $this->QuantityFrom = $QuantityFrom;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantityTo()
    {
      return $this->QuantityTo;
    }

    /**
     * @param float $QuantityTo
     * @return BrandCourierSelectionProduct
     */
    public function setQuantityTo($QuantityTo)
    {
      $this->QuantityTo = $QuantityTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductRangeId()
    {
      return $this->ProductRangeId;
    }

    /**
     * @param int $ProductRangeId
     * @return BrandCourierSelectionProduct
     */
    public function setProductRangeId($ProductRangeId)
    {
      $this->ProductRangeId = $ProductRangeId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeAllRange()
    {
      return $this->IncludeAllRange;
    }

    /**
     * @param boolean $IncludeAllRange
     * @return BrandCourierSelectionProduct
     */
    public function setIncludeAllRange($IncludeAllRange)
    {
      $this->IncludeAllRange = $IncludeAllRange;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRequired()
    {
      return $this->isRequired;
    }

    /**
     * @param boolean $isRequired
     * @return BrandCourierSelectionProduct
     */
    public function setIsRequired($isRequired)
    {
      $this->isRequired = $isRequired;
      return $this;
    }

    /**
     * @return float
     */
    public function getLabelQuantity()
    {
      return $this->LabelQuantity;
    }

    /**
     * @param float $LabelQuantity
     * @return BrandCourierSelectionProduct
     */
    public function setLabelQuantity($LabelQuantity)
    {
      $this->LabelQuantity = $LabelQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getInitialQuantity()
    {
      return $this->InitialQuantity;
    }

    /**
     * @param float $InitialQuantity
     * @return BrandCourierSelectionProduct
     */
    public function setInitialQuantity($InitialQuantity)
    {
      $this->InitialQuantity = $InitialQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getInitialQuantityCost()
    {
      return $this->InitialQuantityCost;
    }

    /**
     * @param float $InitialQuantityCost
     * @return BrandCourierSelectionProduct
     */
    public function setInitialQuantityCost($InitialQuantityCost)
    {
      $this->InitialQuantityCost = $InitialQuantityCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getFurtherQuantity()
    {
      return $this->FurtherQuantity;
    }

    /**
     * @param float $FurtherQuantity
     * @return BrandCourierSelectionProduct
     */
    public function setFurtherQuantity($FurtherQuantity)
    {
      $this->FurtherQuantity = $FurtherQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getFurtherQuantityCost()
    {
      return $this->FurtherQuantityCost;
    }

    /**
     * @param float $FurtherQuantityCost
     * @return BrandCourierSelectionProduct
     */
    public function setFurtherQuantityCost($FurtherQuantityCost)
    {
      $this->FurtherQuantityCost = $FurtherQuantityCost;
      return $this;
    }

}
