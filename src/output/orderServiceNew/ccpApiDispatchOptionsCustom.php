<?php

class ccpApiDispatchOptionsCustom
{

    /**
     * @var boolean $UpdateChannel
     */
    protected $UpdateChannel = null;

    /**
     * @var boolean $UpdateCCP
     */
    protected $UpdateCCP = null;

    /**
     * @var boolean $RestrictLabels
     */
    protected $RestrictLabels = null;

    /**
     * @var boolean $MarkAsPicked
     */
    protected $MarkAsPicked = null;

    /**
     * @var boolean $AllowPickReset
     */
    protected $AllowPickReset = null;

    /**
     * @var boolean $UseShippingRuleMaxWeight
     */
    protected $UseShippingRuleMaxWeight = null;

    /**
     * @var boolean $OverwriteOrderNotes
     */
    protected $OverwriteOrderNotes = null;

    /**
     * @var OverwriteOrderNoteType $OverwriteOrderNoteType
     */
    protected $OverwriteOrderNoteType = null;

    /**
     * @var string $OrderNote
     */
    protected $OrderNote = null;

    /**
     * @var boolean $CreditNote
     */
    protected $CreditNote = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var \DateTime $DispatchDate
     */
    protected $DispatchDate = null;

    /**
     * @var string $overrides
     */
    protected $overrides = null;

    /**
     * @var int $Refund
     */
    protected $Refund = null;

    /**
     * @var int $CourierId
     */
    protected $CourierId = null;

    /**
     * @var int $CourierServiceRulesId
     */
    protected $CourierServiceRulesId = null;

    /**
     * @var int $BCSID
     */
    protected $BCSID = null;

    /**
     * @var boolean $MarkPicksAsDone
     */
    protected $MarkPicksAsDone = null;

    /**
     * @var int $PackagingOption
     */
    protected $PackagingOption = null;

    /**
     * @param boolean $UpdateChannel
     * @param boolean $UpdateCCP
     * @param boolean $RestrictLabels
     * @param boolean $MarkAsPicked
     * @param boolean $AllowPickReset
     * @param boolean $UseShippingRuleMaxWeight
     * @param boolean $OverwriteOrderNotes
     * @param OverwriteOrderNoteType $OverwriteOrderNoteType
     * @param boolean $CreditNote
     * @param \DateTime $DispatchDate
     * @param int $Refund
     * @param int $CourierId
     * @param int $CourierServiceRulesId
     * @param int $BCSID
     * @param boolean $MarkPicksAsDone
     * @param int $PackagingOption
     */
    public function __construct($UpdateChannel, $UpdateCCP, $RestrictLabels, $MarkAsPicked, $AllowPickReset, $UseShippingRuleMaxWeight, $OverwriteOrderNotes, $OverwriteOrderNoteType, $CreditNote, \DateTime $DispatchDate, $Refund, $CourierId, $CourierServiceRulesId, $BCSID, $MarkPicksAsDone, $PackagingOption)
    {
      $this->UpdateChannel = $UpdateChannel;
      $this->UpdateCCP = $UpdateCCP;
      $this->RestrictLabels = $RestrictLabels;
      $this->MarkAsPicked = $MarkAsPicked;
      $this->AllowPickReset = $AllowPickReset;
      $this->UseShippingRuleMaxWeight = $UseShippingRuleMaxWeight;
      $this->OverwriteOrderNotes = $OverwriteOrderNotes;
      $this->OverwriteOrderNoteType = $OverwriteOrderNoteType;
      $this->CreditNote = $CreditNote;
      $this->DispatchDate = $DispatchDate->format(\DateTime::ATOM);
      $this->Refund = $Refund;
      $this->CourierId = $CourierId;
      $this->CourierServiceRulesId = $CourierServiceRulesId;
      $this->BCSID = $BCSID;
      $this->MarkPicksAsDone = $MarkPicksAsDone;
      $this->PackagingOption = $PackagingOption;
    }

    /**
     * @return boolean
     */
    public function getUpdateChannel()
    {
      return $this->UpdateChannel;
    }

