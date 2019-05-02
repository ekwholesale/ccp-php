<?php

class APIStockChange
{

    /**
     * @var int $BayID
     */
    protected $BayID = null;

    /**
     * @var string $BayCode
     */
    protected $BayCode = null;

    /**
     * @var int $ChangeType
     */
    protected $ChangeType = null;

    /**
     * @var StockChangeType $StockChangeType
     */
    protected $StockChangeType = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @param int $BayID
     * @param int $ChangeType
     * @param StockChangeType $StockChangeType
     * @param int $ProductID
     * @param int $Quantity
     */
    public function __construct($BayID, $ChangeType, $StockChangeType, $ProductID, $Quantity)
    {
      $this->BayID = $BayID;
      $this->ChangeType = $ChangeType;
      $this->StockChangeType = $StockChangeType;
      $this->ProductID = $ProductID;
      $this->Quantity = $Quantity;
    }

    /**
     * @return int
     */
    public function getBayID()
    {
      return $this->BayID;
    }

    /**
     * @param int $BayID
     * @return APIStockChange
     */
    public function setBayID($BayID)
    {
      $this->BayID = $BayID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBayCode()
    {
      return $this->BayCode;
    }

    /**
     * @param string $BayCode
     * @return APIStockChange
     */
    public function setBayCode($BayCode)
    {
      $this->BayCode = $BayCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getChangeType()
    {
      return $this->ChangeType;
    }

    /**
     * @param int $ChangeType
     * @return APIStockChange
     */
    public function setChangeType($ChangeType)
    {
      $this->ChangeType = $ChangeType;
      return $this;
    }

    /**
     * @return StockChangeType
     */
    public function getStockChangeType()
    {
      return $this->StockChangeType;
    }

    /**
     * @param StockChangeType $StockChangeType
     * @return APIStockChange
     */
    public function setStockChangeType($StockChangeType)
    {
      $this->StockChangeType = $StockChangeType;
      return $this;
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
     * @return APIStockChange
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
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
     * @return APIStockChange
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
