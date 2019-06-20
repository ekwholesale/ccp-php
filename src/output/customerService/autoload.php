<?php


 function autoload_9c6a0395a59d54a9757887b43bde1703($class)
{
    $classes = array(
        'CCPApiCustomerService' => __DIR__ .'/CCPApiCustomerService.php',
        'AddCustomer' => __DIR__ .'/AddCustomer.php',
        'RequestObjectOfAPICustomerAddCustomerRequest' => __DIR__ .'/RequestObjectOfAPICustomerAddCustomerRequest.php',
        'APICustomerAddCustomerRequest' => __DIR__ .'/APICustomerAddCustomerRequest.php',
        'AddCustomerResponse' => __DIR__ .'/AddCustomerResponse.php',
        'ResponseObjectOfAPICustomer' => __DIR__ .'/ResponseObjectOfAPICustomer.php',
        'APICustomer' => __DIR__ .'/APICustomer.php',
        'APICustomerType' => __DIR__ .'/APICustomerType.php',
        'APICustomerPaymentTerms' => __DIR__ .'/APICustomerPaymentTerms.php',
        'ArrayOfApiFaultCustom2' => __DIR__ .'/ArrayOfApiFaultCustom2.php',
        'ApiFaultCustom2' => __DIR__ .'/ApiFaultCustom2.php',
        'ErrorCodeTypeCustom2' => __DIR__ .'/ErrorCodeTypeCustom2.php',
        'CCPApiFaultTypeCustom2' => __DIR__ .'/CCPApiFaultTypeCustom2.php',
        'GetCustomerById' => __DIR__ .'/GetCustomerById.php',
        'RequestObjectOfInt32Custom2' => __DIR__ .'/RequestObjectOfInt32Custom2.php',
        'GetCustomerByIdResponse' => __DIR__ .'/GetCustomerByIdResponse.php',
        'SearchCustom' => __DIR__ .'/SearchCustom.php',
        'RequestObjectOfStringCustom2' => __DIR__ .'/RequestObjectOfStringCustom2.php',
        'SearchResponseCustom' => __DIR__ .'/SearchResponseCustom.php',
        'ResponseObjectOfAPICustomerList' => __DIR__ .'/ResponseObjectOfAPICustomerList.php',
        'APICustomerList' => __DIR__ .'/APICustomerList.php',
        'ArrayOfAPICustomer' => __DIR__ .'/ArrayOfAPICustomer.php',
        'UpdateCustomer' => __DIR__ .'/UpdateCustomer.php',
        'UpdateCustomerResponse' => __DIR__ .'/UpdateCustomerResponse.php',
        'SetSageAccountID' => __DIR__ .'/SetSageAccountID.php',
        'RequestObjectOfSetSageAccountIDRequest' => __DIR__ .'/RequestObjectOfSetSageAccountIDRequest.php',
        'SetSageAccountIDRequest' => __DIR__ .'/SetSageAccountIDRequest.php',
        'SetSageAccountIDResponse' => __DIR__ .'/SetSageAccountIDResponse.php',
        'TestCredentialsCustom2' => __DIR__ .'/TestCredentialsCustom2.php',
        'TestCredentialsResponseCustom2' => __DIR__ .'/TestCredentialsResponseCustom2.php',
        'ResponseObjectOfBooleanCustom2' => __DIR__ .'/ResponseObjectOfBooleanCustom2.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_9c6a0395a59d54a9757887b43bde1703');

// Do nothing. The rest is just leftovers from the code generation.
{
}
