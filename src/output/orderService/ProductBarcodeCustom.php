<?php

class ProductBarcodeCustom
{

    /**
     * @var ProductBarcodeType $ProductBarcodeTypeEnum
     */
    protected $ProductBarcodeTypeEnum = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $ProductBarcodeType
     */
    protected $ProductBarcodeType = null;

    /**
     * @var \DateTime $DateCreated
     */
    protected $DateCreated = null;

    /**
     * @var int $StatusId
     */
    protected $StatusId = null;

    /**
     * @var IStatusID $StatusIdEnum
     */
    protected $StatusIdEnum = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @var string $BarcodeNumber
     */
    protected $BarcodeNumber = null;

    /**
     * @var int $EcomProductId
     */
    protected $EcomProductId = null;

    /**
     * @var int $BrandId
     */
    protected $BrandId = null;

    /**
     * @var string $FunctionalParameter
     */
    protected $FunctionalParameter = null;

    /**
     * @param ProductBarcodeType $ProductBarcodeTypeEnum
     * @param int $ID
     * @param int $ProductID
     * @param int $ProductBarcodeType
     * @param \DateTime $DateCreated
     * @param int $StatusId
     * @param IStatusID $StatusIdEnum
     * @param \DateTime $FromDate
     * @param \DateTime $ToDate
     * @param int $EcomProductId
     * @param int $BrandId
     */
    public function __construct($ProductBarcodeTypeEnum, $ID, $ProductID, $ProductBarcodeType, \DateTime $DateCreated, $StatusId, $StatusIdEnum, \DateTime $FromDate, \DateTime $ToDate, $EcomProductId, $BrandId)
    {
      $this->ProductBarcodeTypeEnum = $ProductBarcodeTypeEnum;
      $this->ID = $ID;
      $this->ProductID = $ProductID;
      $this->ProductBarcodeType = $ProductBarcodeType;
      $this->DateCreated = $DateCreated->format(\DateTime::ATOM);
      $this->StatusId = $StatusId;
      $this->StatusIdEnum = $StatusIdEnum;
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
      $this->EcomProductId = $EcomProductId;
      $this->BrandId = $BrandId;
    }

    /**
     * @return ProductBarcodeType
     */
    public function getProductBarcodeTypeEnum()
    {
      return $this->ProductBarcodeTypeEnum;
    }

    /**
     * @param ProductBarcodeType $ProductBarcodeTypeEnum
     * @return ProductBarcode
     */
    public function setProductBarcodeTypeEnum($ProductBarcodeTypeEnum)
    {
      $this->ProductBarcodeTypeEnum = $ProductBarcodeTypeEnum;
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
     * @return ProductBarcode
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return ProductBarcode
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
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
     * @return ProductBarcode
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductBarcodeType()
    {
      return $this->ProductBarcodeType;
    }

    /**
     * @param int $ProductBarcodeType
     * @return ProductBarcode
     */
    public function setProductBarcodeType($ProductBarcodeType)
    {
      $this->ProductBarcodeType = $ProductBarcodeType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
      if ($this->DateCreated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateCreated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateCreated
     * @return ProductBarcode
     */
    public function setDateCreated(\DateTime $DateCreated)
    {
      $this->DateCreated = $DateCreated->format(\DateTime::ATOM);
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
     * @return ProductBarcode
     */
    public function setStatusId($StatusId)
    {
      $this->StatusId = $StatusId;
      return $this;
    }

    /**
     * @return IStatusID
     */
    public function getStatusIdEnum()
    {
      return $this->StatusIdEnum;
    }

    /**
     * @param IStatusID $StatusIdEnum
     * @return ProductBarcode
     */
    public function setStatusIdEnum($StatusIdEnum)
    {
      $this->StatusIdEnum = $StatusIdEnum;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->FromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FromDate
     * @return ProductBarcode
     */
    public function setFromDate(\DateTime $FromDate)
    {
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->ToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ToDate
     * @return ProductBarcode
     */
    public function setToDate(\DateTime $ToDate)
    {
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getBarcodeNumber()
    {
      return $this->BarcodeNumber;
    }

    /**
     * @param string $BarcodeNumber
     * @return ProductBarcode
     */
    public function setBarcodeNumber($BarcodeNumber)
    {
      $this->BarcodeNumber = $BarcodeNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getEcomProductId()
    {
      return $this->EcomProductId;
    }

    /**
     * @param int $EcomProductId
     * @return ProductBarcode
     */
    public function setEcomProductId($EcomProductId)
    {
      $this->EcomProductId = $EcomProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getBrandId()
    {
      return $this->BrandId;
    }

    /**
     * @param int $BrandId
     * @return ProductBarcode
     */
    public function setBrandId($BrandId)
    {
      $this->BrandId = $BrandId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFunctionalParameter()
    {
      return $this->FunctionalParameter;
    }

    /**
     * @param string $FunctionalParameter
     * @return ProductBarcode
     */
    public function setFunctionalParameter($FunctionalParameter)
    {
      $this->FunctionalParameter = $FunctionalParameter;
      return $this;
    }

}
