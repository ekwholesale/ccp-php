<?php

class setNameResponse
{

    /**
     * @var ResponseObjectOfBoolean $setNameResult
     */
    protected $setNameResult = null;

    /**
     * @param ResponseObjectOfBoolean $setNameResult
     */
    public function __construct($setNameResult)
    {
      $this->setNameResult = $setNameResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetNameResult()
    {
      return $this->setNameResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setNameResult
     * @return setNameResponse
     */
    public function setSetNameResult($setNameResult)
    {
      $this->setNameResult = $setNameResult;
      return $this;
    }

}
