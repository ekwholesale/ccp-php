<?php

class ResponseObjectOfListOfAPIProductStockLevel
{

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var int $ErrorLevel
     */
    protected $ErrorLevel = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var ArrayOfAPIProductStockLevel $Content
     */
    protected $Content = null;

    /**
     * @var ArrayOfApiFault $Errors
     */
    protected $Errors = null;

    /**
     * @param boolean $Success
     * @param int $ErrorLevel
     */
    public function __construct($Success, $ErrorLevel)
    {
      $this->Success = $Success;
      $this->ErrorLevel = $ErrorLevel;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return ResponseObjectOfListOfAPIProductStockLevel
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return int
     */
    public function getErrorLevel()
    {
      return $this->ErrorLevel;
    }

    /**
     * @param int $ErrorLevel
     * @return ResponseObjectOfListOfAPIProductStockLevel
     */
    public function setErrorLevel($ErrorLevel)
    {
      $this->ErrorLevel = $ErrorLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return ResponseObjectOfListOfAPIProductStockLevel
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return ArrayOfAPIProductStockLevel
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param ArrayOfAPIProductStockLevel $Content
     * @return ResponseObjectOfListOfAPIProductStockLevel
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return ArrayOfApiFault
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param ArrayOfApiFault $Errors
     * @return ResponseObjectOfListOfAPIProductStockLevel
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

}
