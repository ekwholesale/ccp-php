<?php

class CCPApiCustomerService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'AddCustomer' => '\\AddCustomer',
  'RequestObjectOfAPICustomerAddCustomerRequest' => '\\RequestObjectOfAPICustomerAddCustomerRequest',
  'APICustomerAddCustomerRequest' => '\\APICustomerAddCustomerRequest',
  'AddCustomerResponse' => '\\AddCustomerResponse',
  'ResponseObjectOfAPICustomer' => '\\ResponseObjectOfAPICustomer',
  'APICustomer' => '\\APICustomer',
  'ArrayOfApiFault' => '\\ArrayOfApiFaultCustom2',
  'ApiFault' => '\\ApiFaultCustom2',
  'GetCustomerById' => '\\GetCustomerById',
  'RequestObjectOfInt32' => '\\RequestObjectOfInt32Custom2',
  'GetCustomerByIdResponse' => '\\GetCustomerByIdResponse',
  'Search' => '\\SearchCustom',
  'RequestObjectOfString' => '\\RequestObjectOfStringCustom2',
  'SearchResponse' => '\\SearchResponseCustom',
  'ResponseObjectOfAPICustomerList' => '\\ResponseObjectOfAPICustomerList',
  'APICustomerList' => '\\APICustomerList',
  'ArrayOfAPICustomer' => '\\ArrayOfAPICustomer',
  'UpdateCustomer' => '\\UpdateCustomer',
  'UpdateCustomerResponse' => '\\UpdateCustomerResponse',
  'SetSageAccountID' => '\\SetSageAccountID',
  'RequestObjectOfSetSageAccountIDRequest' => '\\RequestObjectOfSetSageAccountIDRequest',
  'SetSageAccountIDRequest' => '\\SetSageAccountIDRequest',
  'SetSageAccountIDResponse' => '\\SetSageAccountIDResponse',
  'TestCredentials' => '\\TestCredentialsCustom2',
  'TestCredentialsResponse' => '\\TestCredentialsResponseCustom2',
  'ResponseObjectOfBoolean' => '\\ResponseObjectOfBooleanCustom2',
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
        $wsdl = 'http://wcfccpservicesbase.cloudcommercepro.com/CCPApiCustomerService.svc?singlewsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * <summary>
     *             creates new backend customer
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param AddCustomer $parameters
     * @return AddCustomerResponse
     */
    public function AddCustomer(AddCustomer $parameters)
    {
      return $this->__soapCall('AddCustomer', array($parameters));
    }

    /**
     * <summary>
     *             get customer by id
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param GetCustomerById $parameters
     * @return GetCustomerByIdResponse
     */
    public function GetCustomerById(GetCustomerById $parameters)
    {
      return $this->__soapCall('GetCustomerById', array($parameters));
    }

    /**
     * <summary>
     *             get customer by id
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param SearchCustom $parameters
     * @return SearchResponse
     */
    public function Search($parameters)
    {
      return $this->__soapCall('Search', array($parameters));
    }

    /**
     * <summary>
     *             Update Customer Details
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param UpdateCustomer $parameters
     * @return UpdateCustomerResponse
     */
    public function UpdateCustomer(UpdateCustomer $parameters)
    {
      return $this->__soapCall('UpdateCustomer', array($parameters));
    }

    /**
     * <summary>
     *             sets sage account id for customer
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param SetSageAccountID $parameters
     * @return SetSageAccountIDResponse
     */
    public function SetSageAccountID(SetSageAccountID $parameters)
    {
      return $this->__soapCall('SetSageAccountID', array($parameters));
    }

    /**
     * <summary>
     *             tests authentication
     *             </summary>
     *             <param name="request"></param>
     *             <returns></returns>
     *
     * @param TestCredentialsCustom2 $parameters
     * @return TestCredentialsResponse
     */
    public function TestCredentials($parameters)
    {
      return $this->__soapCall('TestCredentials', array($parameters));
    }

}
