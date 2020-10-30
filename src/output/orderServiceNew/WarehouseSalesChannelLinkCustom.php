<?php

class WarehouseSalesChannelLinkCustom
{

    /**
     * @var WarehouseSalesChannelLinkType $WarehouseSalesChannelLinkTypeEnum
     */
    protected $WarehouseSalesChannelLinkTypeEnum = null;

    /**
     * @var OrderInAction $OrderInActionEnum
     */
    protected $OrderInActionEnum = null;

    /**
     * @var OrderOutAction $OrderOutActionEnum
     */
    protected $OrderOutActionEnum = null;

    /**
     * @var string $WarehouseName
     */
    protected $WarehouseName = null;

    /**
     * @var string $SalesChannelName
     */
    protected $SalesChannelName = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $WarehouseID
     */
    protected $WarehouseID = null;

    /**
     * @var int $WarehouseSalesChannelLinkType
     */
    protected $WarehouseSalesChannelLinkType = null;

    /**
     * @var \DateTime $DateCreated
     */
    protected $DateCreated = null;

    /**
     * @var int $StatusId
     */
    protected $StatusId = null;

    /**
     * @var StatusID $StatusIdEnum
     */
    protected $StatusIdEnum = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var int $SalesChannelId
     */
    protected $SalesChannelId = null;

    /**
     * @var int $OrderInAction
     */
    protected $OrderInAction = null;

    /**
     * @var int $OrderOutAction
     */
    protected $OrderOutAction = null;

    /**
     * @param WarehouseSalesChannelLinkType $WarehouseSalesChannelLinkTypeEnum
     * @param OrderInAction $OrderInActionEnum
     * @param OrderOutAction $OrderOutActionEnum
     * @param int $ID
     * @param int $WarehouseID
     * @param int $WarehouseSalesChannelLinkType
     * @param \DateTime $DateCreated
     * @param int $StatusId
     * @param StatusID $StatusIdEnum
     * @param int $Priority
     * @param int $SalesChannelId
     * @param int $OrderInAction
     * @param int $OrderOutAction
     */
    public function __construct($WarehouseSalesChannelLinkTypeEnum, $OrderInActionEnum, $OrderOutActionEnum, $ID, $WarehouseID, $WarehouseSalesChannelLinkType, \DateTime $DateCreated, $StatusId, $StatusIdEnum, $Priority, $SalesChannelId, $OrderInAction, $OrderOutAction)
    {
      $this->WarehouseSalesChannelLinkTypeEnum = $WarehouseSalesChannelLinkTypeEnum;
      $this->OrderInActionEnum = $OrderInActionEnum;
      $this->OrderOutActionEnum = $OrderOutActionEnum;
      $this->ID = $ID;
      $this->WarehouseID = $WarehouseID;
      $this->WarehouseSalesChannelLinkType = $WarehouseSalesChannelLinkType;
      $this->DateCreated = $DateCreated->format(\DateTime::ATOM);
      $this->StatusId = $StatusId;
      $this->StatusIdEnum = $StatusIdEnum;
      $this->Priority = $Priority;
      $this->SalesChannelId = $SalesChannelId;
      $this->OrderInAction = $OrderInAction;
      $this->OrderOutAction = $OrderOutAction;
    }

    /**
     * @return WarehouseSalesChannelLinkType
     */
    public function getWarehouseSalesChannelLinkTypeEnum()
    {
      return $this->WarehouseSalesChannelLinkTypeEnum;
    }

    /**
     * @param WarehouseSalesChannelLinkType $WarehouseSalesChannelLinkTypeEnum
     * @return WarehouseSalesChannelLink
     */
    public function setWarehouseSalesChannelLinkTypeEnum($WarehouseSalesChannelLinkTypeEnum)
    {
      $this->WarehouseSalesChannelLinkTypeEnum = $WarehouseSalesChannelLinkTypeEnum;
      return $this;
    }

    /**
     * @return OrderInAction
     */
    public function getOrderInActionEnum()
    {
      return $this->OrderInActionEnum;
    }

    /**
     * @param OrderInAction $OrderInActionEnum
     * @return WarehouseSalesChannelLink
     */
    public function setOrderInActionEnum($OrderInActionEnum)
    {
      $this->OrderInActionEnum = $OrderInActionEnum;
      return $this;
    }

    /**
     * @return OrderOutAction
     */
    public function getOrderOutActionEnum()
    {
      return $this->OrderOutActionEnum;
    }

    /**
     * @param OrderOutAction $OrderOutActionEnum
     * @return WarehouseSalesChannelLink
     */
    public function setOrderOutActionEnum($OrderOutActionEnum)
    {
      $this->OrderOutActionEnum = $OrderOutActionEnum;
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
     * @return WarehouseSalesChannelLink
     */
    public function setWarehouseName($WarehouseName)
    {
      $this->WarehouseName = $WarehouseName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSalesChannelName()
    {
      return $this->SalesChannelName;
    }

    /**
     * @param string $SalesChannelName
     * @return WarehouseSalesChannelLink
     */
    public function setSalesChannelName($SalesChannelName)
    {
      $this->SalesChannelName = $SalesChannelName;
      return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return WarehouseSalesChannelLink
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseID()
    {
      return $this->WarehouseID;
    }

    /**
     * @param int $WarehouseID
     * @return WarehouseSalesChannelLink
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseSalesChannelLinkType()
    {
      return $this->WarehouseSalesChannelLinkType;
    }

    /**
     * @param int $WarehouseSalesChannelLinkType
     * @return WarehouseSalesChannelLink
     */
    public function setWarehouseSalesChannelLinkType($WarehouseSalesChannelLinkType)
    {
      $this->WarehouseSalesChannelLinkType = $WarehouseSalesChannelLinkType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
      if ($this->DateCreated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateCreated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateCreated
     * @return WarehouseSalesChannelLink
     */
    public function setDateCreated(\DateTime $DateCreated)
    {
      $this->DateCreated = $DateCreated->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusId()
    {
      return $this->StatusId;
    }

    /**
     * @param int $StatusId
     * @return WarehouseSalesChannelLink
     */
    public function setStatusId($StatusId)
    {
      $this->StatusId = $StatusId;
      return $this;
    }

    /**
     * @return StatusID
     */
    public function getStatusIdEnum()
    {
      return $this->StatusIdEnum;
    }

    /**
     * @param StatusID $StatusIdEnum
     * @return WarehouseSalesChannelLink
     */
    public function setStatusIdEnum($StatusIdEnum)
    {
      $this->StatusIdEnum = $StatusIdEnum;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return WarehouseSalesChannelLink
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return int
     */
    public function getSalesChannelId()
    {
      return $this->SalesChannelId;
    }

    /**
     * @param int $SalesChannelId
     * @return WarehouseSalesChannelLink
     */
    public function setSalesChannelId($SalesChannelId)
    {
      $this->SalesChannelId = $SalesChannelId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderInAction()
    {
      return $this->OrderInAction;
    }

    /**
     * @param int $OrderInAction
     * @return WarehouseSalesChannelLink
     */
    public function setOrderInAction($OrderInAction)
    {
      $this->OrderInAction = $OrderInAction;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderOutAction()
    {
      return $this->OrderOutAction;
    }

    /**
     * @param int $OrderOutAction
     * @return WarehouseSalesChannelLink
     */
    public function setOrderOutAction($OrderOutAction)
    {
      $this->OrderOutAction = $OrderOutAction;
      return $this;
    }

}
