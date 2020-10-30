<?php

class ApiFaultCustom3
{

    /**
     * @var int $RequestNodeIndex
     */
    protected $RequestNodeIndex = null;

    /**
     * @var ErrorCodeType $ccpApiErrorCodeType
     */
    protected $ccpApiErrorCodeType = null;

    /**
     * @var string $Detail
     */
    protected $Detail = null;

    /**
     * @var string $ElementName
     */
    protected $ElementName = null;

    /**
     * @var int $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var CCPApiFaultType $FaultType
     */
    protected $FaultType = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @param int $RequestNodeIndex
     * @param ErrorCodeType $ccpApiErrorCodeType
     * @param int $ErrorCode
     * @param CCPApiFaultType $FaultType
     */
    public function __construct($RequestNodeIndex, $ccpApiErrorCodeType, $ErrorCode, $FaultType)
    {
      $this->RequestNodeIndex = $RequestNodeIndex;
      $this->ccpApiErrorCodeType = $ccpApiErrorCodeType;
      $this->ErrorCode = $ErrorCode;
      $this->FaultType = $FaultType;
    }

    /**
     * @return int
     */
    public function getRequestNodeIndex()
    {
      return $this->RequestNodeIndex;
    }

    /**
     * @param int $RequestNodeIndex
     * @return ApiFault
     */
    public function setRequestNodeIndex($RequestNodeIndex)
    {
      $this->RequestNodeIndex = $RequestNodeIndex;
      return $this;
    }

    /**
     * @return ErrorCodeType
     */
    public function getCcpApiErrorCodeType()
    {
      return $this->ccpApiErrorCodeType;
    }

    /**
     * @param ErrorCodeType $ccpApiErrorCodeType
     * @return ApiFault
     */
    public function setCcpApiErrorCodeType($ccpApiErrorCodeType)
    {
      $this->ccpApiErrorCodeType = $ccpApiErrorCodeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
      return $this->Detail;
    }

    /**
     * @param string $Detail
     * @return ApiFault
     */
    public function setDetail($Detail)
    {
      $this->Detail = $Detail;
      return $this;
    }

    /**
     * @return string
     */
    public function getElementName()
    {
      return $this->ElementName;
    }

    /**
     * @param string $ElementName
     * @return ApiFault
     */
    public function setElementName($ElementName)
    {
      $this->ElementName = $ElementName;
      return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     * @return ApiFault
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return CCPApiFaultType
     */
    public function getFaultType()
    {
      return $this->FaultType;
    }

    /**
     * @param CCPApiFaultType $FaultType
     * @return ApiFault
     */
    public function setFaultType($FaultType)
    {
      $this->FaultType = $FaultType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return ApiFault
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
