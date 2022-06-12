<?php
include_once('constants.php');
include_once('model.class.php');
$order = new Model(HOST, 3306, DB, USER, PASS, 'produit');
$order->update($_POST, 'id_produit', $_POST['id_produit']);
header('location:chef.php?id_produit=' . $_POST['id_produit']);
