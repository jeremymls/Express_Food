<?php
$title = "Livreur";
$page = "livreur";
include "header.php";
?>

<h2>Livreur</h2>
<?= Singleton::getHtmlTable('select id_livreur as id, nom, prenom, latitude, longitude, statut_livreur from livreur'); ?>

<form action="produit_edit.php" method="post">
    <?= Singleton::getHtmlSelect('id_livreur', 'select id_livreur, concat(id_livreur,"- ",prenom," ", nom) from livreur', [], 'Sélectionner un livreur'); ?>

    <label for="nom">Nom</label>
    <input class="form-control" type="text" name="nom" id="nom" required>

    <label for="type">Type</label>
    <select class="form-control" name="type" id="type">
        <option value="plat">Plat</option>
        <option value="dessert">Dessert</option>
    </select>

    <label for="prix_produit">Prix</label>
    <input class="form-control" type="number" name="prix_produit" id="prix_produit" required>

    <label for="quantite_stock">Stock</label>
    <input class="form-control" type="number" name="quantite_stock" id="quantite_stock">


    <input type="submit" value="Editer">
</form>
<?php

if (isset($_GET['id_produit']) && !empty($_GET['id_produit'])) {
    $order = new Model(HOST, 3306, DB, USER, PASS, 'produit');
    $produit = $order->getRow('id_produit', $_GET['id_produit']);
}

?>
<script>
    var produit = <?= json_encode($produit); ?>;
    window.addEventListener(
        'load',
        function() {
            if (produit) {
                document.getElementById('id_produit').value = produit['id_produit'];
                document.getElementById('nom').value = produit['nom'];
                document.getElementById('type').value = produit['type'];
                document.getElementById('prix_produit').value = produit['prix_produit'];
                document.getElementById('quantite_stock').value = produit['quantite_stock'];
            }
        });
    document.getElementById('id_produit').addEventListener('change', function(e) {
        let id = e.target.value;
        let url = 'chef.php?id_produit=' + id;
        window.location.href = url;
    });
</script>
<?php
include 'footer.php';
?>