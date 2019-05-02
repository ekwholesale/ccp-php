<?php

class AddProductImageByUrl
{

    /**
     * @var RequestObjectOfAPIProductImage $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIProductImage $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIProductImage
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIProductImage $request
     * @return AddProductImageByUrl
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
