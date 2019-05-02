<?php

class BrandCourierSelection
{

    /**
     * @var boolean $Selected
     */
    protected $Selected = null;

    /**
     * @var ArrayOfBrandCourierSelectionProduct $BrandCourierSelectionProductEnabled
     */
    protected $BrandCourierSelectionProductEnabled = null;

    /**
     * @var ArrayOfBrandCourierSelectionRules $ActiveRules
     */
    protected $ActiveRules = null;

    /**
     * @var boolean $RuleApplied
     */
    protected $RuleApplied = null;

    /**
     * @var BrandCourierSelectionType $BrandCourierSelectionTypeEnum
     */
    protected $BrandCourierSelectionTypeEnum = null;

    /**
     * @var LabelType $LabelTypeEnum
     */
    protected $LabelTypeEnum = null;

    /**
     * @var SendCSV $SendCSVEnum
     */
    protected $SendCSVEnum = null;

    /**
     * @var VATEvaluationType $VATEvaluationTypeEnum
     */
    protected $VATEvaluationTypeEnum = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var int $CourierServicesGroupID
     */
    protected $CourierServicesGroupID = null;

    /**
     * @var float $FrontEndPrice
     */
    protected $FrontEndPrice = null;

    /**
     * @var string $RuleName
     */
    protected $RuleName = null;

    /**
     * @var int $StatusID
     */
    protected $StatusID = null;

    /**
     * @var StatusID $StatusIDEnum
     */
    protected $StatusIDEnum = null;

    /**
     * @var int $CourierServicesRuleId
     */
    protected $CourierServicesRuleId = null;

    /**
     * @var float $BaselineCost
     */
    protected $BaselineCost = null;

    /**
     * @var int $BrandCourierSelectionType
     */
    protected $BrandCourierSelectionType = null;

    /**
     * @var int $CountryId
     */
    protected $CountryId = null;

    /**
     * @var boolean $ExceptCountrySelected
     */
    protected $ExceptCountrySelected = null;

    /**
     * @var int $AdditionalShippingLabel
     */
    protected $AdditionalShippingLabel = null;

    /**
     * @var float $InitialWeight
     */
    protected $InitialWeight = null;

    /**
     * @var float $CostPerKg
     */
    protected $CostPerKg = null;

    /**
     * @var int $LabelType
     */
    protected $LabelType = null;

    /**
     * @var int $SendCSV
     */
    protected $SendCSV = null;

    /**
     * @var int $BonusScore
     */
    protected $BonusScore = null;

    /**
     * @var int $LabelTemplate
     */
    protected $LabelTemplate = null;

    /**
     * @var float $VATValue
     */
    protected $VATValue = null;

    /**
     * @var int $VATEvaluationType
     */
    protected $VATEvaluationType = null;

    /**
     * @var string $CustomerFacingName
     */
    protected $CustomerFacingName = null;

    /**
     * @var string $CustomerFacingDescription
     */
    protected $CustomerFacingDescription = null;

    /**
     * @var string $SignatureValue
     */
    protected $SignatureValue = null;

    /**
     * @var int $PageSizeOverride
     */
    protected $PageSizeOverride = null;

    /**
     * @var int $BaselineWeight
     */
    protected $BaselineWeight = null;

    /**
     * @var int $RuleCourierAccount
     */
    protected $RuleCourierAccount = null;

    /**
     * @var int $EstDeliveryDays
     */
    protected $EstDeliveryDays = null;

    /**
     * @var int $IsPriority
     */
    protected $IsPriority = null;

    /**
     * @var int $PriorityDaysToDeliver
     */
    protected $PriorityDaysToDeliver = null;

    /**
     * @var int $BaselineWeightMax
     */
    protected $BaselineWeightMax = null;

    /**
     * @var int $CopiedFromId
     */
    protected $CopiedFromId = null;

    /**
     * @var boolean $IsDefaultRule
     */
    protected $IsDefaultRule = null;

