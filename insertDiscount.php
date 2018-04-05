<?php
require_once('selects.php');

if(!empty($_POST)){

    $prId = $products[0]['pr_id'];
    $startPeriod = $_POST['start_period'];
    $endPeriod = $_POST['end_period'];
    $discount = $_POST['discount'];
    $increase = $_POST['increase'];
    $percent = $_POST['percent'];

        if ($_POST['discount'] == 'on' ){

            $pricePeriod = 10000-((10000*$_POST['percent'])/100);
        }

        if ($_POST['increase'] == 'on' ){

            $pricePeriod = 10000+(10000*($_POST['percent']/100));
        }
    $newPrice = $pricePeriod;

    $addNewPeriod = $connect->query("INSERT INTO discount (`pr_id`, `start_period`, `end_period`, `discount`, 
                                            `increase`, `percent`, `price_period`) 
                            VALUES ('$prId', '$startPeriod', '$endPeriod', '$discount', '$increase', '$percent', '$newPrice')");

    header('Location: http://testmadison/index.phtml');
}