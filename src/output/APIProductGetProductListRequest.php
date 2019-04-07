<?php

class APIProductGetProductListRequest
{

    /**
     * @var int $SalesChannelID
     */
    protected $SalesChannelID = null;

    /**
     * @var int $Start
     */
    protected $Start = null;

    /**
     * @var int $End
     */
    protected $End = null;

    /**
     * @var ArrayOfString $SKUList
     */
    protected $SKUList = null;

    /**
     * @param int $SalesChannelID
     * @param int $Start
     * @param int $End
     */
    public function __construct($SalesChannelID, $Start, $End)
    {
      $this->SalesChannelID = $SalesChannelID;
      $this->Start = $Start;
      $this->End = $End;
    }

    /**
     * @return int
     */
    public function getSalesChannelID()
    {
      return $this->SalesChannelID;
    }

    /**
     * @param int $SalesChannelID
     * @return APIProductGetProductListRequest
     */
    public function setSalesChannelID($SalesChannelID)
    {
      $this->SalesChannelID = $SalesChannelID;
      return $this;
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
     * @return APIProductGetProductListRequest
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
     * @return APIProductGetProductListRequest
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getSKUList()
    {
      return $this->SKUList;
    }

    /**
     * @param ArrayOfString $SKUList
     * @return APIProductGetProductListRequest
     */
    public function setSKUList($SKUList)
    {
      $this->SKUList = $SKUList;
      return $this;
    }

}
