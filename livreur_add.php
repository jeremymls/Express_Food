<?php
include_once('constants.php');
include_once('model.class.php');
$order = new Model(HOST, 3306, DB, USER, PASS, 'livreur');
$order->insert($_POST);
header('location:back_office.php#livreur');
