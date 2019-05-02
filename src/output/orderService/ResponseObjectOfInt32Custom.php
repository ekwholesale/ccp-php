<?php

class ResponseObjectOfInt32Custom
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
     * @var int $Content
     */
    protected $Content = null;

    /**
     * @var ArrayOfApiFault $Errors
     */
    protected $Errors = null;

    /**
     * @param boolean $Success
     * @param int $ErrorLevel
     * @param int $Content
     */
    public function __construct($Success, $ErrorLevel, $Content)
    {
      $this->Success = $Success;
      $this->ErrorLevel = $ErrorLevel;
      $this->Content = $Content;
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
     * @return ResponseObjectOfInt32
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
     * @return ResponseObjectOfInt32
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
     * @return ResponseObjectOfInt32
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return int
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param int $Content
     * @return ResponseObjectOfInt32
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
     * @return ResponseObjectOfInt32
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

}
