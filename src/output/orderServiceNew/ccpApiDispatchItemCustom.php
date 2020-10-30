<?php

class ccpApiDispatchItemCustom
{

    /**
     * @var int $OrderItemId
     */
    protected $OrderItemId = null;

    /**
     * @var int $QuantityToDispatch
     */
    protected $QuantityToDispatch = null;

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @param int $OrderItemId
     * @param int $QuantityToDispatch
     * @param int $ProductId
     */
    public function __construct($OrderItemId, $QuantityToDispatch, $ProductId)
    {
      $this->OrderItemId = $OrderItemId;
      $this->QuantityToDispatch = $QuantityToDispatch;
      $this->ProductId = $ProductId;
    }

    /**
     * @return int
     */
    public function getOrderItemId()
    {
      return $this->OrderItemId;
    }

    /**
     * @param int $OrderItemId
     * @return ccpApiDispatchItem
     */
    public function setOrderItemId($OrderItemId)
    {
      $this->OrderItemId = $OrderItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityToDispatch()
    {
      return $this->QuantityToDispatch;
    }

    /**
     * @param int $QuantityToDispatch
     * @return ccpApiDispatchItem
     */
    public function setQuantityToDispatch($QuantityToDispatch)
    {
      $this->QuantityToDispatch = $QuantityToDispatch;
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
     * @return ccpApiDispatchItem
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
      return $this;
    }

}
