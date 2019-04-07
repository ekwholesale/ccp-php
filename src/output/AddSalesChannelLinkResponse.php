<?php

class AddSalesChannelLinkResponse
{

    /**
     * @var ResponseObjectOfAPIProduct $AddSalesChannelLinkResult
     */
    protected $AddSalesChannelLinkResult = null;

    /**
     * @param ResponseObjectOfAPIProduct $AddSalesChannelLinkResult
     */
    public function __construct($AddSalesChannelLinkResult)
    {
      $this->AddSalesChannelLinkResult = $AddSalesChannelLinkResult;
    }

    /**
     * @return ResponseObjectOfAPIProduct
     */
    public function getAddSalesChannelLinkResult()
    {
      return $this->AddSalesChannelLinkResult;
    }

    /**
     * @param ResponseObjectOfAPIProduct $AddSalesChannelLinkResult
     * @return AddSalesChannelLinkResponse
     */
    public function setAddSalesChannelLinkResult($AddSalesChannelLinkResult)
    {
      $this->AddSalesChannelLinkResult = $AddSalesChannelLinkResult;
      return $this;
    }

}
