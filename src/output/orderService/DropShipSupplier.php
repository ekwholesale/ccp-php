<?php

class DropShipSupplier
{

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var int $SupplierID
     */
    protected $SupplierID = null;

    /**
     * @var string $ManufacturerSKU
     */
    protected $ManufacturerSKU = null;

    /**
     * @var string $SupplierSKU
     */
    protected $SupplierSKU = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var FactoryPOType $DropshipType
     */
    protected $DropshipType = null;

    /**
     * @param int $ProductId
     * @param int $SupplierID
     * @param int $Quantity
     * @param FactoryPOType $DropshipType
     */
    public function __construct($ProductId, $SupplierID, $Quantity, $DropshipType)
    {
      $this->ProductId = $ProductId;
      $this->SupplierID = $SupplierID;
      $this->Quantity = $Quantity;
      $this->DropshipType = $DropshipType;
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
     * @return DropShipSupplier
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSupplierID()
    {
      return $this->SupplierID;
    }

    /**
     * @param int $SupplierID
     * @return DropShipSupplier
     */
    public function setSupplierID($SupplierID)
    {
      $this->SupplierID = $SupplierID;
      return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerSKU()
    {
      return $this->ManufacturerSKU;
    }

    /**
     * @param string $ManufacturerSKU
     * @return DropShipSupplier
     */
    public function setManufacturerSKU($ManufacturerSKU)
    {
      $this->ManufacturerSKU = $ManufacturerSKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierSKU()
    {
      return $this->SupplierSKU;
    }

    /**
     * @param string $SupplierSKU
     * @return DropShipSupplier
     */
    public function setSupplierSKU($SupplierSKU)
    {
      $this->SupplierSKU = $SupplierSKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierName()
    {
      return $this->SupplierName;
    }

    /**
     * @param string $SupplierName
     * @return DropShipSupplier
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
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
     * @return DropShipSupplier
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return FactoryPOType
     */
    public function getDropshipType()
    {
      return $this->DropshipType;
    }

    /**
     * @param FactoryPOType $DropshipType
     * @return DropShipSupplier
     */
    public function setDropshipType($DropshipType)
    {
      $this->DropshipType = $DropshipType;
      return $this;
    }

}
