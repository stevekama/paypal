<?php 
require 'vendor/autoload.php';

define('SITE_URL', 'http://localhost/paypal/');

$paypal = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AWbhh61i0Ktj2wBooKzdbIDo6iN4nkAhLXdvQOOQ0QpeyRL18I7ejEkVxMFhLJH8t5iTYqrW05rMZ_ct',
        'EPXuACpbNA3LrptPYnRafoJmLutjZmvXuuyXKOxPyV7K97oKxNb3vx7CBqrxTRMONjMs1R5k01ASDdUL'
    )
);

?>