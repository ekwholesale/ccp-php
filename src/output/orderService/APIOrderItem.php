<?php

class APIOrderItem
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var string $BarCode
     */
    protected $BarCode = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $ExternalProductId
     */
    protected $ExternalProductId = null;

    /**
     * @var string $GiftMessage
     */
    protected $GiftMessage = null;

    /**
     * @var string $AdditionalBarCodes
     */
    protected $AdditionalBarCodes = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var int $VatRateID
     */
    protected $VatRateID = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var float $Discount
     */
    protected $Discount = null;

    /**
     * @var float $RowTotalGross
     */
    protected $RowTotalGross = null;

    /**
     * @var float $RowTotalNet
     */
    protected $RowTotalNet = null;

    /**
     * @var float $RowTotalVAT
     */
    protected $RowTotalVAT = null;

    /**
     * @var float $RowDiscountGross
     */
    protected $RowDiscountGross = null;

    /**
     * @var float $RowDiscountNet
     */
    protected $RowDiscountNet = null;

    /**
     * @var float $RowDiscountVAT
     */
    protected $RowDiscountVAT = null;

    /**
     * @var boolean $UseNetPrice
     */
    protected $UseNetPrice = null;

    /**
     * @var boolean $DiscountCalculatedInPrice
     */
    protected $DiscountCalculatedInPrice = null;

    /**
     * @param int $ID
     * @param int $OrderID
     * @param int $ProductID
     * @param int $VatRateID
     * @param int $Quantity
     * @param float $Price
     * @param float $Discount
     * @param float $RowTotalGross
     * @param float $RowTotalNet
     * @param float $RowTotalVAT
     * @param float $RowDiscountGross
     * @param float $RowDiscountNet
     * @param float $RowDiscountVAT
     * @param boolean $UseNetPrice
     * @param boolean $DiscountCalculatedInPrice
     */
    public function __construct($ID, $OrderID, $ProductID, $VatRateID, $Quantity, $Price, $Discount, $RowTotalGross, $RowTotalNet, $RowTotalVAT, $RowDiscountGross, $RowDiscountNet, $RowDiscountVAT, $UseNetPrice, $DiscountCalculatedInPrice)
    {
      $this->ID = $ID;
      $this->OrderID = $OrderID;
      $this->ProductID = $ProductID;
      $this->VatRateID = $VatRateID;
      $this->Quantity = $Quantity;
      $this->Price = $Price;
      $this->Discount = $Discount;
      $this->RowTotalGross = $RowTotalGross;
      $this->RowTotalNet = $RowTotalNet;
      $this->RowTotalVAT = $RowTotalVAT;
      $this->RowDiscountGross = $RowDiscountGross;
      $this->RowDiscountNet = $RowDiscountNet;
      $this->RowDiscountVAT = $RowDiscountVAT;
      $this->UseNetPrice = $UseNetPrice;
      $this->DiscountCalculatedInPrice = $DiscountCalculatedInPrice;
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
     * @return APIOrderItem
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return APIOrderItem
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarCode()
    {
      return $this->BarCode;
    }

    /**
     * @param string $BarCode
     * @return APIOrderItem
     */
    public function setBarCode($BarCode)
    {
      $this->BarCode = $BarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param string $SKU
     * @return APIOrderItem
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalProductId()
    {
      return $this->ExternalProductId;
    }

    /**
     * @param string $ExternalProductId
     * @return APIOrderItem
     */
    public function setExternalProductId($ExternalProductId)
    {
      $this->ExternalProductId = $ExternalProductId;
      return $this;
    }

    /**
     * @return string
     */
    public function getGiftMessage()
    {
      return $this->GiftMessage;
    }

    /**
     * @param string $GiftMessage
     * @return APIOrderItem
     */
    public function setGiftMessage($GiftMessage)
    {
      $this->GiftMessage = $GiftMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalBarCodes()
    {
      return $this->AdditionalBarCodes;
    }

    /**
     * @param string $AdditionalBarCodes
     * @return APIOrderItem
     */
    public function setAdditionalBarCodes($AdditionalBarCodes)
    {
      $this->AdditionalBarCodes = $AdditionalBarCodes;
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
     * @return APIOrderItem
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return APIOrderItem
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return int
     */
    public function getVatRateID()
    {
      return $this->VatRateID;
    }

    /**
     * @param int $VatRateID
     * @return APIOrderItem
     */
    public function setVatRateID($VatRateID)
    {
      $this->VatRateID = $VatRateID;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return APIOrderItem
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return APIOrderItem
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param float $Discount
     * @return APIOrderItem
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowTotalGross()
    {
      return $this->RowTotalGross;
    }

    /**
     * @param float $RowTotalGross
     * @return APIOrderItem
     */
    public function setRowTotalGross($RowTotalGross)
    {
      $this->RowTotalGross = $RowTotalGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowTotalNet()
    {
      return $this->RowTotalNet;
    }

    /**
     * @param float $RowTotalNet
     * @return APIOrderItem
     */
    public function setRowTotalNet($RowTotalNet)
    {
      $this->RowTotalNet = $RowTotalNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowTotalVAT()
    {
      return $this->RowTotalVAT;
    }

    /**
     * @param float $RowTotalVAT
     * @return APIOrderItem
     */
    public function setRowTotalVAT($RowTotalVAT)
    {
      $this->RowTotalVAT = $RowTotalVAT;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowDiscountGross()
    {
      return $this->RowDiscountGross;
    }

    /**
     * @param float $RowDiscountGross
     * @return APIOrderItem
     */
    public function setRowDiscountGross($RowDiscountGross)
    {
      $this->RowDiscountGross = $RowDiscountGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowDiscountNet()
    {
      return $this->RowDiscountNet;
    }

    /**
     * @param float $RowDiscountNet
     * @return APIOrderItem
     */
    public function setRowDiscountNet($RowDiscountNet)
    {
      $this->RowDiscountNet = $RowDiscountNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowDiscountVAT()
    {
      return $this->RowDiscountVAT;
    }

    /**
     * @param float $RowDiscountVAT
     * @return APIOrderItem
     */
    public function setRowDiscountVAT($RowDiscountVAT)
    {
      $this->RowDiscountVAT = $RowDiscountVAT;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseNetPrice()
    {
      return $this->UseNetPrice;
    }

    /**
     * @param boolean $UseNetPrice
     * @return APIOrderItem
     */
    public function setUseNetPrice($UseNetPrice)
    {
      $this->UseNetPrice = $UseNetPrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDiscountCalculatedInPrice()
    {
      return $this->DiscountCalculatedInPrice;
    }

    /**
     * @param boolean $DiscountCalculatedInPrice
     * @return APIOrderItem
     */
    public function setDiscountCalculatedInPrice($DiscountCalculatedInPrice)
    {
      $this->DiscountCalculatedInPrice = $DiscountCalculatedInPrice;
      return $this;
    }

}
