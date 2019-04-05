<?php
require_once __DIR__ . "/../vendor/autoload.php";

use CloudWrapperPhp\CloudConfig;

$test = new CloudConfig;
$test->setDetails(123123123, 456456456);

print_r($test);
