<?php

class CourierServicesRules
{

    /**
     * @var APICommunicationMode $APICommunicationModeEnum
     */
    protected $APICommunicationModeEnum = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $CourierServicesGroupID
     */
    protected $CourierServicesGroupID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Descsription
     */
    protected $Descsription = null;

    /**
     * @var int $MaxWeightGRAM
     */
    protected $MaxWeightGRAM = null;

    /**
     * @var int $MaxLengthMM
     */
    protected $MaxLengthMM = null;

    /**
     * @var int $MaxWidthMM
     */
    protected $MaxWidthMM = null;

    /**
     * @var int $MaxDepthMM
     */
    protected $MaxDepthMM = null;

    /**
     * @var int $MaxVolumeMM
     */
    protected $MaxVolumeMM = null;

    /**
     * @var string $CourierServiceCode
     */
    protected $CourierServiceCode = null;

    /**
     * @var int $StatusId
     */
    protected $StatusId = null;

    /**
     * @var StatusID $StatusIdEnum
     */
    protected $StatusIdEnum = null;

    /**
     * @var int $APICommunicationMode
     */
    protected $APICommunicationMode = null;

    /**
     * @param APICommunicationMode $APICommunicationModeEnum
     * @param int $ID
     * @param int $CourierServicesGroupID
     * @param int $MaxWeightGRAM
     * @param int $MaxLengthMM
     * @param int $MaxWidthMM
     * @param int $MaxDepthMM
     * @param int $MaxVolumeMM
     * @param int $StatusId
     * @param StatusID $StatusIdEnum
     * @param int $APICommunicationMode
     */
    public function __construct($APICommunicationModeEnum, $ID, $CourierServicesGroupID, $MaxWeightGRAM, $MaxLengthMM, $MaxWidthMM, $MaxDepthMM, $MaxVolumeMM, $StatusId, $StatusIdEnum, $APICommunicationMode)
    {
      $this->APICommunicationModeEnum = $APICommunicationModeEnum;
      $this->ID = $ID;
      $this->CourierServicesGroupID = $CourierServicesGroupID;
      $this->MaxWeightGRAM = $MaxWeightGRAM;
      $this->MaxLengthMM = $MaxLengthMM;
      $this->MaxWidthMM = $MaxWidthMM;
      $this->MaxDepthMM = $MaxDepthMM;
      $this->MaxVolumeMM = $MaxVolumeMM;
      $this->StatusId = $StatusId;
      $this->StatusIdEnum = $StatusIdEnum;
      $this->APICommunicationMode = $APICommunicationMode;
    }

    /**
     * @return APICommunicationMode
     */
    public function getAPICommunicationModeEnum()
    {
      return $this->APICommunicationModeEnum;
    }

    /**
     * @param APICommunicationMode $APICommunicationModeEnum
     * @return CourierServicesRules
     */
    public function setAPICommunicationModeEnum($APICommunicationModeEnum)
    {
      $this->APICommunicationModeEnum = $APICommunicationModeEnum;
      return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return CourierServicesRules
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierServicesGroupID()
    {
      return $this->CourierServicesGroupID;
    }

    /**
     * @param int $CourierServicesGroupID
     * @return CourierServicesRules
     */
    public function setCourierServicesGroupID($CourierServicesGroupID)
    {
      $this->CourierServicesGroupID = $CourierServicesGroupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return CourierServicesRules
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescsription()
    {
      return $this->Descsription;
    }

    /**
     * @param string $Descsription
     * @return CourierServicesRules
     */
    public function setDescsription($Descsription)
    {
      $this->Descsription = $Descsription;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxWeightGRAM()
    {
      return $this->MaxWeightGRAM;
    }

    /**
     * @param int $MaxWeightGRAM
     * @return CourierServicesRules
     */
    public function setMaxWeightGRAM($MaxWeightGRAM)
    {
      $this->MaxWeightGRAM = $MaxWeightGRAM;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxLengthMM()
    {
      return $this->MaxLengthMM;
    }

    /**
     * @param int $MaxLengthMM
     * @return CourierServicesRules
     */
    public function setMaxLengthMM($MaxLengthMM)
    {
      $this->MaxLengthMM = $MaxLengthMM;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxWidthMM()
    {
      return $this->MaxWidthMM;
    }

    /**
     * @param int $MaxWidthMM
     * @return CourierServicesRules
     */
    public function setMaxWidthMM($MaxWidthMM)
    {
      $this->MaxWidthMM = $MaxWidthMM;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDepthMM()
    {
      return $this->MaxDepthMM;
    }

    /**
     * @param int $MaxDepthMM
     * @return CourierServicesRules
     */
    public function setMaxDepthMM($MaxDepthMM)
    {
      $this->MaxDepthMM = $MaxDepthMM;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxVolumeMM()
    {
      return $this->MaxVolumeMM;
    }

    /**
     * @param int $MaxVolumeMM
     * @return CourierServicesRules
     */
    public function setMaxVolumeMM($MaxVolumeMM)
    {
      $this->MaxVolumeMM = $MaxVolumeMM;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourierServiceCode()
    {
      return $this->CourierServiceCode;
    }

    /**
     * @param string $CourierServiceCode
     * @return CourierServicesRules
     */
    public function setCourierServiceCode($CourierServiceCode)
    {
      $this->CourierServiceCode = $CourierServiceCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusId()
    {
      return $this->StatusId;
    }

    /**
     * @param int $StatusId
     * @return CourierServicesRules
     */
    public function setStatusId($StatusId)
    {
      $this->StatusId = $StatusId;
      return $this;
    }

    /**
     * @return StatusID
     */
    public function getStatusIdEnum()
    {
      return $this->StatusIdEnum;
    }

    /**
     * @param StatusID $StatusIdEnum
     * @return CourierServicesRules
     */
    public function setStatusIdEnum($StatusIdEnum)
    {
      $this->StatusIdEnum = $StatusIdEnum;
      return $this;
    }

    /**
     * @return int
     */
    public function getAPICommunicationMode()
    {
      return $this->APICommunicationMode;
    }

    /**
     * @param int $APICommunicationMode
     * @return CourierServicesRules
     */
    public function setAPICommunicationMode($APICommunicationMode)
    {
      $this->APICommunicationMode = $APICommunicationMode;
      return $this;
    }

}
