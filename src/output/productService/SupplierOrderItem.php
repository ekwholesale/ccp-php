<?php

class SupplierOrderItem
{

    /**
     * @var int $FactoryOrderID
     */
    protected $FactoryOrderID = null;

    /**
     * @var int $QuantityOrdered
     */
    protected $QuantityOrdered = null;

    /**
     * @var int $QuantityDelivered
     */
    protected $QuantityDelivered = null;

    /**
     * @var int $FactoryID
     */
    protected $FactoryID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var \DateTime $POSent
     */
    protected $POSent = null;

    /**
     * @var string $Date
     */
    protected $Date = null;

    /**
     * @param int $FactoryOrderID
     * @param int $QuantityOrdered
     * @param int $QuantityDelivered
     * @param int $FactoryID
     * @param \DateTime $POSent
     */
    public function __construct($FactoryOrderID, $QuantityOrdered, $QuantityDelivered, $FactoryID, \DateTime $POSent)
    {
      $this->FactoryOrderID = $FactoryOrderID;
      $this->QuantityOrdered = $QuantityOrdered;
      $this->QuantityDelivered = $QuantityDelivered;
      $this->FactoryID = $FactoryID;
      $this->POSent = $POSent->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getFactoryOrderID()
    {
      return $this->FactoryOrderID;
    }

    /**
     * @param int $FactoryOrderID
     * @return SupplierOrderItem
     */
    public function setFactoryOrderID($FactoryOrderID)
    {
      $this->FactoryOrderID = $FactoryOrderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityOrdered()
    {
      return $this->QuantityOrdered;
    }

    /**
     * @param int $QuantityOrdered
     * @return SupplierOrderItem
     */
    public function setQuantityOrdered($QuantityOrdered)
    {
      $this->QuantityOrdered = $QuantityOrdered;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityDelivered()
    {
      return $this->QuantityDelivered;
    }

    /**
     * @param int $QuantityDelivered
     * @return SupplierOrderItem
     */
    public function setQuantityDelivered($QuantityDelivered)
    {
      $this->QuantityDelivered = $QuantityDelivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getFactoryID()
    {
      return $this->FactoryID;
    }

    /**
     * @param int $FactoryID
     * @return SupplierOrderItem
     */
    public function setFactoryID($FactoryID)
    {
      $this->FactoryID = $FactoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return SupplierOrderItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPOSent()
    {
      if ($this->POSent == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->POSent);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $POSent
     * @return SupplierOrderItem
     */
    public function setPOSent(\DateTime $POSent)
    {
      $this->POSent = $POSent->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param string $Date
     * @return SupplierOrderItem
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

}