    /**
     * @param boolean $Selected
     * @param boolean $RuleApplied
     * @param BrandCourierSelectionType $BrandCourierSelectionTypeEnum
     * @param LabelType $LabelTypeEnum
     * @param SendCSV $SendCSVEnum
     * @param VATEvaluationType $VATEvaluationTypeEnum
     * @param int $ID
     * @param int $BrandID
     * @param int $CourierServicesGroupID
     * @param float $FrontEndPrice
     * @param int $StatusID
     * @param StatusID $StatusIDEnum
     * @param int $CourierServicesRuleId
     * @param float $BaselineCost
     * @param int $BrandCourierSelectionType
     * @param int $CountryId
     * @param boolean $ExceptCountrySelected
     * @param int $AdditionalShippingLabel
     * @param float $InitialWeight
     * @param float $CostPerKg
     * @param int $LabelType
     * @param int $SendCSV
     * @param int $BonusScore
     * @param int $LabelTemplate
     * @param float $VATValue
     * @param int $VATEvaluationType
     * @param int $PageSizeOverride
     * @param int $BaselineWeight
     * @param int $RuleCourierAccount
     * @param int $EstDeliveryDays
     * @param int $IsPriority
     * @param int $PriorityDaysToDeliver
     * @param int $BaselineWeightMax
     * @param int $CopiedFromId
     * @param boolean $IsDefaultRule
     */
    public function __construct($Selected, $RuleApplied, $BrandCourierSelectionTypeEnum, $LabelTypeEnum, $SendCSVEnum, $VATEvaluationTypeEnum, $ID, $BrandID, $CourierServicesGroupID, $FrontEndPrice, $StatusID, $StatusIDEnum, $CourierServicesRuleId, $BaselineCost, $BrandCourierSelectionType, $CountryId, $ExceptCountrySelected, $AdditionalShippingLabel, $InitialWeight, $CostPerKg, $LabelType, $SendCSV, $BonusScore, $LabelTemplate, $VATValue, $VATEvaluationType, $PageSizeOverride, $BaselineWeight, $RuleCourierAccount, $EstDeliveryDays, $IsPriority, $PriorityDaysToDeliver, $BaselineWeightMax, $CopiedFromId, $IsDefaultRule)
    {
      $this->Selected = $Selected;
      $this->RuleApplied = $RuleApplied;
      $this->BrandCourierSelectionTypeEnum = $BrandCourierSelectionTypeEnum;
      $this->LabelTypeEnum = $LabelTypeEnum;
      $this->SendCSVEnum = $SendCSVEnum;
      $this->VATEvaluationTypeEnum = $VATEvaluationTypeEnum;
      $this->ID = $ID;
      $this->BrandID = $BrandID;
      $this->CourierServicesGroupID = $CourierServicesGroupID;
      $this->FrontEndPrice = $FrontEndPrice;
      $this->StatusID = $StatusID;
      $this->StatusIDEnum = $StatusIDEnum;
      $this->CourierServicesRuleId = $CourierServicesRuleId;
      $this->BaselineCost = $BaselineCost;
      $this->BrandCourierSelectionType = $BrandCourierSelectionType;
      $this->CountryId = $CountryId;
      $this->ExceptCountrySelected = $ExceptCountrySelected;
      $this->AdditionalShippingLabel = $AdditionalShippingLabel;
      $this->InitialWeight = $InitialWeight;
      $this->CostPerKg = $CostPerKg;
      $this->LabelType = $LabelType;
      $this->SendCSV = $SendCSV;
      $this->BonusScore = $BonusScore;
      $this->LabelTemplate = $LabelTemplate;
      $this->VATValue = $VATValue;
      $this->VATEvaluationType = $VATEvaluationType;
      $this->PageSizeOverride = $PageSizeOverride;
      $this->BaselineWeight = $BaselineWeight;
      $this->RuleCourierAccount = $RuleCourierAccount;
      $this->EstDeliveryDays = $EstDeliveryDays;
      $this->IsPriority = $IsPriority;
      $this->PriorityDaysToDeliver = $PriorityDaysToDeliver;
      $this->BaselineWeightMax = $BaselineWeightMax;
      $this->CopiedFromId = $CopiedFromId;
      $this->IsDefaultRule = $IsDefaultRule;
    }

    /**
     * @return boolean
     */
    public function getSelected()
    {
      return $this->Selected;
    }

    /**
     * @param boolean $Selected
     * @return BrandCourierSelection
     */
    public function setSelected($Selected)
    {
      $this->Selected = $Selected;
      return $this;
    }

