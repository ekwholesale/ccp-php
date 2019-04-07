<?php

abstract class BaseDimensions
{

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var float $Length
     */
    protected $Length = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var DimensionMeasurement $DimensionType
     */
    protected $DimensionType = null;

    /**
     * @var WeightMeasurement $WeightType
     */
    protected $WeightType = null;

    /**
     * @param float $Width
     * @param float $Length
     * @param float $Height
     * @param float $Weight
     * @param DimensionMeasurement $DimensionType
     * @param WeightMeasurement $WeightType
     */
    public function __construct($Width, $Length, $Height, $Weight, $DimensionType, $WeightType)
    {
      $this->Width = $Width;
      $this->Length = $Length;
      $this->Height = $Height;
      $this->Weight = $Weight;
      $this->DimensionType = $DimensionType;
      $this->WeightType = $WeightType;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param float $Width
     * @return BaseDimensions
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param float $Length
     * @return BaseDimensions
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param float $Height
     * @return BaseDimensions
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return BaseDimensions
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return DimensionMeasurement
     */
    public function getDimensionType()
    {
      return $this->DimensionType;
    }

    /**
     * @param DimensionMeasurement $DimensionType
     * @return BaseDimensions
     */
    public function setDimensionType($DimensionType)
    {
      $this->DimensionType = $DimensionType;
      return $this;
    }

    /**
     * @return WeightMeasurement
     */
    public function getWeightType()
    {
      return $this->WeightType;
    }

    /**
     * @param WeightMeasurement $WeightType
     * @return BaseDimensions
     */
    public function setWeightType($WeightType)
    {
      $this->WeightType = $WeightType;
      return $this;
    }

}