    /**
     * @param boolean $UpdateChannel
     * @return ccpApiDispatchOptions
     */
    public function setUpdateChannel($UpdateChannel)
    {
      $this->UpdateChannel = $UpdateChannel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdateCCP()
    {
      return $this->UpdateCCP;
    }

    /**
     * @param boolean $UpdateCCP
     * @return ccpApiDispatchOptions
     */
    public function setUpdateCCP($UpdateCCP)
    {
      $this->UpdateCCP = $UpdateCCP;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictLabels()
    {
      return $this->RestrictLabels;
    }

    /**
     * @param boolean $RestrictLabels
     * @return ccpApiDispatchOptions
     */
    public function setRestrictLabels($RestrictLabels)
    {
      $this->RestrictLabels = $RestrictLabels;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMarkAsPicked()
    {
      return $this->MarkAsPicked;
    }

    /**
     * @param boolean $MarkAsPicked
     * @return ccpApiDispatchOptions
     */
    public function setMarkAsPicked($MarkAsPicked)
    {
      $this->MarkAsPicked = $MarkAsPicked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowPickReset()
    {
      return $this->AllowPickReset;
    }

    /**
     * @param boolean $AllowPickReset
     * @return ccpApiDispatchOptions
     */
    public function setAllowPickReset($AllowPickReset)
    {
      $this->AllowPickReset = $AllowPickReset;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseShippingRuleMaxWeight()
    {
      return $this->UseShippingRuleMaxWeight;
    }

    /**
     * @param boolean $UseShippingRuleMaxWeight
     * @return ccpApiDispatchOptions
     */
    public function setUseShippingRuleMaxWeight($UseShippingRuleMaxWeight)
    {
      $this->UseShippingRuleMaxWeight = $UseShippingRuleMaxWeight;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverwriteOrderNotes()
    {
      return $this->OverwriteOrderNotes;
    }

    /**
     * @param boolean $OverwriteOrderNotes
     * @return ccpApiDispatchOptions
     */
    public function setOverwriteOrderNotes($OverwriteOrderNotes)
    {
      $this->OverwriteOrderNotes = $OverwriteOrderNotes;
      return $this;
    }

    /**
     * @return OverwriteOrderNoteType
     */
    public function getOverwriteOrderNoteType()
    {
      return $this->OverwriteOrderNoteType;
    }

    /**
     * @param OverwriteOrderNoteType $OverwriteOrderNoteType
     * @return ccpApiDispatchOptions
     */
    public function setOverwriteOrderNoteType($OverwriteOrderNoteType)
    {
      $this->OverwriteOrderNoteType = $OverwriteOrderNoteType;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNote()
    {
      return $this->OrderNote;
    }

    /**
     * @param string $OrderNote
     * @return ccpApiDispatchOptions
     */
    public function setOrderNote($OrderNote)
    {
      $this->OrderNote = $OrderNote;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreditNote()
    {
      return $this->CreditNote;
    }

    /**
     * @param boolean $CreditNote
     * @return ccpApiDispatchOptions
     */
    public function setCreditNote($CreditNote)
    {
      $this->CreditNote = $CreditNote;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return ccpApiDispatchOptions
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDispatchDate()
    {
      if ($this->DispatchDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DispatchDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DispatchDate
     * @return ccpApiDispatchOptions
     */
    public function setDispatchDate(\DateTime $DispatchDate)
    {
      $this->DispatchDate = $DispatchDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getOverrides()
    {
      return $this->overrides;
    }

    /**
     * @param string $overrides
     * @return ccpApiDispatchOptions
     */
    public function setOverrides($overrides)
    {
      $this->overrides = $overrides;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param int $Refund
     * @return ccpApiDispatchOptions
     */
    public function setRefund($Refund)
    {
      $this->Refund = $Refund;
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierId()
    {
      return $this->CourierId;
    }

    /**
     * @param int $CourierId
     * @return ccpApiDispatchOptions
     */
    public function setCourierId($CourierId)
    {
      $this->CourierId = $CourierId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierServiceRulesId()
    {
      return $this->CourierServiceRulesId;
    }

    /**
     * @param int $CourierServiceRulesId
     * @return ccpApiDispatchOptions
     */
    public function setCourierServiceRulesId($CourierServiceRulesId)
    {
      $this->CourierServiceRulesId = $CourierServiceRulesId;
      return $this;
    }

    /**
     * @return int
     */
    public function getBCSID()
    {
      return $this->BCSID;
    }

    /**
     * @param int $BCSID
     * @return ccpApiDispatchOptions
     */
    public function setBCSID($BCSID)
    {
      $this->BCSID = $BCSID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMarkPicksAsDone()
    {
      return $this->MarkPicksAsDone;
    }

    /**
     * @param boolean $MarkPicksAsDone
     * @return ccpApiDispatchOptions
     */
    public function setMarkPicksAsDone($MarkPicksAsDone)
    {
      $this->MarkPicksAsDone = $MarkPicksAsDone;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackagingOption()
    {
      return $this->PackagingOption;
    }

    /**
     * @param int $PackagingOption
     * @return ccpApiDispatchOptions
     */
    public function setPackagingOption($PackagingOption)
    {
      $this->PackagingOption = $PackagingOption;
      return $this;
    }

}
