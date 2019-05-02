<?php

class MultiPackItem
{

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var int $ProductPricePercentage
     */
    protected $ProductPricePercentage = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @param int $ProductId
     * @param int $ProductPricePercentage
     * @param int $Quantity
     */
    public function __construct($ProductId, $ProductPricePercentage, $Quantity)
    {
      $this->ProductId = $ProductId;
      $this->ProductPricePercentage = $ProductPricePercentage;
      $this->Quantity = $Quantity;
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
     * @return MultiPackItem
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param string $SKU
     * @return MultiPackItem
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductPricePercentage()
    {
      return $this->ProductPricePercentage;
    }

    /**
     * @param int $ProductPricePercentage
     * @return MultiPackItem
     */
    public function setProductPricePercentage($ProductPricePercentage)
    {
      $this->ProductPricePercentage = $ProductPricePercentage;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return MultiPackItem
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
