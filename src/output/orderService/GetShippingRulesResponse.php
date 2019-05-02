<?php

class GetShippingRulesResponse
{

    /**
     * @var ResponseObjectOfListOfAPIShippingRule $GetShippingRulesResult
     */
    protected $GetShippingRulesResult = null;

    /**
     * @param ResponseObjectOfListOfAPIShippingRule $GetShippingRulesResult
     */
    public function __construct($GetShippingRulesResult)
    {
      $this->GetShippingRulesResult = $GetShippingRulesResult;
    }

    /**
     * @return ResponseObjectOfListOfAPIShippingRule
     */
    public function getGetShippingRulesResult()
    {
      return $this->GetShippingRulesResult;
    }

    /**
     * @param ResponseObjectOfListOfAPIShippingRule $GetShippingRulesResult
     * @return GetShippingRulesResponse
     */
    public function setGetShippingRulesResult($GetShippingRulesResult)
    {
      $this->GetShippingRulesResult = $GetShippingRulesResult;
      return $this;
    }

}
