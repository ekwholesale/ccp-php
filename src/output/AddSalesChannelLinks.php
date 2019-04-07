<?php

class AddSalesChannelLinks
{

    /**
     * @var RequestObjectOfListOfAPIProductSalesChannelLink $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfListOfAPIProductSalesChannelLink $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfListOfAPIProductSalesChannelLink
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfListOfAPIProductSalesChannelLink $request
     * @return AddSalesChannelLinks
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
