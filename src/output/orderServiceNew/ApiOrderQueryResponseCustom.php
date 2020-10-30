<?php

class ApiOrderQueryResponseCustom
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
     * @var int $totalRecords
     */
    protected $totalRecords = null;

    /**
     * @var ArrayOfAPIOrder $orders
     */
    protected $orders = null;

    /**
     * @param int $Start
     * @param int $End
     * @param int $totalRecords
     */
    public function __construct($Start, $End, $totalRecords)
    {
      $this->Start = $Start;
      $this->End = $End;
      $this->totalRecords = $totalRecords;
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
     * @return ApiOrderQueryResponse
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
     * @return ApiOrderQueryResponse
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalRecords()
    {
      return $this->totalRecords;
    }

    /**
     * @param int $totalRecords
     * @return ApiOrderQueryResponse
     */
    public function setTotalRecords($totalRecords)
    {
      $this->totalRecords = $totalRecords;
      return $this;
    }

    /**
     * @return ArrayOfAPIOrder
     */
    public function getOrders()
    {
      return $this->orders;
    }

    /**
     * @param ArrayOfAPIOrder $orders
     * @return ApiOrderQueryResponse
     */
    public function setOrders($orders)
    {
      $this->orders = $orders;
      return $this;
    }

}
