<?php

class ccpCustomerOrderItem
{

    /**
     * @var ArrayOfCCPSaleItemMeta $Meta
     */
    protected $Meta = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $Dispatched
     */
    protected $Dispatched = null;

    /**
     * @var int $PendingDispatch
     */
    protected $PendingDispatch = null;

    /**
     * @var int $Returns
     */
    protected $Returns = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var float $Vat
     */
    protected $Vat = null;

    /**
     * @var float $PriceGross
     */
    protected $PriceGross = null;

    /**
     * @var float $Discount
     */
    protected $Discount = null;

    /**
     * @var string $RowDiscountReason
     */
    protected $RowDiscountReason = null;

    /**
     * @var float $RowTotalGross
     */
    protected $RowTotalGross = null;

    /**
     * @var float $RowTotalGrossGBP
     */
    protected $RowTotalGrossGBP = null;

    /**
     * @var float $RowTotalNet
     */
    protected $RowTotalNet = null;

    /**
     * @var float $RowTotalNetGBP
     */
    protected $RowTotalNetGBP = null;

    /**
     * @var float $RowTotalVAT
     */
    protected $RowTotalVAT = null;

    /**
     * @var float $RowTotalVATGBP
     */
    protected $RowTotalVATGBP = null;

    /**
     * @var float $ItemDiscountGross
     */
    protected $ItemDiscountGross = null;

    /**
     * @var float $ItemDiscountGrossGBP
     */
    protected $ItemDiscountGrossGBP = null;

    /**
     * @var float $RowDiscountGross
     */
    protected $RowDiscountGross = null;

    /**
     * @var float $RowDiscountGrossGBP
     */
    protected $RowDiscountGrossGBP = null;

    /**
     * @var float $ItemDiscountNet
     */
    protected $ItemDiscountNet = null;

    /**
     * @var float $ItemDiscountNetGBP
     */
    protected $ItemDiscountNetGBP = null;

    /**
     * @var float $RowDiscountNet
     */
    protected $RowDiscountNet = null;

    /**
     * @var float $RowDiscountNetGBP
     */
    protected $RowDiscountNetGBP = null;

    /**
     * @var float $ItemDiscountVAT
     */
    protected $ItemDiscountVAT = null;

    /**
     * @var float $ItemDiscountVATGBP
     */
    protected $ItemDiscountVATGBP = null;

    /**
     * @var float $RowDiscountVAT
     */
    protected $RowDiscountVAT = null;

    /**
     * @var float $RowDiscountVATGBP
     */
    protected $RowDiscountVATGBP = null;

    /**
     * @var float $Refund
     */
    protected $Refund = null;

    /**
     * @var int $SageUniqueNumber
     */
    protected $SageUniqueNumber = null;

    /**
     * @var int $CustomerOrderID
     */
    protected $CustomerOrderID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var string $ProductInfo
     */
    protected $ProductInfo = null;

    /**
     * @var string $ProductShortName
     */
    protected $ProductShortName = null;

    /**
     * @var string $ProductDescription
     */
    protected $ProductDescription = null;

    /**
     * @var int $BoxNo
     */
    protected $BoxNo = null;

    /**
     * @var int $VATRateID
     */
    protected $VATRateID = null;

    /**
     * @var float $VATRate
     */
    protected $VATRate = null;

    /**
     * @var int $SaleOrderItemID
     */
    protected $SaleOrderItemID = null;

    /**
     * @var boolean $PartOfPack
     */
    protected $PartOfPack = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $TradingName
     */
    protected $TradingName = null;

    /**
     * @var string $StockCode
     */
    protected $StockCode = null;

    /**
     * @var string $ProductOptionValues
     */
    protected $ProductOptionValues = null;

    /**
     * @var int $ProductRangeID
     */
    protected $ProductRangeID = null;

    /**
     * @var string $ProductRangeName
     */
    protected $ProductRangeName = null;

    /**
     * @var \DateTime $AllocatedDate
     */
    protected $AllocatedDate = null;

    /**
     * @var int $AllocatedQuantity
     */
    protected $AllocatedQuantity = null;

    /**
     * @var string $AllocatedReason
     */
    protected $AllocatedReason = null;

