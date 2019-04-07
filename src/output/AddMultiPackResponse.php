<?php

class AddMultiPackResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $AddMultiPackResult
     */
    protected $AddMultiPackResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $AddMultiPackResult
     */
    public function __construct($AddMultiPackResult)
    {
      $this->AddMultiPackResult = $AddMultiPackResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getAddMultiPackResult()
    {
      return $this->AddMultiPackResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $AddMultiPackResult
     * @return AddMultiPackResponse
     */
    public function setAddMultiPackResult($AddMultiPackResult)
    {
      $this->AddMultiPackResult = $AddMultiPackResult;
      return $this;
    }

}
