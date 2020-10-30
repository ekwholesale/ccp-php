<?php

class getInvoiceSummaryForOrderIDResponseCustom
{

    /**
     * @var ResponseObjectOfAPIInvoiceSummary $getInvoiceSummaryForOrderIDResult
     */
    protected $getInvoiceSummaryForOrderIDResult = null;

    /**
     * @param ResponseObjectOfAPIInvoiceSummary $getInvoiceSummaryForOrderIDResult
     */
    public function __construct($getInvoiceSummaryForOrderIDResult)
    {
      $this->getInvoiceSummaryForOrderIDResult = $getInvoiceSummaryForOrderIDResult;
    }

    /**
     * @return ResponseObjectOfAPIInvoiceSummary
     */
    public function getGetInvoiceSummaryForOrderIDResult()
    {
      return $this->getInvoiceSummaryForOrderIDResult;
    }

    /**
     * @param ResponseObjectOfAPIInvoiceSummary $getInvoiceSummaryForOrderIDResult
     * @return getInvoiceSummaryForOrderIDResponse
     */
    public function setGetInvoiceSummaryForOrderIDResult($getInvoiceSummaryForOrderIDResult)
    {
      $this->getInvoiceSummaryForOrderIDResult = $getInvoiceSummaryForOrderIDResult;
      return $this;
    }

}
