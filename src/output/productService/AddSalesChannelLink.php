<?php

class AddSalesChannelLink
{

    /**
     * @var RequestObjectOfAPIProductSalesChannelLink $request
     */
    protected $request = null;

    /**
     * @param RequestObjectOfAPIProductSalesChannelLink $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return RequestObjectOfAPIProductSalesChannelLink
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RequestObjectOfAPIProductSalesChannelLink $request
     * @return AddSalesChannelLink
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
