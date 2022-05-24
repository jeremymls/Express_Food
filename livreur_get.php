<?php
include_once('constants.php');
include_once('singleton.class.php');
include_once('model.class.php');
Singleton::setConfiguration(HOST, 3306, DB, USER, PASS);
$list = Singleton::getAllData('SELECT produit_id FROM produit  WHERE livreur_id IS NULL and commande_id IS NULL and menu_id = '.$_POST['menu_id']);
$post = array(
    'livreur_id' => $_POST['livreur_id'],
);
$produit = new Model(HOST, 3306, DB, USER, PASS, 'produit');

for ($i=0; $i < $_POST['quantite']; $i++) { 
    $produit->update($post, 'produit_id', $list[$i]['produit_id']);
    }
header('location:livreur.php?livreur_id='.$_POST['livreur_id']);