    /**
     * @return ArrayOfBrandCourierSelectionProduct
     */
    public function getBrandCourierSelectionProductEnabled()
    {
      return $this->BrandCourierSelectionProductEnabled;
    }

    /**
     * @param ArrayOfBrandCourierSelectionProduct $BrandCourierSelectionProductEnabled
     * @return BrandCourierSelection
     */
    public function setBrandCourierSelectionProductEnabled($BrandCourierSelectionProductEnabled)
    {
      $this->BrandCourierSelectionProductEnabled = $BrandCourierSelectionProductEnabled;
      return $this;
    }

    /**
     * @return ArrayOfBrandCourierSelectionRules
     */
    public function getActiveRules()
    {
      return $this->ActiveRules;
    }

    /**
     * @param ArrayOfBrandCourierSelectionRules $ActiveRules
     * @return BrandCourierSelection
     */
    public function setActiveRules($ActiveRules)
    {
      $this->ActiveRules = $ActiveRules;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRuleApplied()
    {
      return $this->RuleApplied;
    }

    /**
     * @param boolean $RuleApplied
     * @return BrandCourierSelection
     */
    public function setRuleApplied($RuleApplied)
    {
      $this->RuleApplied = $RuleApplied;
      return $this;
    }

    /**
     * @return BrandCourierSelectionType
     */
    public function getBrandCourierSelectionTypeEnum()
    {
      return $this->BrandCourierSelectionTypeEnum;
    }

    /**
     * @param BrandCourierSelectionType $BrandCourierSelectionTypeEnum
     * @return BrandCourierSelection
     */
    public function setBrandCourierSelectionTypeEnum($BrandCourierSelectionTypeEnum)
    {
      $this->BrandCourierSelectionTypeEnum = $BrandCourierSelectionTypeEnum;
      return $this;
    }

    /**
     * @return LabelType
     */
    public function getLabelTypeEnum()
    {
      return $this->LabelTypeEnum;
    }

    /**
     * @param LabelType $LabelTypeEnum
     * @return BrandCourierSelection
     */
    public function setLabelTypeEnum($LabelTypeEnum)
    {
      $this->LabelTypeEnum = $LabelTypeEnum;
      return $this;
    }

    /**
     * @return SendCSV
     */
    public function getSendCSVEnum()
    {
      return $this->SendCSVEnum;
    }

    /**
     * @param SendCSV $SendCSVEnum
     * @return BrandCourierSelection
     */
    public function setSendCSVEnum($SendCSVEnum)
    {
      $this->SendCSVEnum = $SendCSVEnum;
      return $this;
    }

    /**
     * @return VATEvaluationType
     */
    public function getVATEvaluationTypeEnum()
    {
      return $this->VATEvaluationTypeEnum;
    }

    /**
     * @param VATEvaluationType $VATEvaluationTypeEnum
     * @return BrandCourierSelection
     */
    public function setVATEvaluationTypeEnum($VATEvaluationTypeEnum)
    {
      $this->VATEvaluationTypeEnum = $VATEvaluationTypeEnum;
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
     * @return BrandCourierSelection
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getBrandID()
    {
      return $this->BrandID;
    }

    /**
     * @param int $BrandID
     * @return BrandCourierSelection
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
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
     * @return BrandCourierSelection
     */
    public function setCourierServicesGroupID($CourierServicesGroupID)
    {
      $this->CourierServicesGroupID = $CourierServicesGroupID;
      return $this;
    }

    /**
     * @return float
     */
    public function getFrontEndPrice()
    {
      return $this->FrontEndPrice;
    }

    /**
     * @param float $FrontEndPrice
     * @return BrandCourierSelection
     */
    public function setFrontEndPrice($FrontEndPrice)
    {
      $this->FrontEndPrice = $FrontEndPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleName()
    {
      return $this->RuleName;
    }

    /**
     * @param string $RuleName
     * @return BrandCourierSelection
     */
    public function setRuleName($RuleName)
    {
      $this->RuleName = $RuleName;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusID()
    {
      return $this->StatusID;
    }

    /**
     * @param int $StatusID
     * @return BrandCourierSelection
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return StatusID
     */
    public function getStatusIDEnum()
    {
      return $this->StatusIDEnum;
    }

    /**
     * @param StatusID $StatusIDEnum
     * @return BrandCourierSelection
     */
    public function setStatusIDEnum($StatusIDEnum)
    {
      $this->StatusIDEnum = $StatusIDEnum;
      return $this;
    }

    /**
     * @return int
     */
    public function getCourierServicesRuleId()
    {
      return $this->CourierServicesRuleId;
    }

    /**
     * @param int $CourierServicesRuleId
     * @return BrandCourierSelection
     */
    public function setCourierServicesRuleId($CourierServicesRuleId)
    {
      $this->CourierServicesRuleId = $CourierServicesRuleId;
      return $this;
    }

    /**
     * @return float
     */
    public function getBaselineCost()
    {
      return $this->BaselineCost;
    }

    /**
     * @param float $BaselineCost
     * @return BrandCourierSelection
     */
    public function setBaselineCost($BaselineCost)
    {
      $this->BaselineCost = $BaselineCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getBrandCourierSelectionType()
    {
      return $this->BrandCourierSelectionType;
    }

    /**
     * @param int $BrandCourierSelectionType
     * @return BrandCourierSelection
     */
    public function setBrandCourierSelectionType($BrandCourierSelectionType)
    {
      $this->BrandCourierSelectionType = $BrandCourierSelectionType;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->CountryId;
    }

    /**
     * @param int $CountryId
     * @return BrandCourierSelection
     */
    public function setCountryId($CountryId)
    {
      $this->CountryId = $CountryId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExceptCountrySelected()
    {
      return $this->ExceptCountrySelected;
    }

    /**
     * @param boolean $ExceptCountrySelected
     * @return BrandCourierSelection
     */
    public function setExceptCountrySelected($ExceptCountrySelected)
    {
      $this->ExceptCountrySelected = $ExceptCountrySelected;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdditionalShippingLabel()
    {
      return $this->AdditionalShippingLabel;
    }

    /**
     * @param int $AdditionalShippingLabel
     * @return BrandCourierSelection
     */
    public function setAdditionalShippingLabel($AdditionalShippingLabel)
    {
      $this->AdditionalShippingLabel = $AdditionalShippingLabel;
      return $this;
    }

    /**
     * @return float
     */
    public function getInitialWeight()
    {
      return $this->InitialWeight;
    }

    /**
     * @param float $InitialWeight
     * @return BrandCourierSelection
     */
    public function setInitialWeight($InitialWeight)
    {
      $this->InitialWeight = $InitialWeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostPerKg()
    {
      return $this->CostPerKg;
    }

    /**
     * @param float $CostPerKg
     * @return BrandCourierSelection
     */
    public function setCostPerKg($CostPerKg)
    {
      $this->CostPerKg = $CostPerKg;
      return $this;
    }

    /**
     * @return int
     */
    public function getLabelType()
    {
      return $this->LabelType;
    }

    /**
     * @param int $LabelType
     * @return BrandCourierSelection
     */
    public function setLabelType($LabelType)
    {
      $this->LabelType = $LabelType;
      return $this;
    }

    /**
     * @return int
     */
    public function getSendCSV()
    {
      return $this->SendCSV;
    }

    /**
     * @param int $SendCSV
     * @return BrandCourierSelection
     */
    public function setSendCSV($SendCSV)
    {
      $this->SendCSV = $SendCSV;
      return $this;
    }

    /**
     * @return int
     */
    public function getBonusScore()
    {
      return $this->BonusScore;
    }

    /**
     * @param int $BonusScore
     * @return BrandCourierSelection
     */
    public function setBonusScore($BonusScore)
    {
      $this->BonusScore = $BonusScore;
      return $this;
    }

    /**
     * @return int
     */
    public function getLabelTemplate()
    {
      return $this->LabelTemplate;
    }

    /**
     * @param int $LabelTemplate
     * @return BrandCourierSelection
     */
    public function setLabelTemplate($LabelTemplate)
    {
      $this->LabelTemplate = $LabelTemplate;
      return $this;
    }

    /**
     * @return float
     */
    public function getVATValue()
    {
      return $this->VATValue;
    }

    /**
     * @param float $VATValue
     * @return BrandCourierSelection
     */
    public function setVATValue($VATValue)
    {
      $this->VATValue = $VATValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getVATEvaluationType()
    {
      return $this->VATEvaluationType;
    }

    /**
     * @param int $VATEvaluationType
     * @return BrandCourierSelection
     */
    public function setVATEvaluationType($VATEvaluationType)
    {
      $this->VATEvaluationType = $VATEvaluationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerFacingName()
    {
      return $this->CustomerFacingName;
    }

    /**
     * @param string $CustomerFacingName
     * @return BrandCourierSelection
     */
    public function setCustomerFacingName($CustomerFacingName)
    {
      $this->CustomerFacingName = $CustomerFacingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerFacingDescription()
    {
      return $this->CustomerFacingDescription;
    }

    /**
     * @param string $CustomerFacingDescription
     * @return BrandCourierSelection
     */
    public function setCustomerFacingDescription($CustomerFacingDescription)
    {
      $this->CustomerFacingDescription = $CustomerFacingDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignatureValue()
    {
      return $this->SignatureValue;
    }

    /**
     * @param string $SignatureValue
     * @return BrandCourierSelection
     */
    public function setSignatureValue($SignatureValue)
    {
      $this->SignatureValue = $SignatureValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSizeOverride()
    {
      return $this->PageSizeOverride;
    }

    /**
     * @param int $PageSizeOverride
     * @return BrandCourierSelection
     */
    public function setPageSizeOverride($PageSizeOverride)
    {
      $this->PageSizeOverride = $PageSizeOverride;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaselineWeight()
    {
      return $this->BaselineWeight;
    }

    /**
     * @param int $BaselineWeight
     * @return BrandCourierSelection
     */
    public function setBaselineWeight($BaselineWeight)
    {
      $this->BaselineWeight = $BaselineWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getRuleCourierAccount()
    {
      return $this->RuleCourierAccount;
    }

    /**
     * @param int $RuleCourierAccount
     * @return BrandCourierSelection
     */
    public function setRuleCourierAccount($RuleCourierAccount)
    {
      $this->RuleCourierAccount = $RuleCourierAccount;
      return $this;
    }

    /**
     * @return int
     */
    public function getEstDeliveryDays()
    {
      return $this->EstDeliveryDays;
    }

    /**
     * @param int $EstDeliveryDays
     * @return BrandCourierSelection
     */
    public function setEstDeliveryDays($EstDeliveryDays)
    {
      $this->EstDeliveryDays = $EstDeliveryDays;
      return $this;
    }

    /**
     * @return int
     */
    public function getIsPriority()
    {
      return $this->IsPriority;
    }

    /**
     * @param int $IsPriority
     * @return BrandCourierSelection
     */
    public function setIsPriority($IsPriority)
    {
      $this->IsPriority = $IsPriority;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriorityDaysToDeliver()
    {
      return $this->PriorityDaysToDeliver;
    }

    /**
     * @param int $PriorityDaysToDeliver
     * @return BrandCourierSelection
     */
    public function setPriorityDaysToDeliver($PriorityDaysToDeliver)
    {
      $this->PriorityDaysToDeliver = $PriorityDaysToDeliver;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaselineWeightMax()
    {
      return $this->BaselineWeightMax;
    }

    /**
     * @param int $BaselineWeightMax
     * @return BrandCourierSelection
     */
    public function setBaselineWeightMax($BaselineWeightMax)
    {
      $this->BaselineWeightMax = $BaselineWeightMax;
      return $this;
    }

    /**
     * @return int
     */
    public function getCopiedFromId()
    {
      return $this->CopiedFromId;
    }

    /**
     * @param int $CopiedFromId
     * @return BrandCourierSelection
     */
    public function setCopiedFromId($CopiedFromId)
    {
      $this->CopiedFromId = $CopiedFromId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefaultRule()
    {
      return $this->IsDefaultRule;
    }

    /**
     * @param boolean $IsDefaultRule
     * @return BrandCourierSelection
     */
    public function setIsDefaultRule($IsDefaultRule)
    {
      $this->IsDefaultRule = $IsDefaultRule;
      return $this;
    }

}
