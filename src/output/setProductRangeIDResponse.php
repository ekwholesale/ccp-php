<?php

class setProductRangeIDResponse
{

    /**
     * @var ResponseObjectOfBoolean $setProductRangeIDResult
     */
    protected $setProductRangeIDResult = null;

    /**
     * @param ResponseObjectOfBoolean $setProductRangeIDResult
     */
    public function __construct($setProductRangeIDResult)
    {
      $this->setProductRangeIDResult = $setProductRangeIDResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getSetProductRangeIDResult()
    {
      return $this->setProductRangeIDResult;
    }

    /**
     * @param ResponseObjectOfBoolean $setProductRangeIDResult
     * @return setProductRangeIDResponse
     */
    public function setSetProductRangeIDResult($setProductRangeIDResult)
    {
      $this->setProductRangeIDResult = $setProductRangeIDResult;
      return $this;
    }

}
