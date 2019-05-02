<?php

class SearchResponse
{

    /**
     * @var ResponseObjectOfApiOrderQueryResponse $SearchResult
     */
    protected $SearchResult = null;

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $SearchResult
     */
    public function __construct($SearchResult)
    {
      $this->SearchResult = $SearchResult;
    }

    /**
     * @return ResponseObjectOfApiOrderQueryResponse
     */
    public function getSearchResult()
    {
      return $this->SearchResult;
    }

    /**
     * @param ResponseObjectOfApiOrderQueryResponse $SearchResult
     * @return SearchResponse
     */
    public function setSearchResult($SearchResult)
    {
      $this->SearchResult = $SearchResult;
      return $this;
    }

}
