<?php
require_once ('dbConnect.php');
require_once ('selects.php');

if (isset($_POST['deletedID'])){

    foreach ($discount as $value){

    }

    if($_POST['deletedID'] == $value['id']){

        $del = $_POST['deletedID'];

        $result = $connect->query("DELETE FROM `discount` WHERE id = '$del'");

        header('Location: http://testmadison/index.phtml');
        exit;
    }

}