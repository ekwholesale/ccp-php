<?php

class APIProductList
{

    /**
     * @var int $Start
     */
    protected $Start = null;

    /**
     * @var int $End
     */
    protected $End = null;

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var int $TotalProductsInBrand
     */
    protected $TotalProductsInBrand = null;

    /**
     * @var int $TotalProductsInSalesChannel
     */
    protected $TotalProductsInSalesChannel = null;

    /**
     * @var ArrayOfAPIProduct $products
     */
    protected $products = null;

    /**
     * @param int $Start
     * @param int $End
     * @param int $TotalCount
     * @param int $TotalProductsInBrand
     * @param int $TotalProductsInSalesChannel
     */
    public function __construct($Start, $End, $TotalCount, $TotalProductsInBrand, $TotalProductsInSalesChannel)
    {
      $this->Start = $Start;
      $this->End = $End;
      $this->TotalCount = $TotalCount;
      $this->TotalProductsInBrand = $TotalProductsInBrand;
      $this->TotalProductsInSalesChannel = $TotalProductsInSalesChannel;
    }

    /**
     * @return int
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param int $Start
     * @return APIProductList
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return int
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param int $End
     * @return APIProductList
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
      return $this->TotalCount;
    }

    /**
     * @param int $TotalCount
     * @return APIProductList
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalProductsInBrand()
    {
      return $this->TotalProductsInBrand;
    }

    /**
     * @param int $TotalProductsInBrand
     * @return APIProductList
     */
    public function setTotalProductsInBrand($TotalProductsInBrand)
    {
      $this->TotalProductsInBrand = $TotalProductsInBrand;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalProductsInSalesChannel()
    {
      return $this->TotalProductsInSalesChannel;
    }

    /**
     * @param int $TotalProductsInSalesChannel
     * @return APIProductList
     */
    public function setTotalProductsInSalesChannel($TotalProductsInSalesChannel)
    {
      $this->TotalProductsInSalesChannel = $TotalProductsInSalesChannel;
      return $this;
    }

    /**
     * @return ArrayOfAPIProduct
     */
    public function getProducts()
    {
      return $this->products;
    }

    /**
     * @param ArrayOfAPIProduct $products
     * @return APIProductList
     */
    public function setProducts($products)
    {
      $this->products = $products;
      return $this;
    }

}
