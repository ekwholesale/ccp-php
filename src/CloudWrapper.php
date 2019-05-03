<?php

namespace CloudWrapperPhp;
require 'output/productService/autoload.php';
require 'output/orderService/autoload.php';

class CloudWrapper{

  var $hash;
  var $brand;
  var $namespace;

  public function __construct(){

/*
    $generator = new \Wsdl2PhpGenerator\Generator();
    $generator->generate(
    	new \Wsdl2PhpGenerator\Config(array(
            'inputFile' => 'http://wcfccpservicesbase.cloudcommercepro.com/CCPApiOrderService.svc?singlewsdl',
            'outputDir' =>  __DIR__ . '/output'
        ))
    );
*/
  }

  private function externalCall($service, $func, $args){
    if($service === "CCPApiOrderService"){
      $loc = "";
      //set up function choice
      $serviceChoice = "\\" . $service;

      $serviceConnect = new $serviceChoice;
      //$service = new \CCPAPIProductsService();
      if($func === "getOrderDetailsByReference"){
      $requestItems = array(
        "BrandID" => $this->brand,
        "SecurityHash" => $this->hash,
        "Content" => array("ExternalOrderRef", $args)
      );
    }else{
      $requestItems = array(
        "BrandID" => $this->brand,
        "SecurityHash" => $this->hash,
        "Content" => $args
      );
    }

      //set get request
      $requestChoice = "\\" . $func;

      $getRequest = new $requestChoice($requestItems);
      //$getRequest = new \getProductByManufacturerSKU($requestItems);

      $response = $serviceConnect->$func($getRequest);
      //$response = $service->getProductByManufacturerSKU($getRequest);
      //print_r($response);
      //set result string
      $resultString = $func . "Result";
      //echo "getProductByManufacturerSKUResult()" . PHP_EOL;
      //echo $resultString . "()" . PHP_EOL;
      $order = $response->$resultString();
      //$product = $response->getProductByManufacturerSKUResult();


      /*
      if($order->getContent()->getID() == 0){
        return "Error: Order " . $args . " not found" . PHP_EOL;
        //print_r($product->getContent()->getStockLocations()->getItemBayStockLevel());
      }
      */

      return array(
        "ccp_id" => $order->getContent()->getOrder()->getID(),
      );
    }


    if($service === "CCPAPIProductsService"){
      $loc = "";
      //set up function choice
      $serviceChoice = "\\" . $service;

      $serviceConnect = new $serviceChoice;
      //$service = new \CCPAPIProductsService();
      $requestItems = array(
        "BrandID" => $this->brand,
        "SecurityHash" => $this->hash,
        "Content" => $args
      );

      //set get request
      $requestChoice = "\\" . $func;

      $getRequest = new $requestChoice($requestItems);
      //$getRequest = new \getProductByManufacturerSKU($requestItems);

      $response = $serviceConnect->$func($getRequest);
      //$response = $service->getProductByManufacturerSKU($getRequest);
      //print_r($response);
      //set result string
      $resultString = $func . "Result";
      //echo "getProductByManufacturerSKUResult()" . PHP_EOL;
      //echo $resultString . "()" . PHP_EOL;
      $product = $response->$resultString();
      //$product = $response->getProductByManufacturerSKUResult();

      if($product->getContent()->getID() == 0){
        return "Error: " . $args . " not found" . PHP_EOL;
        //print_r($product->getContent()->getStockLocations()->getItemBayStockLevel());
      }

      if($product->getContent()->getStockLocations()->getItemBayStockLevel() >= 1){
          foreach($product->getContent()->getStockLocations() as $bay){
            $loc .= $bay->getWarehouseBayName();
            $lock .= " ";
          }
      }

      return array(
        "ccp_id" => $product->getContent()->getID(),
        "name" => $product->getContent()->getName(),
        "stockLocations" => $loc,
        "sku" => $product->getContent()->getManufacturerSKU(),
        "barcode" => $product->getContent()->getBarCodeNumber(),
        "additionalBarcode" => $product->getContent()->getAdditionalBarCodes(),
        "stock" => $product->getContent()->getStockLevel()
      );
    }
  }

  public function config($hashKey = "No security hash.", $brandKey = "No brand number", $staging=true){
    $this->hash = $hashKey;
    $this->brand = $brandKey;
    $this->namespace = "http://devwcfccpservicesbase.cloudcommercepro.com/";
    if($staging === false){
      $this->$namespace = "https://wcfccpservicesbase.cloudcommercepro.com/";
    }
    return true;
  }

  public function getProductByManufacturerSKU($sku){
    $productCallUrl = "CCPAPIProductsService";
    $productFunction = "getProductByManufacturerSKU";
    return $this->externalCall($productCallUrl, $productFunction, $sku);
  }

  public function getProductByID($productID){
    $productCallUrl = "CCPAPIProductsService";
    $productFunction = "getProductByID";
    return $this->externalCall($productCallUrl, $productFunction, $productID);
  }

  public function getProductByBarcode($productBarcode){
    $productCallUrl = "CCPAPIProductsService";
    $productFunction = "getProductByBarcode";
    return $this->externalCall($productCallUrl, $productFunction, $productBarcode);
  }
/* External Product ID not working at this time
  public function getProductByExternalProductID($externalID){
    $productCallUrl = "CCPAPIProductsService";
    $productFunction = "getProductByExternalProductId";
    return $this->externalCall($productCallUrl, $productFunction, $externalID);
  }
*/
public function getOrderDetailsByReference($orderDetails){
  $productCallUrl = "CCPApiOrderService";
  $productFunction = "getOrderDetailsByReference";
  return $this->externalCall($productCallUrl, $productFunction, $orderDetails);
}

}
