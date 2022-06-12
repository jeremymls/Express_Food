<?php
$title = "Base de données";
$page = "récapitulatif";
include "header.php";
?>
<h2>Adresses</h2>
<?= Singleton::getHtmlTable('select * from detail_adresse'); ?>
<h2>Clients</h2>
<?= Singleton::getHtmlTable('select * from client'); ?>
<h2>Commandes</h2>
<?= Singleton::getHtmlTable('select * from commande'); ?>
<h2>Détails commandes</h2>
<?= Singleton::getHtmlTable('select * from detail_commande'); ?>
<?php
include 'footer.php';
?>