<?php

namespace CloudWrapperPhp;

class CloudWrapper{

  var $hash;
  var $brand;
  var $namespace;

  private function externalCall($service, $func, $args){

    print_r("TEST");

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
  public function getProductBySku($sku){
    $productCallUrl = "CCPApiProductsService";
    $productFunction = "getProductByManufacturerSKU";
    return $this->externalCall($productCallUrl, $productFunction, $sku);
  }
}
