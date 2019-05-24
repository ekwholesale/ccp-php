<?php

class getProductImagesResponse
{

    /**
     * @var ResponseObjectOfListOfAPIProductImage $getProductImagesResult
     */
    protected $getProductImagesResult = null;

    /**
     * @param ResponseObjectOfListOfAPIProductImage $getProductImagesResult
     */
    public function __construct($getProductImagesResult)
    {
      $this->getProductImagesResult = $getProductImagesResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIProductImage
     */
    public function getProductImagesResult()
    {
      return $this->getProductImagesResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIProductImage $getProductImagesResult
     * @return getProductImagesResponse
     */
    public function setProductImagesResult($getProductImagesResult)
    {
      $this->getProductImagesResult = $getProductImagesResult;
      return $this;
    }

}
