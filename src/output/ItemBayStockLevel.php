<?php

class ItemBayStockLevel
{

    /**
     * @var int $WarehouseBayId
     */
    protected $WarehouseBayId = null;

    /**
     * @var string $WarehouseBayName
     */
    protected $WarehouseBayName = null;

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var int $positionOnRoute
     */
    protected $positionOnRoute = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $OldAmount
     */
    protected $OldAmount = null;

    /**
     * @var int $WarehouseBayStockMovementId
     */
    protected $WarehouseBayStockMovementId = null;

    /**
     * @var int $Available
     */
    protected $Available = null;

    /**
     * @var int $Allocated
     */
    protected $Allocated = null;

    /**
     * @var int $Picked
     */
    protected $Picked = null;

    /**
     * @param int $WarehouseBayId
     * @param int $ProductId
     * @param int $positionOnRoute
     * @param int $Quantity
     * @param int $OldAmount
     * @param int $WarehouseBayStockMovementId
     * @param int $Available
     * @param int $Allocated
     * @param int $Picked
     */
    public function __construct($WarehouseBayId, $ProductId, $positionOnRoute, $Quantity, $OldAmount, $WarehouseBayStockMovementId, $Available, $Allocated, $Picked)
    {
      $this->WarehouseBayId = $WarehouseBayId;
      $this->ProductId = $ProductId;
      $this->positionOnRoute = $positionOnRoute;
      $this->Quantity = $Quantity;
      $this->OldAmount = $OldAmount;
      $this->WarehouseBayStockMovementId = $WarehouseBayStockMovementId;
      $this->Available = $Available;
      $this->Allocated = $Allocated;
      $this->Picked = $Picked;
    }

    /**
     * @return int
     */
    public function getWarehouseBayId()
    {
      return $this->WarehouseBayId;
    }

    /**
     * @param int $WarehouseBayId
     * @return ItemBayStockLevel
     */
    public function setWarehouseBayId($WarehouseBayId)
    {
      $this->WarehouseBayId = $WarehouseBayId;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseBayName()
    {
      return $this->WarehouseBayName;
    }

    /**
     * @param string $WarehouseBayName
     * @return ItemBayStockLevel
     */
    public function setWarehouseBayName($WarehouseBayName)
    {
      $this->WarehouseBayName = $WarehouseBayName;
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
     * @return ItemBayStockLevel
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
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
     * @return ItemBayStockLevel
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return int
     */
    public function getPositionOnRoute()
    {
      return $this->positionOnRoute;
    }

    /**
     * @param int $positionOnRoute
     * @return ItemBayStockLevel
     */
    public function setPositionOnRoute($positionOnRoute)
    {
      $this->positionOnRoute = $positionOnRoute;
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
     * @return ItemBayStockLevel
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getOldAmount()
    {
      return $this->OldAmount;
    }

    /**
     * @param int $OldAmount
     * @return ItemBayStockLevel
     */
    public function setOldAmount($OldAmount)
    {
      $this->OldAmount = $OldAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseBayStockMovementId()
    {
      return $this->WarehouseBayStockMovementId;
    }

    /**
     * @param int $WarehouseBayStockMovementId
     * @return ItemBayStockLevel
     */
    public function setWarehouseBayStockMovementId($WarehouseBayStockMovementId)
    {
      $this->WarehouseBayStockMovementId = $WarehouseBayStockMovementId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAvailable()
    {
      return $this->Available;
    }

    /**
     * @param int $Available
     * @return ItemBayStockLevel
     */
    public function setAvailable($Available)
    {
      $this->Available = $Available;
      return $this;
    }

    /**
     * @return int
     */
    public function getAllocated()
    {
      return $this->Allocated;
    }

    /**
     * @param int $Allocated
     * @return ItemBayStockLevel
     */
    public function setAllocated($Allocated)
    {
      $this->Allocated = $Allocated;
      return $this;
    }

    /**
     * @return int
     */
    public function getPicked()
    {
      return $this->Picked;
    }

    /**
     * @param int $Picked
     * @return ItemBayStockLevel
     */
    public function setPicked($Picked)
    {
      $this->Picked = $Picked;
      return $this;
    }

}
