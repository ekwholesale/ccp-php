<?php

class AddProductImageResponse
{

    /**
     * @var ResponseObjectOfInt32 $AddProductImageResult
     */
    protected $AddProductImageResult = null;

    /**
     * @param ResponseObjectOfInt32 $AddProductImageResult
     */
    public function __construct($AddProductImageResult)
    {
      $this->AddProductImageResult = $AddProductImageResult;
    }

    /**
     * @return ResponseObjectOfInt32
     */
    public function getAddProductImageResult()
    {
      return $this->AddProductImageResult;
    }

    /**
     * @param ResponseObjectOfInt32 $AddProductImageResult
     * @return AddProductImageResponse
     */
    public function setAddProductImageResult($AddProductImageResult)
    {
      $this->AddProductImageResult = $AddProductImageResult;
      return $this;
    }

}
