<?php

class GetStockLevelsBySKUList
{

    /**
     * @var RequestObjectOfListOfString $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfListOfString $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfListOfString
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfListOfString $request
     * @return GetStockLevelsBySKUList
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