    /**
     * @var string $ImageURL
     */
    protected $ImageURL = null;

    /**
     * @var int $AmountSentToChannel
     */
    protected $AmountSentToChannel = null;

    /**
     * @var int $ParentProductID
     */
    protected $ParentProductID = null;

    /**
     * @var string $ParentProductName
     */
    protected $ParentProductName = null;

    /**
     * @var int $OrderItemProductType
     */
    protected $OrderItemProductType = null;

    /**
     * @var string $GiftMessage
     */
    protected $GiftMessage = null;

    /**
     * @var int $ParentProductQuantity
     */
    protected $ParentProductQuantity = null;

    /**
     * @var string $SupplierSKU
     */
    protected $SupplierSKU = null;

    /**
     * @var Product $Product
     */
    protected $Product = null;

    /**
     * @var int $PickFromWarehouseBayId
     */
    protected $PickFromWarehouseBayId = null;

    /**
     * @var int $PickFromWarehouseId
     */
    protected $PickFromWarehouseId = null;

    /**
     * @var string $CurrencySymbol
     */
    protected $CurrencySymbol = null;

    /**
     * @var StatusID $StatusID
     */
    protected $StatusID = null;

    /**
     * @var int $WidthMM
     */
    protected $WidthMM = null;

    /**
     * @var int $LengthMM
     */
    protected $LengthMM = null;

    /**
     * @var int $HeightMM
     */
    protected $HeightMM = null;

    /**
     * @var string $AttachmentHoverHTML
     */
    protected $AttachmentHoverHTML = null;

