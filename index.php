<?php
$title = "Tableau de bord";
$page = "index";
include "header.php";
?>

<h2>Produits</h2>
<?= Singleton::getHtmlTable('select * from produit'); ?>
<h2>Livreurs</h2>
<h2>Commandes</h2>








<!-- END OF MAIN CODE -->
<?php
include 'footer.php';
?>