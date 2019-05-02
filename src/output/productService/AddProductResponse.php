<?php

class AddProductResponse
{

    /**
     * @var ResponseObjectOfInt32 $AddProductResult
     */
    protected $AddProductResult = null;

    /**
     * @param ResponseObjectOfInt32 $AddProductResult
     */
    public function __construct($AddProductResult)
    {
      $this->AddProductResult = $AddProductResult;
    }

    /**
     * @return ResponseObjectOfInt32
     */
    public function getAddProductResult()
    {
      return $this->AddProductResult;
    }

    /**
     * @param ResponseObjectOfInt32 $AddProductResult
     * @return AddProductResponse
     */
    public function setAddProductResult($AddProductResult)
    {
      $this->AddProductResult = $AddProductResult;
      return $this;
    }

}
