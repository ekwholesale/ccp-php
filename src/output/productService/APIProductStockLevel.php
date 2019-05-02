<?php

class APIProductStockLevel
{

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var int $StockLevel
     */
    protected $StockLevel = null;

    /**
     * @param int $ProductID
     * @param int $StockLevel
     */
    public function __construct($ProductID, $StockLevel)
    {
      $this->ProductID = $ProductID;
      $this->StockLevel = $StockLevel;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return APIProductStockLevel
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
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
     * @return APIProductStockLevel
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
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
     * @return APIProductStockLevel
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return int
     */
    public function getStockLevel()
    {
      return $this->StockLevel;
    }

    /**
     * @param int $StockLevel
     * @return APIProductStockLevel
     */
    public function setStockLevel($StockLevel)
    {
      $this->StockLevel = $StockLevel;
      return $this;
    }

}
