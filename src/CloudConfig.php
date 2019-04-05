<?php

namespace CloudWrapperPhp;

class CloudConfig{

  var $hash;
  var $brand;
  var $namespace;

  public function setDetails($hashKey = "No security hash.", $brandKey = "No brand number", $staging=true){
    $this->hash = $hashKey;
    $this->brand = $brandKey;
    $this->namespace = "https://devwcfccpservicesbase.cloudcommercepro.com/";
    if($staging === false){
      $this->$namespace = "https://wcfccpservicesbase.cloudcommercepro.com/";
    }
    return true;
  }
}
