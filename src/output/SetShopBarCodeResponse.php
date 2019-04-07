<?php

class SetShopBarCodeResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $SetShopBarCodeResult
     */
    protected $SetShopBarCodeResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $SetShopBarCodeResult
     */
    public function __construct($SetShopBarCodeResult)
    {
      $this->SetShopBarCodeResult = $SetShopBarCodeResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getSetShopBarCodeResult()
    {
      return $this->SetShopBarCodeResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $SetShopBarCodeResult
     * @return SetShopBarCodeResponse
     */
    public function setSetShopBarCodeResult($SetShopBarCodeResult)
    {
      $this->SetShopBarCodeResult = $SetShopBarCodeResult;
      return $this;
    }

}
