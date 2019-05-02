<?php

class AddMultiPack
{

    /**
     * @var RequestObjectOfAPIAddMultiPackRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIAddMultiPackRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIAddMultiPackRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIAddMultiPackRequest $request
     * @return AddMultiPack
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
