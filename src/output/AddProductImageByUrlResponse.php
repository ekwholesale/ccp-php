<?php

class AddProductImageByUrlResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $AddProductImageByUrlResult
     */
    protected $AddProductImageByUrlResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $AddProductImageByUrlResult
     */
    public function __construct($AddProductImageByUrlResult)
    {
      $this->AddProductImageByUrlResult = $AddProductImageByUrlResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getAddProductImageByUrlResult()
    {
      return $this->AddProductImageByUrlResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $AddProductImageByUrlResult
     * @return AddProductImageByUrlResponse
     */
    public function setAddProductImageByUrlResult($AddProductImageByUrlResult)
    {
      $this->AddProductImageByUrlResult = $AddProductImageByUrlResult;
      return $this;
    }

}
