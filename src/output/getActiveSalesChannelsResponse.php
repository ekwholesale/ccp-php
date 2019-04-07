<?php

class getActiveSalesChannelsResponse
{

    /**
     * @var ResponseObjectOfListOfAPISalesChannel $getActiveSalesChannelsResult
     */
    protected $getActiveSalesChannelsResult = null;

    /**
     * @param ResponseObjectOfListOfAPISalesChannel $getActiveSalesChannelsResult
     */
    public function __construct($getActiveSalesChannelsResult)
    {
      $this->getActiveSalesChannelsResult = $getActiveSalesChannelsResult;
    }

    /**
     * @return ResponseObjectOfListOfAPISalesChannel
     */
    public function getGetActiveSalesChannelsResult()
    {
      return $this->getActiveSalesChannelsResult;
    }

    /**
     * @param ResponseObjectOfListOfAPISalesChannel $getActiveSalesChannelsResult
     * @return getActiveSalesChannelsResponse
     */
    public function setGetActiveSalesChannelsResult($getActiveSalesChannelsResult)
    {
      $this->getActiveSalesChannelsResult = $getActiveSalesChannelsResult;
      return $this;
    }

}
