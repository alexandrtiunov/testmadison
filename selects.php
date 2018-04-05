<?php

require_once('dbConnect.php');
require_once('DateTime.php');

/**
 * Connect to data base and select collection of products
 * @return array
 */
$select = $connect->query("SELECT * FROM `products`");
$products = mysqli_fetch_all($select, MYSQLI_ASSOC);

/**
 * Connect to data base and select collection of discount
 * @return array
 */
$select = $connect->query("SELECT * FROM `discount` ORDER BY `discount`.`start_period` ASC ");
$discount = mysqli_fetch_all($select, MYSQLI_ASSOC);


/**
 * Get date for view current price
 */
foreach ($discount as $value) {

    $datetimeStart = new DateTime($value['start_period']);
    $datetimeEnd = new DateTime($value['end_period']);

    $interval = $datetimeStart->diff($datetimeEnd);

    if ($nowDate > $value['start_period'] && $nowDate < $value['end_period']) {

        $pricePerPeriod = $value['price_period'];

    } elseif($nowDate < $value['start_period'] ){

//    }
//    elseif ($interval->days >= 1 && $interval->days <= $interval->days) {
//
//        $pricePerPeriod = $value['price_period'];

//    } elseif ($interval->days >= 1 && $interval->days <= 2) {
//
//        $pricePerPeriod = $value['price_period'];
    }
}