    /**
     * @param int $ID
     * @param int $Quantity
     * @param int $Dispatched
     * @param int $PendingDispatch
     * @param int $Returns
     * @param float $Price
     * @param float $Vat
     * @param float $PriceGross
     * @param float $Discount
     * @param float $RowTotalGross
     * @param float $RowTotalGrossGBP
     * @param float $RowTotalNet
     * @param float $RowTotalNetGBP
     * @param float $RowTotalVAT
     * @param float $RowTotalVATGBP
     * @param float $ItemDiscountGross
     * @param float $ItemDiscountGrossGBP
     * @param float $RowDiscountGross
     * @param float $RowDiscountGrossGBP
     * @param float $ItemDiscountNet
     * @param float $ItemDiscountNetGBP
     * @param float $RowDiscountNet
     * @param float $RowDiscountNetGBP
     * @param float $ItemDiscountVAT
     * @param float $ItemDiscountVATGBP
     * @param float $RowDiscountVAT
     * @param float $RowDiscountVATGBP
     * @param float $Refund
     * @param int $SageUniqueNumber
     * @param int $CustomerOrderID
     * @param int $ProductID
     * @param int $BoxNo
     * @param int $VATRateID
     * @param float $VATRate
     * @param int $SaleOrderItemID
     * @param boolean $PartOfPack
     * @param int $CustomerID
     * @param int $ProductRangeID
     * @param \DateTime $AllocatedDate
     * @param int $AllocatedQuantity
     * @param int $AmountSentToChannel
     * @param int $ParentProductID
     * @param int $OrderItemProductType
     * @param int $ParentProductQuantity
     * @param int $PickFromWarehouseBayId
     * @param int $PickFromWarehouseId
     * @param StatusID $StatusID
     * @param int $WidthMM
     * @param int $LengthMM
     * @param int $HeightMM
     */
    public function __construct($ID, $Quantity, $Dispatched, $PendingDispatch, $Returns, $Price, $Vat, $PriceGross, $Discount, $RowTotalGross, $RowTotalGrossGBP, $RowTotalNet, $RowTotalNetGBP, $RowTotalVAT, $RowTotalVATGBP, $ItemDiscountGross, $ItemDiscountGrossGBP, $RowDiscountGross, $RowDiscountGrossGBP, $ItemDiscountNet, $ItemDiscountNetGBP, $RowDiscountNet, $RowDiscountNetGBP, $ItemDiscountVAT, $ItemDiscountVATGBP, $RowDiscountVAT, $RowDiscountVATGBP, $Refund, $SageUniqueNumber, $CustomerOrderID, $ProductID, $BoxNo, $VATRateID, $VATRate, $SaleOrderItemID, $PartOfPack, $CustomerID, $ProductRangeID, \DateTime $AllocatedDate, $AllocatedQuantity, $AmountSentToChannel, $ParentProductID, $OrderItemProductType, $ParentProductQuantity, $PickFromWarehouseBayId, $PickFromWarehouseId, $StatusID, $WidthMM, $LengthMM, $HeightMM)
    {
      $this->ID = $ID;
      $this->Quantity = $Quantity;
      $this->Dispatched = $Dispatched;
      $this->PendingDispatch = $PendingDispatch;
      $this->Returns = $Returns;
      $this->Price = $Price;
      $this->Vat = $Vat;
      $this->PriceGross = $PriceGross;
      $this->Discount = $Discount;
      $this->RowTotalGross = $RowTotalGross;
      $this->RowTotalGrossGBP = $RowTotalGrossGBP;
      $this->RowTotalNet = $RowTotalNet;
      $this->RowTotalNetGBP = $RowTotalNetGBP;
      $this->RowTotalVAT = $RowTotalVAT;
      $this->RowTotalVATGBP = $RowTotalVATGBP;
      $this->ItemDiscountGross = $ItemDiscountGross;
      $this->ItemDiscountGrossGBP = $ItemDiscountGrossGBP;
      $this->RowDiscountGross = $RowDiscountGross;
      $this->RowDiscountGrossGBP = $RowDiscountGrossGBP;
      $this->ItemDiscountNet = $ItemDiscountNet;
      $this->ItemDiscountNetGBP = $ItemDiscountNetGBP;
      $this->RowDiscountNet = $RowDiscountNet;
      $this->RowDiscountNetGBP = $RowDiscountNetGBP;
      $this->ItemDiscountVAT = $ItemDiscountVAT;
      $this->ItemDiscountVATGBP = $ItemDiscountVATGBP;
      $this->RowDiscountVAT = $RowDiscountVAT;
      $this->RowDiscountVATGBP = $RowDiscountVATGBP;
      $this->Refund = $Refund;
      $this->SageUniqueNumber = $SageUniqueNumber;
      $this->CustomerOrderID = $CustomerOrderID;
      $this->ProductID = $ProductID;
      $this->BoxNo = $BoxNo;
      $this->VATRateID = $VATRateID;
      $this->VATRate = $VATRate;
      $this->SaleOrderItemID = $SaleOrderItemID;
      $this->PartOfPack = $PartOfPack;
      $this->CustomerID = $CustomerID;
      $this->ProductRangeID = $ProductRangeID;
      $this->AllocatedDate = $AllocatedDate->format(\DateTime::ATOM);
      $this->AllocatedQuantity = $AllocatedQuantity;
      $this->AmountSentToChannel = $AmountSentToChannel;
      $this->ParentProductID = $ParentProductID;
      $this->OrderItemProductType = $OrderItemProductType;
      $this->ParentProductQuantity = $ParentProductQuantity;
      $this->PickFromWarehouseBayId = $PickFromWarehouseBayId;
      $this->PickFromWarehouseId = $PickFromWarehouseId;
      $this->StatusID = $StatusID;
      $this->WidthMM = $WidthMM;
      $this->LengthMM = $LengthMM;
      $this->HeightMM = $HeightMM;
    }

    /**
     * @return ArrayOfCCPSaleItemMeta
     */
    public function getMeta()
    {
      return $this->Meta;
    }

