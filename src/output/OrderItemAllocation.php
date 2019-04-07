<?php

class OrderItemAllocation
{

    /**
     * @var int $CustomerOrderItemId
     */
    protected $CustomerOrderItemId = null;

    /**
     * @var int $Dispatched
     */
    protected $Dispatched = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $ItemIds
     */
    protected $ItemIds = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $Allocated
     */
    protected $Allocated = null;

    /**
     * @var int $Picked
     */
    protected $Picked = null;

    /**
     * @var ArrayOfString $Attributes
     */
    protected $Attributes = null;

    /**
     * @var string $ProductImageUrl
     */
    protected $ProductImageUrl = null;

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var int $DefaultWarehouseBayStockmovementId
     */
    protected $DefaultWarehouseBayStockmovementId = null;

    /**
     * @var int $WarehouseBayId
     */
    protected $WarehouseBayId = null;

    /**
     * @var string $BayName
     */
    protected $BayName = null;

    /**
     * @var string $WarehouseName
     */
    protected $WarehouseName = null;

    /**
     * @var string $AllBayLocations
     */
    protected $AllBayLocations = null;

    /**
     * @var int $RangeId
     */
    protected $RangeId = null;

    /**
     * @var string $RangeSKU
     */
    protected $RangeSKU = null;

    /**
     * @var ArrayOfItemBayStockLevel $BayStockLevels
     */
    protected $BayStockLevels = null;

    /**
     * @param int $CustomerOrderItemId
     * @param int $Dispatched
     * @param int $Quantity
     * @param int $Allocated
     * @param int $Picked
     * @param int $ProductId
     * @param int $OrderId
     * @param int $DefaultWarehouseBayStockmovementId
     * @param int $WarehouseBayId
     * @param int $RangeId
     */
    public function __construct($CustomerOrderItemId, $Dispatched, $Quantity, $Allocated, $Picked, $ProductId, $OrderId, $DefaultWarehouseBayStockmovementId, $WarehouseBayId, $RangeId)
    {
      $this->CustomerOrderItemId = $CustomerOrderItemId;
      $this->Dispatched = $Dispatched;
      $this->Quantity = $Quantity;
      $this->Allocated = $Allocated;
      $this->Picked = $Picked;
      $this->ProductId = $ProductId;
      $this->OrderId = $OrderId;
      $this->DefaultWarehouseBayStockmovementId = $DefaultWarehouseBayStockmovementId;
      $this->WarehouseBayId = $WarehouseBayId;
      $this->RangeId = $RangeId;
    }

    /**
     * @return int
     */
    public function getCustomerOrderItemId()
    {
      return $this->CustomerOrderItemId;
    }

    /**
     * @param int $CustomerOrderItemId
     * @return OrderItemAllocation
     */
    public function setCustomerOrderItemId($CustomerOrderItemId)
    {
      $this->CustomerOrderItemId = $CustomerOrderItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDispatched()
    {
      return $this->Dispatched;
    }

    /**
     * @param int $Dispatched
     * @return OrderItemAllocation
     */
    public function setDispatched($Dispatched)
    {
      $this->Dispatched = $Dispatched;
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
     * @return OrderItemAllocation
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
      return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return OrderItemAllocation
     */
    public function setBarcode($Barcode)
    {
      $this->Barcode = $Barcode;
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
     * @return OrderItemAllocation
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemIds()
    {
      return $this->ItemIds;
    }

    /**
     * @param string $ItemIds
     * @return OrderItemAllocation
     */
    public function setItemIds($ItemIds)
    {
      $this->ItemIds = $ItemIds;
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
     * @return OrderItemAllocation
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return OrderItemAllocation
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
     * @return OrderItemAllocation
     */
    public function setPicked($Picked)
    {
      $this->Picked = $Picked;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getAttributes()
    {
      return $this->Attributes;
    }

    /**
     * @param ArrayOfString $Attributes
     * @return OrderItemAllocation
     */
    public function setAttributes($Attributes)
    {
      $this->Attributes = $Attributes;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductImageUrl()
    {
      return $this->ProductImageUrl;
    }

    /**
     * @param string $ProductImageUrl
     * @return OrderItemAllocation
     */
    public function setProductImageUrl($ProductImageUrl)
    {
      $this->ProductImageUrl = $ProductImageUrl;
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
     * @return OrderItemAllocation
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param int $OrderId
     * @return OrderItemAllocation
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDefaultWarehouseBayStockmovementId()
    {
      return $this->DefaultWarehouseBayStockmovementId;
    }

    /**
     * @param int $DefaultWarehouseBayStockmovementId
     * @return OrderItemAllocation
     */
    public function setDefaultWarehouseBayStockmovementId($DefaultWarehouseBayStockmovementId)
    {
      $this->DefaultWarehouseBayStockmovementId = $DefaultWarehouseBayStockmovementId;
      return $this;
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
     * @return OrderItemAllocation
     */
    public function setWarehouseBayId($WarehouseBayId)
    {
      $this->WarehouseBayId = $WarehouseBayId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBayName()
    {
      return $this->BayName;
    }

    /**
     * @param string $BayName
     * @return OrderItemAllocation
     */
    public function setBayName($BayName)
    {
      $this->BayName = $BayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseName()
    {
      return $this->WarehouseName;
    }

    /**
     * @param string $WarehouseName
     * @return OrderItemAllocation
     */
    public function setWarehouseName($WarehouseName)
    {
      $this->WarehouseName = $WarehouseName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllBayLocations()
    {
      return $this->AllBayLocations;
    }

    /**
     * @param string $AllBayLocations
     * @return OrderItemAllocation
     */
    public function setAllBayLocations($AllBayLocations)
    {
      $this->AllBayLocations = $AllBayLocations;
      return $this;
    }

    /**
     * @return int
     */
    public function getRangeId()
    {
      return $this->RangeId;
    }

    /**
     * @param int $RangeId
     * @return OrderItemAllocation
     */
    public function setRangeId($RangeId)
    {
      $this->RangeId = $RangeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRangeSKU()
    {
      return $this->RangeSKU;
    }

    /**
     * @param string $RangeSKU
     * @return OrderItemAllocation
     */
    public function setRangeSKU($RangeSKU)
    {
      $this->RangeSKU = $RangeSKU;
      return $this;
    }

    /**
     * @return ArrayOfItemBayStockLevel
     */
    public function getBayStockLevels()
    {
      return $this->BayStockLevels;
    }

    /**
     * @param ArrayOfItemBayStockLevel $BayStockLevels
     * @return OrderItemAllocation
     */
    public function setBayStockLevels($BayStockLevels)
    {
      $this->BayStockLevels = $BayStockLevels;
      return $this;
    }

}
