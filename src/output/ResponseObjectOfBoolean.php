<?php

class ResponseObjectOfboolean
{

    /**
     * @var boolean $Content
     */
    protected $Content = null;

    /**
     * @var int $ErrorLevel
     */
    protected $ErrorLevel = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var ArrayOfApiFault $Errors
     */
    protected $Errors = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param boolean $Content
     * @return ResponseObjectOfboolean
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
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
     * @return ResponseObjectOfboolean
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
     * @return ResponseObjectOfboolean
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
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
     * @return ResponseObjectOfboolean
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
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
     * @return ResponseObjectOfboolean
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
