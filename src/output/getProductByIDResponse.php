<?php

class getProductByIDResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $getProductByIDResult
     */
    protected $getProductByIDResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $getProductByIDResult
     */
    public function __construct($getProductByIDResult)
    {
      $this->getProductByIDResult = $getProductByIDResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getGetProductByIDResult()
    {
      return $this->getProductByIDResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $getProductByIDResult
     * @return getProductByIDResponse
     */
    public function setGetProductByIDResult($getProductByIDResult)
    {
      $this->getProductByIDResult = $getProductByIDResult;
      return $this;
    }

}
