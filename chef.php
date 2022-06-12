<?php
$title = "Chef";
$page = "chef";
include "header.php";

if (isset($_GET['id_produit']) && !empty($_GET['id_produit'])) {
    $produit = $table_produit->getRow('id_produit', $_GET['id_produit']);
}

?>
<div class="row align-items-center">
    <div class="col text-center">
        <h2>Produits</h2>
        <?= Singleton::getHtmlTable('select id_produit as id, nom, type, prix_produit as prix, quantite_stock as stock from produit'); ?>
    </div>
    <div class="col">
        <h2 class="text-center">Modification</h2>
        <form action="produit_edit.php" method="post">
            <div class="row">
            <div class="col-auto">

                <?= Singleton::getHtmlSelect(
                    'id_produit',
                    'select id_produit, concat(id_produit,"- ",nom, " - ", type, " - ",prix_produit, "€") from produit',
                    [],
                    'Sélectionner le produit à modifier'
                ); ?>
                </div>
                </div>

            <label for="nom">Nom</label>
            <input class="form-control" type="text" name="nom" id="nom" required value="<?= isset($produit) ? $produit["nom"] : "" ?>">

            

            <div class="row">
            <div class="col-auto">
            <label for="type">Type</label>
            <?php $type = isset($produit) ? $produit["type"] : "" ?>
            <select class="form-control" name="type" id="type">
                <option <?= ($type == "plat") ? "selected" : "" ?> value="plat">Plat</option>
                <option <?= ($type == "dessert") ? "selected" : "" ?> value="dessert">Dessert</option>
            </select>
            </div>
            <div class="col-auto">
                
                <label for="prix_produit">Prix</label>
                <input class="form-control" type="text" name="prix_produit" id="prix_produit" required value="<?= isset($produit) ? $produit["prix_produit"] : "" ?>">
            </div>
            <div class="col-auto">
                
                <label for="quantite_stock">Stock</label>
                <input class="form-control" type="number" name="quantite_stock" id="quantite_stock" value="<?= isset($produit) ? $produit["quantite_stock"] : 0 ?>">
            </div>
            </div>

<div class="row mt-3">

    <input class="btn btn-primary" type="submit" value="Éditer">
</div>
        </form>
    </div>
</div>

<script>
    document.getElementById('id_produit').addEventListener('change', function(e) {
        let id = e.target.value;
        let url = 'chef.php' + (id != 0 ? '?id_produit=' + id : "");
        window.location.href = url;
    });
    const id = window.location.href.split('=')[1];
    if (id) {
        document.getElementById('id_produit').value = id;
    }
</script>
<?php
include 'footer.php';
?>