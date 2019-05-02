<?php

class CCPAPIProductsService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetWarehouses' => '\\GetWarehouses',
  'RequestObjectOfInt32' => '\\RequestObjectOfInt32',
  'GetWarehousesResponse' => '\\GetWarehousesResponse',
  'ResponseObjectOfListOfAPIWarehouseDetails' => '\\ResponseObjectOfListOfAPIWarehouseDetails',
  'ArrayOfAPIWarehouseDetails' => '\\ArrayOfAPIWarehouseDetails',
  'APIWarehouseDetails' => '\\APIWarehouseDetails',
  'ArrayOfApiFault' => '\\ArrayOfApiFault',
  'ApiFault' => '\\ApiFault',
  'GetWarehouseBays' => '\\GetWarehouseBays',
  'GetWarehouseBaysResponse' => '\\GetWarehouseBaysResponse',
  'ResponseObjectOfListOfAPIWarehouseBay' => '\\ResponseObjectOfListOfAPIWarehouseBay',
  'ArrayOfAPIWarehouseBay' => '\\ArrayOfAPIWarehouseBay',
  'APIWarehouseBay' => '\\APIWarehouseBay',
  'ArrayOfOrderItemAllocation' => '\\ArrayOfOrderItemAllocation',
  'OrderItemAllocation' => '\\OrderItemAllocation',
  'ArrayOfString' => '\\ArrayOfString',
  'ArrayOfItemBayStockLevel' => '\\ArrayOfItemBayStockLevel',
  'ItemBayStockLevel' => '\\ItemBayStockLevel',
  'GetActiveStockFromBay' => '\\GetActiveStockFromBay',
  'RequestObjectOfAPIProductWarehouseBayStockMovementRequest' => '\\RequestObjectOfAPIProductWarehouseBayStockMovementRequest',
  'APIProductWarehouseBayStockMovementRequest' => '\\APIProductWarehouseBayStockMovementRequest',
  'ArrayOfAPIStockChange' => '\\ArrayOfAPIStockChange',
  'APIStockChange' => '\\APIStockChange',
  'GetActiveStockFromBayResponse' => '\\GetActiveStockFromBayResponse',
  'ResponseObjectOfListOfAPIProductWarehouseBayStockMovement' => '\\ResponseObjectOfListOfAPIProductWarehouseBayStockMovement',
  'ArrayOfAPIProductWarehouseBayStockMovement' => '\\ArrayOfAPIProductWarehouseBayStockMovement',
  'APIProductWarehouseBayStockMovement' => '\\APIProductWarehouseBayStockMovement',
  'APIProduct' => '\\APIProduct',
  'ArrayOfAPIProductSupplierLink' => '\\ArrayOfAPIProductSupplierLink',
  'APIProductSupplierLink' => '\\APIProductSupplierLink',
  'ArrayOfAPIProductRangeOptionValue' => '\\ArrayOfAPIProductRangeOptionValue',
  'APIProductRangeOptionValue' => '\\APIProductRangeOptionValue',
  'ArrayOfAPIProductImage' => '\\ArrayOfAPIProductImage',
  'APIProductImage' => '\\APIProductImage',
  'ArrayOfAPIAmazonVariation' => '\\ArrayOfAPIAmazonVariation',
  'APIAmazonVariation' => '\\APIAmazonVariation',
  'ArrayOfAPIEbayVariation' => '\\ArrayOfAPIEbayVariation',
  'APIEbayVariation' => '\\APIEbayVariation',
  'ArrayOfPackageProductWithQuantity' => '\\ArrayOfPackageProductWithQuantity',
  'PackageProductWithQuantity' => '\\PackageProductWithQuantity',
  'objProduct' => '\\objProduct',
  'ArrayOfProductBarcode' => '\\ArrayOfProductBarcode',
  'ProductBarcode' => '\\ProductBarcode',
  'ArrayOfWarehouseBay' => '\\ArrayOfWarehouseBay',
  'WarehouseBay' => '\\WarehouseBay',
  'ArrayOfProduct' => '\\ArrayOfProduct',
  'Product' => '\\Product',
  'ArrayOfFactory' => '\\ArrayOfFactory',
  'Factory' => '\\Factory',
  'ArrayOfProductFactoryLink' => '\\ArrayOfProductFactoryLink',
  'ProductFactoryLink' => '\\ProductFactoryLink',
  'ArrayOfProductOptionValue' => '\\ArrayOfProductOptionValue',
  'ProductOptionValue' => '\\ProductOptionValue',
  'ProductRange' => '\\ProductRange',
  'ProductDimensions' => '\\ProductDimensions',
  'BaseDimensions' => '\\BaseDimensions',
  'ArrayOfAPISalesChannelLink' => '\\ArrayOfAPISalesChannelLink',
  'APISalesChannelLink' => '\\APISalesChannelLink',
  'ArrayOfSupplierOrderItem' => '\\ArrayOfSupplierOrderItem',
  'SupplierOrderItem' => '\\SupplierOrderItem',
  'GetActiveStockForProducts' => '\\GetActiveStockForProducts',
  'RequestObjectOfListOfString' => '\\RequestObjectOfListOfString',
  'GetActiveStockForProductsResponse' => '\\GetActiveStockForProductsResponse',
  'GetWarehouseBaysForProduct' => '\\GetWarehouseBaysForProduct',
  'GetWarehouseBaysForProductResponse' => '\\GetWarehouseBaysForProductResponse',
  'AddStockToBay' => '\\AddStockToBay',
  'AddStockToBayResponse' => '\\AddStockToBayResponse',
  'MoveStockToBay' => '\\MoveStockToBay',
  'MoveStockToBayResponse' => '\\MoveStockToBayResponse',
  'RemoveStockFromBay' => '\\RemoveStockFromBay',
  'ResponseObjectOfBoolean' => '\\ResponseObjectOfBoolean',
  'RemoveStockFromBayResponse' => '\\RemoveStockFromBayResponse',
  'ReleaseMovementsForOrder' => '\\ReleaseMovementsForOrder',
  'ReleaseMovementsForOrderResponse' => '\\ReleaseMovementsForOrderResponse',
  'GetData' => '\\GetData',
  'GetDataResponse' => '\\GetDataResponse',
  'GetDataUsingDataContract' => '\\GetDataUsingDataContract',
  'GetDataUsingDataContractResponse' => '\\GetDataUsingDataContractResponse',
  'TestCredentials' => '\\TestCredentials',
  'TestCredentialsResponse' => '\\TestCredentialsResponse',
  'GetStockLevelsBySKUList' => '\\GetStockLevelsBySKUList',
  'ResponseObjectOfListOfAPIProductStockLevel' => '\\ResponseObjectOfListOfAPIProductStockLevel',
  'ArrayOfAPIProductStockLevel' => '\\ArrayOfAPIProductStockLevel',
  'APIProductStockLevel' => '\\APIProductStockLevel',
  'GetStockLevelsBySKUListResponse' => '\\GetStockLevelsBySKUListResponse',
  'AddProduct' => '\\AddProduct',
  'RequestObjectOfAPIProduct' => '\\RequestObjectOfAPIProduct',
  'ResponseObjectOfInt32' => '\\ResponseObjectOfInt32',
  'AddProductResponse' => '\\AddProductResponse',
  'AddMultiPack' => '\\AddMultiPack',
  'RequestObjectOfAPIAddMultiPackRequest' => '\\RequestObjectOfAPIAddMultiPackRequest',
  'APIAddMultiPackRequest' => '\\APIAddMultiPackRequest',
  'ArrayOfMultiPackItem' => '\\ArrayOfMultiPackItem',
  'MultiPackItem' => '\\MultiPackItem',
  'ResponseObjectOfAPIProduct' => '\\ResponseObjectOfAPIProduct',
  'AddMultiPackResponse' => '\\AddMultiPackResponse',
  'SetProductOptionValues' => '\\SetProductOptionValues',
  'SetProductOptionValuesResponse' => '\\SetProductOptionValuesResponse',
  'getProductByID' => '\\getProductByID',
  'getProductByIDResponse' => '\\getProductByIDResponse',
  'getProducts' => '\\getProducts',
  'RequestObjectOfAPIProductGetProductListRequest' => '\\RequestObjectOfAPIProductGetProductListRequest',
  'APIProductGetProductListRequest' => '\\APIProductGetProductListRequest',
  'ResponseObjectOfAPIProductList' => '\\ResponseObjectOfAPIProductList',
  'APIProductList' => '\\APIProductList',
  'ArrayOfAPIProduct' => '\\ArrayOfAPIProduct',
  'getProductsResponse' => '\\getProductsResponse',
  'getProductByExternalProductId' => '\\getProductByExternalProductId',
  'RequestObjectOfString' => '\\RequestObjectOfString',
  'getProductByExternalProductIdResponse' => '\\getProductByExternalProductIdResponse',
  'getProductByManufacturerSKU' => '\\getProductByManufacturerSKU',
  'getProductByManufacturerSKUResponse' => '\\getProductByManufacturerSKUResponse',
  'getProductByBarcode' => '\\getProductByBarcode',
  'getProductByBarcodeResponse' => '\\getProductByBarcodeResponse',
  'setName' => '\\setName',
  'setNameResponse' => '\\setNameResponse',
  'setDescription' => '\\setDescription',
  'setDescriptionResponse' => '\\setDescriptionResponse',
  'setManufacturerSKU' => '\\setManufacturerSKU',
  'setManufacturerSKUResponse' => '\\setManufacturerSKUResponse',
  'setVatRateID' => '\\setVatRateID',
  'setVatRateIDResponse' => '\\setVatRateIDResponse',
  'setPrice' => '\\setPrice',
  'setPriceResponse' => '\\setPriceResponse',
  'setBarCode' => '\\setBarCode',
  'setBarCodeResponse' => '\\setBarCodeResponse',
  'setAdditionalBarcodes' => '\\setAdditionalBarcodes',
  'setAdditionalBarcodesResponse' => '\\setAdditionalBarcodesResponse',
  'deleteAdditionalBarcode' => '\\deleteAdditionalBarcode',
  'RequestObjectOfAPIProductDeleteAdditionalBarcodeRequest' => '\\RequestObjectOfAPIProductDeleteAdditionalBarcodeRequest',
  'APIProductDeleteAdditionalBarcodeRequest' => '\\APIProductDeleteAdditionalBarcodeRequest',
  'deleteAdditionalBarcodeResponse' => '\\deleteAdditionalBarcodeResponse',
  'setProductRangeID' => '\\setProductRangeID',
  'setProductRangeIDResponse' => '\\setProductRangeIDResponse',
  'setPreOrder' => '\\setPreOrder',
  'setPreOrderResponse' => '\\setPreOrderResponse',
  'setEndOfLine' => '\\setEndOfLine',
  'setEndOfLineResponse' => '\\setEndOfLineResponse',
  'setLength' => '\\setLength',
  'setLengthResponse' => '\\setLengthResponse',
  'setWidth' => '\\setWidth',
  'setWidthResponse' => '\\setWidthResponse',
  'setHeight' => '\\setHeight',
  'setHeightResponse' => '\\setHeightResponse',
  'setExternalProductId' => '\\setExternalProductId',
  'setExternalProductIdResponse' => '\\setExternalProductIdResponse',
  'setStockLevel' => '\\setStockLevel',
  'RequestObjectOfAPIProductStockTransaction' => '\\RequestObjectOfAPIProductStockTransaction',
  'APIProductStockTransaction' => '\\APIProductStockTransaction',
  'setStockLevelResponse' => '\\setStockLevelResponse',
  'setStockLevelBySKU' => '\\setStockLevelBySKU',
  'setStockLevelBySKUResponse' => '\\setStockLevelBySKUResponse',
  'setStockLevelByProductCode' => '\\setStockLevelByProductCode',
  'setStockLevelByProductCodeResponse' => '\\setStockLevelByProductCodeResponse',
  'BatchStockUpdates' => '\\BatchStockUpdates',
  'RequestObjectOfAPIBulkUpdateStockRequest' => '\\RequestObjectOfAPIBulkUpdateStockRequest',
  'APIBulkUpdateStockRequest' => '\\APIBulkUpdateStockRequest',
  'ArrayOfAPIUpdateStockRequest' => '\\ArrayOfAPIUpdateStockRequest',
  'APIUpdateStockRequest' => '\\APIUpdateStockRequest',
  'BatchStockUpdatesResponse' => '\\BatchStockUpdatesResponse',
  'BatchSupplierPriceUpdates' => '\\BatchSupplierPriceUpdates',
  'RequestObjectOfAPIBulkSupplierPriceUpdateRequest' => '\\RequestObjectOfAPIBulkSupplierPriceUpdateRequest',
  'APIBulkSupplierPriceUpdateRequest' => '\\APIBulkSupplierPriceUpdateRequest',
  'ArrayOfAPISupplierPriceUpdateRequest' => '\\ArrayOfAPISupplierPriceUpdateRequest',
  'APISupplierPriceUpdateRequest' => '\\APISupplierPriceUpdateRequest',
  'BatchSupplierPriceUpdatesResponse' => '\\BatchSupplierPriceUpdatesResponse',
  'setStatusID' => '\\setStatusID',
  'setStatusIDResponse' => '\\setStatusIDResponse',
  'addStockTransaction' => '\\addStockTransaction',
  'addStockTransactionResponse' => '\\addStockTransactionResponse',
  'AddProductImage' => '\\AddProductImage',
  'RequestObjectOfAPIProductImage' => '\\RequestObjectOfAPIProductImage',
  'AddProductImageResponse' => '\\AddProductImageResponse',
  'AddProductImageByUrl' => '\\AddProductImageByUrl',
  'AddProductImageByUrlResponse' => '\\AddProductImageByUrlResponse',
  'getProductImages' => '\\getProductImages',
  'ResponseObjectOfListOfAPIProductImage' => '\\ResponseObjectOfListOfAPIProductImage',
  'getProductImagesResponse' => '\\getProductImagesResponse',
  'deleteProductImage' => '\\deleteProductImage',
  'deleteProductImageResponse' => '\\deleteProductImageResponse',
  'AddSalesChannelLink' => '\\AddSalesChannelLink',
  'RequestObjectOfAPIProductSalesChannelLink' => '\\RequestObjectOfAPIProductSalesChannelLink',
  'APIProductSalesChannelLink' => '\\APIProductSalesChannelLink',
  'AddSalesChannelLinkResponse' => '\\AddSalesChannelLinkResponse',
  'AddSalesChannelLinks' => '\\AddSalesChannelLinks',
  'RequestObjectOfListOfAPIProductSalesChannelLink' => '\\RequestObjectOfListOfAPIProductSalesChannelLink',
  'ArrayOfAPIProductSalesChannelLink' => '\\ArrayOfAPIProductSalesChannelLink',
  'ResponseObjectOfListOfAPIProduct' => '\\ResponseObjectOfListOfAPIProduct',
  'AddSalesChannelLinksResponse' => '\\AddSalesChannelLinksResponse',
  'getActiveSalesChannels' => '\\getActiveSalesChannels',
  'ResponseObjectOfListOfAPISalesChannel' => '\\ResponseObjectOfListOfAPISalesChannel',
  'ArrayOfAPISalesChannel' => '\\ArrayOfAPISalesChannel',
  'APISalesChannel' => '\\APISalesChannel',
  'getActiveSalesChannelsResponse' => '\\getActiveSalesChannelsResponse',
  'setSupplierCost' => '\\setSupplierCost',
  'RequestObjectOfAPIProductSupplierLink' => '\\RequestObjectOfAPIProductSupplierLink',
  'ResponseObjectOfDecimal' => '\\ResponseObjectOfDecimal',
  'setSupplierCostResponse' => '\\setSupplierCostResponse',
  'SetShopBarCode' => '\\SetShopBarCode',
  'RequestObjectOfAPISetShoBarCodeRequest' => '\\RequestObjectOfAPISetShoBarCodeRequest',
  'APISetShoBarCodeRequest' => '\\APISetShoBarCodeRequest',
  'SetShopBarCodeResponse' => '\\SetShopBarCodeResponse',
  'CompositeType' => '\\CompositeType',
  'RequestObjectOfstring' => '\\RequestObjectOfstring',
  'ResponseObjectOfboolean' => '\\ResponseObjectOfboolean',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://wcfccpservicesbase.cloudcommercepro.com/CCPApiProductsService.svc?singlewsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * <summary>
     *             Gets list of Warehouses
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param GetWarehouses $parameters
     * @return GetWarehousesResponse
     */
    public function GetWarehouses(GetWarehouses $parameters)
    {
      return $this->__soapCall('GetWarehouses', array($parameters));
    }

    /**
     * <summary>
     *             Gets list of Warehouses
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param GetWarehouseBays $parameters
     * @return GetWarehouseBaysResponse
     */
    public function GetWarehouseBays(GetWarehouseBays $parameters)
    {
      return $this->__soapCall('GetWarehouseBays', array($parameters));
    }

    /**
     * <summary>
     *             Gets active stock in a given warehouse bay
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param GetActiveStockFromBay $parameters
     * @return GetActiveStockFromBayResponse
     */
    public function GetActiveStockFromBay(GetActiveStockFromBay $parameters)
    {
      return $this->__soapCall('GetActiveStockFromBay', array($parameters));
    }

    /**
     * <summary>
     *             Gets active stock in a given warehouse bay
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param GetActiveStockForProducts $parameters
     * @return GetActiveStockForProductsResponse
     */
    public function GetActiveStockForProducts(GetActiveStockForProducts $parameters)
    {
      return $this->__soapCall('GetActiveStockForProducts', array($parameters));
    }

    /**
     * <summary>
     *             Gets Warehouse Bays for a Product
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param GetWarehouseBaysForProduct $parameters
     * @return GetWarehouseBaysForProductResponse
     */
    public function GetWarehouseBaysForProduct(GetWarehouseBaysForProduct $parameters)
    {
      return $this->__soapCall('GetWarehouseBaysForProduct', array($parameters));
    }

    /**
     * <summary>
     *             Adds stock to a warehouse bay
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param AddStockToBay $parameters
     * @return AddStockToBayResponse
     */
    public function AddStockToBay(AddStockToBay $parameters)
    {
      return $this->__soapCall('AddStockToBay', array($parameters));
    }

    /**
     * <summary>
     *             Moves stock from one  warehouse bay to another
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param MoveStockToBay $parameters
     * @return MoveStockToBayResponse
     */
    public function MoveStockToBay(MoveStockToBay $parameters)
    {
      return $this->__soapCall('MoveStockToBay', array($parameters));
    }

    /**
     * <summary>
     *             Removes stock from a warehouse bay
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param RemoveStockFromBay $parameters
     * @return RemoveStockFromBayResponse
     */
    public function RemoveStockFromBay(RemoveStockFromBay $parameters)
    {
      return $this->__soapCall('RemoveStockFromBay', array($parameters));
    }

    /**
     * <summary>
     *             Releases all stock movements for an order, only to be used if a pick is cancelled
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param ReleaseMovementsForOrder $parameters
     * @return ReleaseMovementsForOrderResponse
     */
    public function ReleaseMovementsForOrder(ReleaseMovementsForOrder $parameters)
    {
      return $this->__soapCall('ReleaseMovementsForOrder', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="value"></param>
     *             <returns></returns>
     *
     * @param GetData $parameters
     * @return GetDataResponse
     */
    public function GetData(GetData $parameters)
    {
      return $this->__soapCall('GetData', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="composite"></param>
     *             <returns></returns>
     *
     * @param GetDataUsingDataContract $parameters
     * @return GetDataUsingDataContractResponse
     */
    public function GetDataUsingDataContract(GetDataUsingDataContract $parameters)
    {
      return $this->__soapCall('GetDataUsingDataContract', array($parameters));
    }

    /**
     * <summary>
     *             Basic Authentication Detais Test
     *             </summary>
     *             <param name="request"><![CDATA[(RequestObject<string>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param TestCredentials $parameters
     * @return TestCredentialsResponse
     */
    public function TestCredentials(TestCredentials $parameters)
    {
      return $this->__soapCall('TestCredentials', array($parameters));
    }

    /**
     * <summary>
     *             Gets Stock Level Summary for List of Products based on SKU
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param GetStockLevelsBySKUList $parameters
     * @return GetStockLevelsBySKUListResponse
     */
    public function GetStockLevelsBySKUList(GetStockLevelsBySKUList $parameters)
    {
      return $this->__soapCall('GetStockLevelsBySKUList', array($parameters));
    }

    /**
     * <summary>
     *             Adds a Product to Cloud Commerce Pro
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<int>]]></returns>
     *
     * @param AddProduct $parameters
     * @return AddProductResponse
     */
    public function AddProduct(AddProduct $parameters)
    {
      return $this->__soapCall('AddProduct', array($parameters));
    }

    /**
     * <summary>
     *             Adds a Multipack Product to Cloud Commerce Pro
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIAddMultiPackRequest>]]></param>
     *             <returns><![CDATA[ResponseObject<APIProduct>]]></returns>
     *
     * @param AddMultiPack $parameters
     * @return AddMultiPackResponse
     */
    public function AddMultiPack(AddMultiPack $parameters)
    {
      return $this->__soapCall('AddMultiPack', array($parameters));
    }

    /**
     * <summary>
     *             Updates selected Option Values for a given Product e.g. change Colour from White to Black
     *             </summary>
     *             <param name="request"><![CDATA[(RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<APIProduct>]]></returns>
     *
     * @param SetProductOptionValues $parameters
     * @return SetProductOptionValuesResponse
     */
    public function SetProductOptionValues(SetProductOptionValues $parameters)
    {
      return $this->__soapCall('SetProductOptionValues', array($parameters));
    }

    /**
     * <summary>
     *              Gets a Product by ID
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<int>]]></param>
     *             <returns><![CDATA[ResponseObject<APIProduct>]]></returns>
     *
     * @param getProductByID $parameters
     * @return getProductByIDResponse
     */
    public function getProductByID(getProductByID $parameters)
    {
      return $this->__soapCall('getProductByID', array($parameters));
    }

    /**
     * <summary>
     *             Gets a List of Products
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProductGetProductListRequest>]]></param>
     *             <returns><![CDATA[ ResponseObject<APIProductList> ]]></returns>
     *
     * @param getProducts $parameters
     * @return getProductsResponse
     */
    public function getProducts(getProducts $parameters)
    {
      return $this->__soapCall('getProducts', array($parameters));
    }

    /**
     * <summary>
     *             Gets a Product by External Product ID (external system reference)
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<string>]]></param>
     *             <returns><![CDATA[ResponseObject<APIProduct>]]></returns>
     *
     * @param getProductByExternalProductId $parameters
     * @return getProductByExternalProductIdResponse
     */
    public function getProductByExternalProductId(getProductByExternalProductId $parameters)
    {
      return $this->__soapCall('getProductByExternalProductId', array($parameters));
    }

    /**
     * <summary>
     *             Gets a Product by ManufacturerSKU (SKU)
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<string>]]></param>
     *             <returns><![CDATA[ResponseObject<APIProduct>]]></returns>
     *
     * @param getProductByManufacturerSKU $parameters
     * @return getProductByManufacturerSKUResponse
     */
    public function getProductByManufacturerSKU(getProductByManufacturerSKU $parameters)
    {
      return $this->__soapCall('getProductByManufacturerSKU', array($parameters));
    }

    /**
     * <summary>
     *             Gets a Product by Barcode
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<string>]]></param>
     *             <returns><![CDATA[ResponseObject<APIProduct>]]></returns>
     *
     * @param getProductByBarcode $parameters
     * @return getProductByBarcodeResponse
     */
    public function getProductByBarcode(getProductByBarcode $parameters)
    {
      return $this->__soapCall('getProductByBarcode', array($parameters));
    }

    /**
     * <summary>
     *             Sets Name of a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setName $parameters
     * @return setNameResponse
     */
    public function setName(setName $parameters)
    {
      return $this->__soapCall('setName', array($parameters));
    }

    /**
     * <summary>
     *             Sets Product Description
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setDescription $parameters
     * @return setDescriptionResponse
     */
    public function setDescription(setDescription $parameters)
    {
      return $this->__soapCall('setDescription', array($parameters));
    }

    /**
     * <summary>
     *             Sets (SKU) ManufacturerSKU on a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setManufacturerSKU $parameters
     * @return setManufacturerSKUResponse
     */
    public function setManufacturerSKU(setManufacturerSKU $parameters)
    {
      return $this->__soapCall('setManufacturerSKU', array($parameters));
    }

    /**
     * <summary>
     *             Sets VAT RateID for a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ ResponseObject<bool> ]]></returns>
     *
     * @param setVatRateID $parameters
     * @return setVatRateIDResponse
     */
    public function setVatRateID(setVatRateID $parameters)
    {
      return $this->__soapCall('setVatRateID', array($parameters));
    }

    /**
     * <summary>
     *             Sets Base Price for a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setPrice $parameters
     * @return setPriceResponse
     */
    public function setPrice(setPrice $parameters)
    {
      return $this->__soapCall('setPrice', array($parameters));
    }

    /**
     * <summary>
     *             Sets a Product Barcode
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setBarCode $parameters
     * @return setBarCodeResponse
     */
    public function setBarCode(setBarCode $parameters)
    {
      return $this->__soapCall('setBarCode', array($parameters));
    }

    /**
     * <summary>
     *             Sets Additional Barcodes for a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<APIProduct>]]></returns>
     *
     * @param setAdditionalBarcodes $parameters
     * @return setAdditionalBarcodesResponse
     */
    public function setAdditionalBarcodes(setAdditionalBarcodes $parameters)
    {
      return $this->__soapCall('setAdditionalBarcodes', array($parameters));
    }

    /**
     * <summary>
     *             Deletes Additional Barcodes for a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProductDeleteAdditionalBarcodeRequest>]]></param>
     *             <returns><![CDATA[ResponseObject<APIProduct>]]></returns>
     *
     * @param deleteAdditionalBarcode $parameters
     * @return deleteAdditionalBarcodeResponse
     */
    public function deleteAdditionalBarcode(deleteAdditionalBarcode $parameters)
    {
      return $this->__soapCall('deleteAdditionalBarcode', array($parameters));
    }

    /**
     * <summary>
     *             Sets ProductRangeID on a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setProductRangeID $parameters
     * @return setProductRangeIDResponse
     */
    public function setProductRangeID(setProductRangeID $parameters)
    {
      return $this->__soapCall('setProductRangeID', array($parameters));
    }

    /**
     * <summary>
     *             Sets Pre Order Flag on a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setPreOrder $parameters
     * @return setPreOrderResponse
     */
    public function setPreOrder(setPreOrder $parameters)
    {
      return $this->__soapCall('setPreOrder', array($parameters));
    }

    /**
     * <summary>
     *             Sets End Of Line flag on a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setEndOfLine $parameters
     * @return setEndOfLineResponse
     */
    public function setEndOfLine(setEndOfLine $parameters)
    {
      return $this->__soapCall('setEndOfLine', array($parameters));
    }

    /**
     * <summary>
     *             Sets Length for a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setLength $parameters
     * @return setLengthResponse
     */
    public function setLength(setLength $parameters)
    {
      return $this->__soapCall('setLength', array($parameters));
    }

    /**
     * <summary>
     *             Sets Width for a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setWidth $parameters
     * @return setWidthResponse
     */
    public function setWidth(setWidth $parameters)
    {
      return $this->__soapCall('setWidth', array($parameters));
    }

    /**
     * <summary>
     *             Sets Height for a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setHeight $parameters
     * @return setHeightResponse
     */
    public function setHeight(setHeight $parameters)
    {
      return $this->__soapCall('setHeight', array($parameters));
    }

    /**
     * <summary>
     *             Sets External Product Reference
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setExternalProductId $parameters
     * @return setExternalProductIdResponse
     */
    public function setExternalProductId(setExternalProductId $parameters)
    {
      return $this->__soapCall('setExternalProductId', array($parameters));
    }

    /**
     * <summary>
     *              Sets Product Stock Level
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProductStockTransaction>]]></param>
     *             <returns><![CDATA[ResponseObject<int>]]></returns>
     *
     * @param setStockLevel $parameters
     * @return setStockLevelResponse
     */
    public function setStockLevel(setStockLevel $parameters)
    {
      return $this->__soapCall('setStockLevel', array($parameters));
    }

    /**
     * <summary>
     *              Sets Product Stock Level
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProductStockTransaction>]]></param>
     *             <returns><![CDATA[ ResponseObject<int>]]></returns>
     *
     * @param setStockLevelBySKU $parameters
     * @return setStockLevelBySKUResponse
     */
    public function setStockLevelBySKU(setStockLevelBySKU $parameters)
    {
      return $this->__soapCall('setStockLevelBySKU', array($parameters));
    }

    /**
     * <summary>
     *             Sets Product Stock Level
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProductStockTransaction>]]></param>
     *             <returns><![CDATA[ ResponseObject<int>]]></returns>
     *
     * @param setStockLevelByProductCode $parameters
     * @return setStockLevelByProductCodeResponse
     */
    public function setStockLevelByProductCode(setStockLevelByProductCode $parameters)
    {
      return $this->__soapCall('setStockLevelByProductCode', array($parameters));
    }

    /**
     * <summary>
     *             Adds multiple Product Stock Updates to be processed
     *             </summary>
     *             <param name="request"><![CDATA[(RequestObject<APIBulkUpdateStockRequest>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param BatchStockUpdates $parameters
     * @return BatchStockUpdatesResponse
     */
    public function BatchStockUpdates(BatchStockUpdates $parameters)
    {
      return $this->__soapCall('BatchStockUpdates', array($parameters));
    }

    /**
     * <summary>
     *             Adds multiple Supplier Price Updates to be processed
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIBulkSupplierPriceUpdateRequest>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param BatchSupplierPriceUpdates $parameters
     * @return BatchSupplierPriceUpdatesResponse
     */
    public function BatchSupplierPriceUpdates(BatchSupplierPriceUpdates $parameters)
    {
      return $this->__soapCall('BatchSupplierPriceUpdates', array($parameters));
    }

    /**
     * <summary>
     *             Updates StatusID for a Product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProduct>]]></param>
     *             <returns><![CDATA[ResponseObject<bool>]]></returns>
     *
     * @param setStatusID $parameters
     * @return setStatusIDResponse
     */
    public function setStatusID(setStatusID $parameters)
    {
      return $this->__soapCall('setStatusID', array($parameters));
    }

    /**
     * <summary>
     *
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProductStockTransaction>]]></param>
     *             <returns><![CDATA[ResponseObject<int>]]></returns>
     *
     * @param addStockTransaction $parameters
     * @return addStockTransactionResponse
     */
    public function addStockTransaction(addStockTransaction $parameters)
    {
      return $this->__soapCall('addStockTransaction', array($parameters));
    }

    /**
     * <summary>
     *             Adds an Image to a Product with image data stored as Base64 encoded string
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProductImage>]]></param>
     *             <returns><![CDATA[ResponseObject<int> ]]></returns>
     *
     * @param AddProductImage $parameters
     * @return AddProductImageResponse
     */
    public function AddProductImage(AddProductImage $parameters)
    {
      return $this->__soapCall('AddProductImage', array($parameters));
    }

    /**
     * <summary>
     *             Adds an Image to a Product by passing url of image
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProductImage>]]></param>
     *             <returns><![CDATA[ResponseObject<int> ]]></returns>
     *
     * @param AddProductImageByUrl $parameters
     * @return AddProductImageByUrlResponse
     */
    public function AddProductImageByUrl(AddProductImageByUrl $parameters)
    {
      return $this->__soapCall('AddProductImageByUrl', array($parameters));
    }

    /**
     * <summary>
     *             Gets List of Product Images
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<int>]]></param>
     *             <returns><![CDATA[ResponseObject<List<APIProductImage>>]]></returns>
     *
     * @param getProductImages $parameters
     * @return getProductImagesResponse
     */
    public function getProductImages(getProductImages $parameters)
    {
      return $this->__soapCall('getProductImages', array($parameters));
    }

    /**
     * <summary>
     *             Deletes a Product Image
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<int>]]></param>
     *             <returns><![CDATA[ResponseObject<APIProduct>]]></returns>
     *
     * @param deleteProductImage $parameters
     * @return deleteProductImageResponse
     */
    public function deleteProductImage(deleteProductImage $parameters)
    {
      return $this->__soapCall('deleteProductImage', array($parameters));
    }

    /**
     * <summary>
     *             Links a Product to a Sales Channel e.g. List this Product on my UK Amazon Channel
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProductSalesChannelLink>]]></param>
     *             <remarks>If passing with SKU then set ProductID to 0</remarks>
     *             <returns><![CDATA[ResponseObject<APIProduct>]]></returns>
     *
     * @param AddSalesChannelLink $parameters
     * @return AddSalesChannelLinkResponse
     */
    public function AddSalesChannelLink(AddSalesChannelLink $parameters)
    {
      return $this->__soapCall('AddSalesChannelLink', array($parameters));
    }

    /**
     * <summary>
     *             Unavailable
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param AddSalesChannelLinks $parameters
     * @return AddSalesChannelLinksResponse
     */
    public function AddSalesChannelLinks(AddSalesChannelLinks $parameters)
    {
      return $this->__soapCall('AddSalesChannelLinks', array($parameters));
    }

    /**
     * <summary>
     *             Returns a list of Active Sales Channels
     *             </summary>
     *             <param name="request"><![CDATA[(RequestObject<string>]]></param>
     *             <returns><![CDATA[ResponseObject<List<APISalesChannel>>]]></returns>
     *
     * @param getActiveSalesChannels $parameters
     * @return getActiveSalesChannelsResponse
     */
    public function getActiveSalesChannels(getActiveSalesChannels $parameters)
    {
      return $this->__soapCall('getActiveSalesChannels', array($parameters));
    }

    /**
     * <summary>
     *             Updates the supplier cost for a product
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APIProductSupplierLink>]]></param>
     *             <returns><![CDATA[ResponseObject<decimal>]]></returns>
     *
     * @param setSupplierCost $parameters
     * @return setSupplierCostResponse
     */
    public function setSupplierCost(setSupplierCost $parameters)
    {
      return $this->__soapCall('setSupplierCost', array($parameters));
    }

    /**
     * <summary>
     *             updates a barcode on a shop variation
     *             </summary>
     *             <param name="request"><![CDATA[RequestObject<APISetShoBarCodeRequest>]]></param>
     *             <returns><![CDATA[ResponseObject<APIProduct>]]></returns>
     *
     * @param SetShopBarCode $parameters
     * @return SetShopBarCodeResponse
     */
    public function SetShopBarCode(SetShopBarCode $parameters)
    {
      return $this->__soapCall('SetShopBarCode', array($parameters));
    }

}
