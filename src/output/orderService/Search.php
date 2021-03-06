<?php

class Search
{

    /**
     * @var RequestObjectOfApiOrderQuery $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfApiOrderQuery $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfApiOrderQuery
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfApiOrderQuery $request
     * @return Search
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
