<?php
/**
 * Created by PhpStorm.
 * User: MagNum
 * Date: 24.11.2016
 * Time: 12:20
 */

$prices = ['55.10', '55.01', '50.01', '55.00', '50.00'];
$short_prices =[];
foreach ($prices as $price){

    $short_price = preg_replace('/(\.0*)$|0*$/','', $price);
    $short_prices[$price] = $short_price;
}
print_r($short_prices);




//phpinfo();
