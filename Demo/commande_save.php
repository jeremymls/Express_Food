<?php
include_once('constants.php');
include_once('model.class.php');
$tableDetail_adresse = new Model(HOST, 3306, DB, USER, PASS, 'detail_adresse');
$tableClient = new Model(HOST, 3306, DB, USER, PASS, 'client');
$tableCom = new Model(HOST, 3306, DB, USER, PASS, 'commande');
$detail_commande = new Model(HOST, 3306, DB, USER, PASS, 'detail_commande');

// var_dump($_POST);

$adresse = [
    "rue" => $_POST['rue'],
    "code_postal" => $_POST['code_postal'],
    "ville" => $_POST['ville'],
    "complement" => $_POST['complement'],
];
$tableDetail_adresse->insert($adresse);

$adresseID = $tableDetail_adresse->getRowParams(
    "rue = '" . $_POST['rue'] . 
    "' AND code_postal = '" . $_POST['code_postal'] . 
    "' AND ville = '" . $_POST['ville'] . "'" 
);
$adresseID = $adresseID['id_detail_adresse'];



$client = [
    "nom" => $_POST['nom'],
    "prenom" => $_POST['prenom'],
    "telephone" => $_POST['telephone'],
    "mail" => $_POST['mail'],
    "mot_de_passe" => $_POST['mot_de_passe'],
    "id_detail_adresse" => $adresseID
];
$tableClient->insert($client);

$clientID = $tableClient->getRowParams(
    "nom = '" . $_POST['nom'] . 
    "' AND prenom = '" . $_POST['prenom'] . 
    "' AND telephone = '" . $_POST['telephone'] . 
    "' AND mail = '" . $_POST['mail'] . 
    "' AND id_detail_adresse = '" . $adresseID . "'"
);
$clientID = $clientID['id_client'];



$commande = [
    "prix_commande" => 0,
    "id_client" => $clientID, 
    "id_livreur" => 1
];
$tableCom->insert($commande);

$comId = $tableCom->getRows();
$comId = $comId[count($comId) - 1];
$comId = $comId["id_commande"];



$produit = [];
$prix_commande = 0;
foreach ($_POST['id_produit'] as $key => $value) {
    $prix_commande += $_POST['prix_produit'][$value];
    $id = (int)$value;
    $quantite = (int)$_POST['quantite'][$key];
    $produit[$key] = ["id_commande" =>  $comId, "quantite_commande" => $quantite, "id_produit" => $id];
}
foreach ($produit as $key => $value) {
    $detail_commande->insert($value);
}
$tableCom->update(["prix_commande" => $prix_commande],"id_commande", $comId );


header('location:commande_recap.php');