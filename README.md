# Cloud Commerce Pro PHP Wrapper - WIP

Using a generator, this has broken down the cloud commerce pro wsdl into usable classes in php. While this is primarily to save myself some time, it's also open for anyone else who wants to pitch in. I am slowly working my way 
through the important calls in order to keep this as simple as possible. 

It's also available through composer, and usable in projects. I don't recommend using this in any production environment as this is still heavilly WIP. 

`composer install riezahughes/ccp-php`

Current functions that work: 

PRODUCT WSDL - 

- getProductByManufacturerSKU

- getProductByID

- getProductByBarcode

- ~~getProductByExternalProductID~~ currently not working. 

ORDER WSDL - 

- getOrderDetailsByReference

I will work through the rest when i have time.
