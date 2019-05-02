<?php

class SetProductOptionValuesResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $SetProductOptionValuesResult
     */
    protected $SetProductOptionValuesResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $SetProductOptionValuesResult
     */
    public function __construct($SetProductOptionValuesResult)
    {
      $this->SetProductOptionValuesResult = $SetProductOptionValuesResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getSetProductOptionValuesResult()
    {
      return $this->SetProductOptionValuesResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $SetProductOptionValuesResult
     * @return SetProductOptionValuesResponse
     */
    public function setSetProductOptionValuesResult($SetProductOptionValuesResult)
    {
      $this->SetProductOptionValuesResult = $SetProductOptionValuesResult;
      return $this;
    }

}