    /**
     * @param ArrayOfCCPSaleItemMeta $Meta
     * @return ccpCustomerOrderItem
     */
    public function setMeta($Meta)
    {
      $this->Meta = $Meta;
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
     * @return ccpCustomerOrderItem
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return ccpCustomerOrderItem
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getDispatched()
    {
      return $this->Dispatched;
    }

    /**
     * @param int $Dispatched
     * @return ccpCustomerOrderItem
     */
    public function setDispatched($Dispatched)
    {
      $this->Dispatched = $Dispatched;
      return $this;
    }

    /**
     * @return int
     */
    public function getPendingDispatch()
    {
      return $this->PendingDispatch;
    }

    /**
     * @param int $PendingDispatch
     * @return ccpCustomerOrderItem
     */
    public function setPendingDispatch($PendingDispatch)
    {
      $this->PendingDispatch = $PendingDispatch;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturns()
    {
      return $this->Returns;
    }

    /**
     * @param int $Returns
     * @return ccpCustomerOrderItem
     */
    public function setReturns($Returns)
    {
      $this->Returns = $Returns;
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
     * @return ccpCustomerOrderItem
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return float
     */
    public function getVat()
    {
      return $this->Vat;
    }

    /**
     * @param float $Vat
     * @return ccpCustomerOrderItem
     */
    public function setVat($Vat)
    {
      $this->Vat = $Vat;
      return $this;
    }

    /**
     * @return float
     */
    public function getPriceGross()
    {
      return $this->PriceGross;
    }

    /**
     * @param float $PriceGross
     * @return ccpCustomerOrderItem
     */
    public function setPriceGross($PriceGross)
    {
      $this->PriceGross = $PriceGross;
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
     * @return ccpCustomerOrderItem
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRowDiscountReason()
    {
      return $this->RowDiscountReason;
    }

    /**
     * @param string $RowDiscountReason
     * @return ccpCustomerOrderItem
     */
    public function setRowDiscountReason($RowDiscountReason)
    {
      $this->RowDiscountReason = $RowDiscountReason;
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
     * @return ccpCustomerOrderItem
     */
    public function setRowTotalGross($RowTotalGross)
    {
      $this->RowTotalGross = $RowTotalGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowTotalGrossGBP()
    {
      return $this->RowTotalGrossGBP;
    }

    /**
     * @param float $RowTotalGrossGBP
     * @return ccpCustomerOrderItem
     */
    public function setRowTotalGrossGBP($RowTotalGrossGBP)
    {
      $this->RowTotalGrossGBP = $RowTotalGrossGBP;
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
     * @return ccpCustomerOrderItem
     */
    public function setRowTotalNet($RowTotalNet)
    {
      $this->RowTotalNet = $RowTotalNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowTotalNetGBP()
    {
      return $this->RowTotalNetGBP;
    }

    /**
     * @param float $RowTotalNetGBP
     * @return ccpCustomerOrderItem
     */
    public function setRowTotalNetGBP($RowTotalNetGBP)
    {
      $this->RowTotalNetGBP = $RowTotalNetGBP;
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
     * @return ccpCustomerOrderItem
     */
    public function setRowTotalVAT($RowTotalVAT)
    {
      $this->RowTotalVAT = $RowTotalVAT;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowTotalVATGBP()
    {
      return $this->RowTotalVATGBP;
    }

    /**
     * @param float $RowTotalVATGBP
     * @return ccpCustomerOrderItem
     */
    public function setRowTotalVATGBP($RowTotalVATGBP)
    {
      $this->RowTotalVATGBP = $RowTotalVATGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemDiscountGross()
    {
      return $this->ItemDiscountGross;
    }

    /**
     * @param float $ItemDiscountGross
     * @return ccpCustomerOrderItem
     */
    public function setItemDiscountGross($ItemDiscountGross)
    {
      $this->ItemDiscountGross = $ItemDiscountGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemDiscountGrossGBP()
    {
      return $this->ItemDiscountGrossGBP;
    }

    /**
     * @param float $ItemDiscountGrossGBP
     * @return ccpCustomerOrderItem
     */
    public function setItemDiscountGrossGBP($ItemDiscountGrossGBP)
    {
      $this->ItemDiscountGrossGBP = $ItemDiscountGrossGBP;
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
     * @return ccpCustomerOrderItem
     */
    public function setRowDiscountGross($RowDiscountGross)
    {
      $this->RowDiscountGross = $RowDiscountGross;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowDiscountGrossGBP()
    {
      return $this->RowDiscountGrossGBP;
    }

    /**
     * @param float $RowDiscountGrossGBP
     * @return ccpCustomerOrderItem
     */
    public function setRowDiscountGrossGBP($RowDiscountGrossGBP)
    {
      $this->RowDiscountGrossGBP = $RowDiscountGrossGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemDiscountNet()
    {
      return $this->ItemDiscountNet;
    }

    /**
     * @param float $ItemDiscountNet
     * @return ccpCustomerOrderItem
     */
    public function setItemDiscountNet($ItemDiscountNet)
    {
      $this->ItemDiscountNet = $ItemDiscountNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemDiscountNetGBP()
    {
      return $this->ItemDiscountNetGBP;
    }

    /**
     * @param float $ItemDiscountNetGBP
     * @return ccpCustomerOrderItem
     */
    public function setItemDiscountNetGBP($ItemDiscountNetGBP)
    {
      $this->ItemDiscountNetGBP = $ItemDiscountNetGBP;
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
     * @return ccpCustomerOrderItem
     */
    public function setRowDiscountNet($RowDiscountNet)
    {
      $this->RowDiscountNet = $RowDiscountNet;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowDiscountNetGBP()
    {
      return $this->RowDiscountNetGBP;
    }

    /**
     * @param float $RowDiscountNetGBP
     * @return ccpCustomerOrderItem
     */
    public function setRowDiscountNetGBP($RowDiscountNetGBP)
    {
      $this->RowDiscountNetGBP = $RowDiscountNetGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemDiscountVAT()
    {
      return $this->ItemDiscountVAT;
    }

    /**
     * @param float $ItemDiscountVAT
     * @return ccpCustomerOrderItem
     */
    public function setItemDiscountVAT($ItemDiscountVAT)
    {
      $this->ItemDiscountVAT = $ItemDiscountVAT;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemDiscountVATGBP()
    {
      return $this->ItemDiscountVATGBP;
    }

    /**
     * @param float $ItemDiscountVATGBP
     * @return ccpCustomerOrderItem
     */
    public function setItemDiscountVATGBP($ItemDiscountVATGBP)
    {
      $this->ItemDiscountVATGBP = $ItemDiscountVATGBP;
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
     * @return ccpCustomerOrderItem
     */
    public function setRowDiscountVAT($RowDiscountVAT)
    {
      $this->RowDiscountVAT = $RowDiscountVAT;
      return $this;
    }

    /**
     * @return float
     */
    public function getRowDiscountVATGBP()
    {
      return $this->RowDiscountVATGBP;
    }

    /**
     * @param float $RowDiscountVATGBP
     * @return ccpCustomerOrderItem
     */
    public function setRowDiscountVATGBP($RowDiscountVATGBP)
    {
      $this->RowDiscountVATGBP = $RowDiscountVATGBP;
      return $this;
    }

    /**
     * @return float
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param float $Refund
     * @return ccpCustomerOrderItem
     */
    public function setRefund($Refund)
    {
      $this->Refund = $Refund;
      return $this;
    }

    /**
     * @return int
     */
    public function getSageUniqueNumber()
    {
      return $this->SageUniqueNumber;
    }

    /**
     * @param int $SageUniqueNumber
     * @return ccpCustomerOrderItem
     */
    public function setSageUniqueNumber($SageUniqueNumber)
    {
      $this->SageUniqueNumber = $SageUniqueNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerOrderID()
    {
      return $this->CustomerOrderID;
    }

    /**
     * @param int $CustomerOrderID
     * @return ccpCustomerOrderItem
     */
    public function setCustomerOrderID($CustomerOrderID)
    {
      $this->CustomerOrderID = $CustomerOrderID;
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
     * @return ccpCustomerOrderItem
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
     * @return ccpCustomerOrderItem
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductInfo()
    {
      return $this->ProductInfo;
    }

    /**
     * @param string $ProductInfo
     * @return ccpCustomerOrderItem
     */
    public function setProductInfo($ProductInfo)
    {
      $this->ProductInfo = $ProductInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductShortName()
    {
      return $this->ProductShortName;
    }

    /**
     * @param string $ProductShortName
     * @return ccpCustomerOrderItem
     */
    public function setProductShortName($ProductShortName)
    {
      $this->ProductShortName = $ProductShortName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductDescription()
    {
      return $this->ProductDescription;
    }

    /**
     * @param string $ProductDescription
     * @return ccpCustomerOrderItem
     */
    public function setProductDescription($ProductDescription)
    {
      $this->ProductDescription = $ProductDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getBoxNo()
    {
      return $this->BoxNo;
    }

    /**
     * @param int $BoxNo
     * @return ccpCustomerOrderItem
     */
    public function setBoxNo($BoxNo)
    {
      $this->BoxNo = $BoxNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getVATRateID()
    {
      return $this->VATRateID;
    }

    /**
     * @param int $VATRateID
     * @return ccpCustomerOrderItem
     */
    public function setVATRateID($VATRateID)
    {
      $this->VATRateID = $VATRateID;
      return $this;
    }

    /**
     * @return float
     */
    public function getVATRate()
    {
      return $this->VATRate;
    }

    /**
     * @param float $VATRate
     * @return ccpCustomerOrderItem
     */
    public function setVATRate($VATRate)
    {
      $this->VATRate = $VATRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getSaleOrderItemID()
    {
      return $this->SaleOrderItemID;
    }

    /**
     * @param int $SaleOrderItemID
     * @return ccpCustomerOrderItem
     */
    public function setSaleOrderItemID($SaleOrderItemID)
    {
      $this->SaleOrderItemID = $SaleOrderItemID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPartOfPack()
    {
      return $this->PartOfPack;
    }

    /**
     * @param boolean $PartOfPack
     * @return ccpCustomerOrderItem
     */
    public function setPartOfPack($PartOfPack)
    {
      $this->PartOfPack = $PartOfPack;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param int $CustomerID
     * @return ccpCustomerOrderItem
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return ccpCustomerOrderItem
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTradingName()
    {
      return $this->TradingName;
    }

    /**
     * @param string $TradingName
     * @return ccpCustomerOrderItem
     */
    public function setTradingName($TradingName)
    {
      $this->TradingName = $TradingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStockCode()
    {
      return $this->StockCode;
    }

    /**
     * @param string $StockCode
     * @return ccpCustomerOrderItem
     */
    public function setStockCode($StockCode)
    {
      $this->StockCode = $StockCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductOptionValues()
    {
      return $this->ProductOptionValues;
    }

    /**
     * @param string $ProductOptionValues
     * @return ccpCustomerOrderItem
     */
    public function setProductOptionValues($ProductOptionValues)
    {
      $this->ProductOptionValues = $ProductOptionValues;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductRangeID()
    {
      return $this->ProductRangeID;
    }

    /**
     * @param int $ProductRangeID
     * @return ccpCustomerOrderItem
     */
    public function setProductRangeID($ProductRangeID)
    {
      $this->ProductRangeID = $ProductRangeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductRangeName()
    {
      return $this->ProductRangeName;
    }

    /**
     * @param string $ProductRangeName
     * @return ccpCustomerOrderItem
     */
    public function setProductRangeName($ProductRangeName)
    {
      $this->ProductRangeName = $ProductRangeName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAllocatedDate()
    {
      if ($this->AllocatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AllocatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AllocatedDate
     * @return ccpCustomerOrderItem
     */
    public function setAllocatedDate(\DateTime $AllocatedDate)
    {
      $this->AllocatedDate = $AllocatedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getAllocatedQuantity()
    {
      return $this->AllocatedQuantity;
    }

    /**
     * @param int $AllocatedQuantity
     * @return ccpCustomerOrderItem
     */
    public function setAllocatedQuantity($AllocatedQuantity)
    {
      $this->AllocatedQuantity = $AllocatedQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllocatedReason()
    {
      return $this->AllocatedReason;
    }

    /**
     * @param string $AllocatedReason
     * @return ccpCustomerOrderItem
     */
    public function setAllocatedReason($AllocatedReason)
    {
      $this->AllocatedReason = $AllocatedReason;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageURL()
    {
      return $this->ImageURL;
    }

    /**
     * @param string $ImageURL
     * @return ccpCustomerOrderItem
     */
    public function setImageURL($ImageURL)
    {
      $this->ImageURL = $ImageURL;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmountSentToChannel()
    {
      return $this->AmountSentToChannel;
    }

    /**
     * @param int $AmountSentToChannel
     * @return ccpCustomerOrderItem
     */
    public function setAmountSentToChannel($AmountSentToChannel)
    {
      $this->AmountSentToChannel = $AmountSentToChannel;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentProductID()
    {
      return $this->ParentProductID;
    }

    /**
     * @param int $ParentProductID
     * @return ccpCustomerOrderItem
     */
    public function setParentProductID($ParentProductID)
    {
      $this->ParentProductID = $ParentProductID;
      return $this;
    }

    /**
     * @return string
     */
    public function getParentProductName()
    {
      return $this->ParentProductName;
    }

    /**
     * @param string $ParentProductName
     * @return ccpCustomerOrderItem
     */
    public function setParentProductName($ParentProductName)
    {
      $this->ParentProductName = $ParentProductName;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderItemProductType()
    {
      return $this->OrderItemProductType;
    }

    /**
     * @param int $OrderItemProductType
     * @return ccpCustomerOrderItem
     */
    public function setOrderItemProductType($OrderItemProductType)
    {
      $this->OrderItemProductType = $OrderItemProductType;
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
     * @return ccpCustomerOrderItem
     */
    public function setGiftMessage($GiftMessage)
    {
      $this->GiftMessage = $GiftMessage;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentProductQuantity()
    {
      return $this->ParentProductQuantity;
    }

    /**
     * @param int $ParentProductQuantity
     * @return ccpCustomerOrderItem
     */
    public function setParentProductQuantity($ParentProductQuantity)
    {
      $this->ParentProductQuantity = $ParentProductQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierSKU()
    {
      return $this->SupplierSKU;
    }

    /**
     * @param string $SupplierSKU
     * @return ccpCustomerOrderItem
     */
    public function setSupplierSKU($SupplierSKU)
    {
      $this->SupplierSKU = $SupplierSKU;
      return $this;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param Product $Product
     * @return ccpCustomerOrderItem
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
      return $this;
    }

    /**
     * @return int
     */
    public function getPickFromWarehouseBayId()
    {
      return $this->PickFromWarehouseBayId;
    }

    /**
     * @param int $PickFromWarehouseBayId
     * @return ccpCustomerOrderItem
     */
    public function setPickFromWarehouseBayId($PickFromWarehouseBayId)
    {
      $this->PickFromWarehouseBayId = $PickFromWarehouseBayId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPickFromWarehouseId()
    {
      return $this->PickFromWarehouseId;
    }

    /**
     * @param int $PickFromWarehouseId
     * @return ccpCustomerOrderItem
     */
    public function setPickFromWarehouseId($PickFromWarehouseId)
    {
      $this->PickFromWarehouseId = $PickFromWarehouseId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
      return $this->CurrencySymbol;
    }

    /**
     * @param string $CurrencySymbol
     * @return ccpCustomerOrderItem
     */
    public function setCurrencySymbol($CurrencySymbol)
    {
      $this->CurrencySymbol = $CurrencySymbol;
      return $this;
    }

    /**
     * @return StatusID
     */
    public function getStatusID()
    {
      return $this->StatusID;
    }

    /**
     * @param StatusID $StatusID
     * @return ccpCustomerOrderItem
     */
    public function setStatusID($StatusID)
    {
      $this->StatusID = $StatusID;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidthMM()
    {
      return $this->WidthMM;
    }

    /**
     * @param int $WidthMM
     * @return ccpCustomerOrderItem
     */
    public function setWidthMM($WidthMM)
    {
      $this->WidthMM = $WidthMM;
      return $this;
    }

    /**
     * @return int
     */
    public function getLengthMM()
    {
      return $this->LengthMM;
    }

    /**
     * @param int $LengthMM
     * @return ccpCustomerOrderItem
     */
    public function setLengthMM($LengthMM)
    {
      $this->LengthMM = $LengthMM;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeightMM()
    {
      return $this->HeightMM;
    }

    /**
     * @param int $HeightMM
     * @return ccpCustomerOrderItem
     */
    public function setHeightMM($HeightMM)
    {
      $this->HeightMM = $HeightMM;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttachmentHoverHTML()
    {
      return $this->AttachmentHoverHTML;
    }

    /**
     * @param string $AttachmentHoverHTML
     * @return ccpCustomerOrderItem
     */
    public function setAttachmentHoverHTML($AttachmentHoverHTML)
    {
      $this->AttachmentHoverHTML = $AttachmentHoverHTML;
      return $this;
    }

}
