<?php

namespace CloudWrapperPhp;
require __DIR__ . '\output\autoload.php';

class CloudWrapper{

  var $hash;
  var $brand;
  var $namespace;

  public function __construct(){

    /*
    $generator = new \Wsdl2PhpGenerator\Generator();
    $generator->generate(
    	new \Wsdl2PhpGenerator\Config(array(
            'inputFile' => 'http://wcfccpservicesbase.cloudcommercepro.com/CCPApiProductsService.svc?singlewsdl',
            'outputDir' =>  __DIR__ . '/output'
        ))
    );
    */
  }

  private function externalCall($service, $func, $args){

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

    if($product->getContent()->getID() === 0){
      return "Error: Sku not found.";
    }

    return array(
      "ccp_id" => $product->getContent()->getID(),
      "name" => $product->getcontent()->getName(),
      "stockLocations" => $product->getcontent()->getStockLocations(),
      "sku" => $product->getContent()->getManufacturerSKU(),
      "barcode" => $product->getContent()->getBarCodeNumber(),
      "additionalBarcode" => $product->getContent()->getAdditionalBarCodes(),
      "stock" => $product->getContent()->getStockLevel()
    );

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
}
