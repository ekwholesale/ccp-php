<?php

class GetStockLevelsBySKUListResponse
{

    /**
     * @var ResponseObjectOfListOfAPIProductStockLevel $GetStockLevelsBySKUListResult
     */
    protected $GetStockLevelsBySKUListResult = null;

    /**
     * @param ResponseObjectOfListOfAPIProductStockLevel $GetStockLevelsBySKUListResult
     */
    public function __construct($GetStockLevelsBySKUListResult)
    {
      $this->GetStockLevelsBySKUListResult = $GetStockLevelsBySKUListResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIProductStockLevel
     */
    public function getGetStockLevelsBySKUListResult()
    {
      return $this->GetStockLevelsBySKUListResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIProductStockLevel $GetStockLevelsBySKUListResult
     * @return GetStockLevelsBySKUListResponse
     */
    public function setGetStockLevelsBySKUListResult($GetStockLevelsBySKUListResult)
    {
      $this->GetStockLevelsBySKUListResult = $GetStockLevelsBySKUListResult;
      return $this;
    }

}
