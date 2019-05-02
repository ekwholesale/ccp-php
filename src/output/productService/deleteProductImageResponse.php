<?php

class deleteProductImageResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $deleteProductImageResult
     */
    protected $deleteProductImageResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $deleteProductImageResult
     */
    public function __construct($deleteProductImageResult)
    {
      $this->deleteProductImageResult = $deleteProductImageResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getDeleteProductImageResult()
    {
      return $this->deleteProductImageResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $deleteProductImageResult
     * @return deleteProductImageResponse
     */
    public function setDeleteProductImageResult($deleteProductImageResult)
    {
      $this->deleteProductImageResult = $deleteProductImageResult;
      return $this;
    }

}
