<?php

namespace CloudWrapperPhp;

class CloudWrapper{

  var $hash;
  var $brand;
  var $namespace;

  private function externalCall($ApiURL, $fnc, $args){

/*
    $curlPost = "<soapenv:Envelope xmlns:soapenv='http://schemas.xmlsoap.org/soap/envelope/' xmlns:tem='http://tempuri.org/'><soapenv:Header/><soapenv:Body>";
    $curlPost .= "<tem:" . $fnc ."><tem:request><tem:BrandID>" . $this->brand . "</tem:BrandID>";
    $curlPost .= "<tem:SecurityHash>" . $this->hash ."</tem:SecurityHash>";
    $curlPost .= "<tem:Content>" . $args . "</tem:Content></tem:request></tem:" . $fnc . ">";
    $curlPost .= "</soapenv:Body></soapenv:Envelope>";

    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $this->namespace . $ApiURL . ".svc?wsdl=",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $curlPost,
      CURLOPT_HTTPHEADER => array(
        "Content-Type: text/xml",
        "SOAPAction: http://tempuri.org/I" . $ApiURL . "/" . $fnc
      ),
    ));
    //return $curlPost;
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      return "cURL Error #:" . $err;
    } else {
      return $response;
    }
*/
    $soapAction = "http://tempuri.org/I" . $ApiURL . "/" . $fnc;
    $soapAction = (string) $soapAction;
    $headerTest = array();
    $headerTest[] = "Content-Type: text/xml";
    $headerTest[] = "SOAPAction: $soapAction";

    //print_r($headerTest);

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://wcfccpservicesbase.cloudcommercepro.com/" . $ApiURL .".svc?wsdl=",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "<soapenv:Envelope xmlns:soapenv='http://schemas.xmlsoap.org/soap/envelope/' xmlns:tem='http://tempuri.org/'><soapenv:Header/><soapenv:Body><tem:" . $fnc . "><tem:request><tem:BrandID>". $this->brand ."</tem:BrandID><tem:SecurityHash>" . $this->hash . "</tem:SecurityHash><tem:Content>". $args ."</tem:Content></tem:request></tem:" . $fnc . "></soapenv:Body></soapenv:Envelope>",
    CURLOPT_HTTPHEADER => $headerTest,
  ));
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    return $response;
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
  public function getProductBySku($sku){
    $productCallUrl = "CCPApiProductsService";
    $productFunction = "getProductByManufacturerSKU";
    return $this->externalCall($productCallUrl, $productFunction, $sku);
  }
}
