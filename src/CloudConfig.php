<?php

namespace Cloud;

var $hash;
var $brand;
var $namespace;


class CloudConfig{
  public function setDetails($hashKey, $brandKey, $staging=true){
    $this->hash = $hashKey;
    $this->brand = $brandKey;
    $this->namespace = "https://devwcfccpservicesbase.cloudcommercepro.com/"
    if($staging === false){
      $this->$namespace = "https://wcfccpservicesbase.cloudcommercepro.com/"
    }
    return true;
  }
}
