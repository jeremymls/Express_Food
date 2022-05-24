<?php
include_once('constants.php');
include_once('model.class.php');
$order = new Model(HOST, 3306, DB, USER, PASS, 'menu');
$order->insert($_POST);
header('location:back_office.php#menu');
