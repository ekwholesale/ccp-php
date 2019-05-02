<?php

class GetDataUsingDataContractResponse
{

    /**
     * @var CompositeType $GetDataUsingDataContractResult
     */
    protected $GetDataUsingDataContractResult = null;

    /**
     * @param CompositeType $GetDataUsingDataContractResult
     */
    public function __construct($GetDataUsingDataContractResult)
    {
      $this->GetDataUsingDataContractResult = $GetDataUsingDataContractResult;
    }

    /**
     * @return CompositeType
     */
    public function getGetDataUsingDataContractResult()
    {
      return $this->GetDataUsingDataContractResult;
    }

    /**
     * @param CompositeType $GetDataUsingDataContractResult
     * @return GetDataUsingDataContractResponse
     */
    public function setGetDataUsingDataContractResult($GetDataUsingDataContractResult)
    {
      $this->GetDataUsingDataContractResult = $GetDataUsingDataContractResult;
      return $this;
    }

}
