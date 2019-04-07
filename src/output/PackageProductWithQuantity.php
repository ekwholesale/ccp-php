<?php

class PackageProductWithQuantity
{

    /**
     * @var objProduct $Product
     */
    protected $Product = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $ProductPricePercentage
     */
    protected $ProductPricePercentage = null;

    /**
     * @var string $StatusID
     */
    protected $StatusID = null;

    /**
     * @param int $Quantity
     * @param float $ProductPricePercentage
     */
    public function __construct($Quantity, $ProductPricePercentage)
    {
      $this->Quantity = $Quantity;
      $this->ProductPricePercentage = $ProductPricePercentage;
    }

    /**
     * @return objProduct
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param objProduct $Product
     * @return PackageProductWithQuantity
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
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
     * @return PackageProductWithQuantity
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getProductPricePercentage()
    {
      return $this->ProductPricePercentage;
    }

    /**
     * @param float $ProductPricePercentage
     * @return PackageProductWithQuantity
     */
    public function setProductPricePercentage($ProductPricePercentage)
    {
      $this->ProductPricePercentage = $ProductPricePercentage;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusID()
    {
      return $this->StatusID;
    }

    /**
     * @param string $StatusID
     * @return PackageProductWithQuantity
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

}
