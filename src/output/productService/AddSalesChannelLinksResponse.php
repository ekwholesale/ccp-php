<?php

class AddSalesChannelLinksResponse
{

    /**
     * @var ResponseObjectOfListOfAPIProduct $AddSalesChannelLinksResult
     */
    protected $AddSalesChannelLinksResult = null;

    /**
     * @param ResponseObjectOfListOfAPIProduct $AddSalesChannelLinksResult
     */
    public function __construct($AddSalesChannelLinksResult)
    {
      $this->AddSalesChannelLinksResult = $AddSalesChannelLinksResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIProduct
     */
    public function getAddSalesChannelLinksResult()
    {
      return $this->AddSalesChannelLinksResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIProduct $AddSalesChannelLinksResult
     * @return AddSalesChannelLinksResponse
     */
    public function setAddSalesChannelLinksResult($AddSalesChannelLinksResult)
    {
      $this->AddSalesChannelLinksResult = $AddSalesChannelLinksResult;
      return $this;
    }

}
