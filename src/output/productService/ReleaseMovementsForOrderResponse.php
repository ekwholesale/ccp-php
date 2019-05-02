<?php

class ReleaseMovementsForOrderResponse
{

    /**
     * @var ResponseObjectOfBoolean $ReleaseMovementsForOrderResult
     */
    protected $ReleaseMovementsForOrderResult = null;

    /**
     * @param ResponseObjectOfBoolean $ReleaseMovementsForOrderResult
     */
    public function __construct($ReleaseMovementsForOrderResult)
    {
      $this->ReleaseMovementsForOrderResult = $ReleaseMovementsForOrderResult;
    }

    /**
     * @return ResponseObjectOfBoolean
     */
    public function getReleaseMovementsForOrderResult()
    {
      return $this->ReleaseMovementsForOrderResult;
    }

    /**
     * @param ResponseObjectOfBoolean $ReleaseMovementsForOrderResult
     * @return ReleaseMovementsForOrderResponse
     */
    public function setReleaseMovementsForOrderResult($ReleaseMovementsForOrderResult)
    {
      $this->ReleaseMovementsForOrderResult = $ReleaseMovementsForOrderResult;
      return $this;
    }

}
