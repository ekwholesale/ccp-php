<?php

class ProductDimensions extends BaseDimensions
{

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var int $Labels
     */
    protected $Labels = null;

    /**
     * @param float $Width
     * @param float $Length
     * @param float $Height
     * @param float $Weight
     * @param DimensionMeasurement $DimensionType
     * @param WeightMeasurement $WeightType
     * @param int $ProductId
     * @param int $Labels
     */
    public function __construct($Width, $Length, $Height, $Weight, $DimensionType, $WeightType, $ProductId, $Labels)
    {
      parent::__construct($Width, $Length, $Height, $Weight, $DimensionType, $WeightType);
      $this->ProductId = $ProductId;
      $this->Labels = $Labels;
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
     * @return ProductDimensions
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLabels()
    {
      return $this->Labels;
    }

    /**
     * @param int $Labels
     * @return ProductDimensions
     */
    public function setLabels($Labels)
    {
      $this->Labels = $Labels;
      return $this;
    }

}
