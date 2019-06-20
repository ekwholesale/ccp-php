<?php

class SearchResponseCustom
{

    /**
     * @var ResponseObjectOfAPICustomerList $SearchResult
     */
    protected $SearchResult = null;

    /**
     * @param ResponseObjectOfAPICustomerList $SearchResult
     */
    public function __construct($SearchResult)
    {
      $this->SearchResult = $SearchResult;
    }

    /**
     * @return ResponseObjectOfAPICustomerList
     */
    public function getSearchResult()
    {
      return $this->SearchResult;
    }

    /**
     * @param ResponseObjectOfAPICustomerList $SearchResult
     * @return SearchResponse
     */
    public function setSearchResult($SearchResult)
    {
      $this->SearchResult = $SearchResult;
      return $this;
    }

}
