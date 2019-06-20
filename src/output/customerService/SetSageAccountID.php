<?php

class SetSageAccountID
{

    /**
     * @var RequestObjectOfSetSageAccountIDRequest $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfSetSageAccountIDRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfSetSageAccountIDRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfSetSageAccountIDRequest $request
     * @return SetSageAccountID
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
