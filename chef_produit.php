<?php
include_once('constants.php');
include_once('model.class.php');
$post = array(
    'date' => date("Y-m-d\Th:i:s"),
    'chef_id' => $_GET['chef_id'],
    'menu_id' => $_GET['menu_id'],
);
for ($i=0; $i < $_GET['quantity']; $i++) { 
$order = new Model(HOST, 3306, DB, USER, PASS, 'produit');
$order->insert($post);
}
header('location:chef.php?chef_id='.$_GET['chef_id']);