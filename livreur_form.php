<?php
$livreur = new Model(HOST, 3306, DB, USER, PASS, 'livreur');

$livreur = $livreur->getRow("livreur_id", $_GET['livreur_id']);
?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Livreur <?= $livreur['nom'] . " " . $livreur['prenom'] ?></h5>
    </div>
</div>

<form action="livreur_get.php" method="post">
    <input type="text" hidden id="livreur_id" name="livreur_id" value=<?=$_GET['livreur_id']?>>
    <div class="mb-3">
        <label for="menu_id" class="form-label">Menu</label>
        <?= Singleton::getHtmlSelect("menu_id", 'SELECT menu_id, concat("Menu ",menu_id," : ",plat1," - ",plat2," - ",dessert1," - ",dessert2) from menu') ?>
    </div>
    <div class="mb-3">
        <label for="quantite" class="form-label">Quantité</label>
        <input type="number" class="form-control" id="quantite" name="quantite">
    </div>
    <button type="submit" class="btn btn-primary">Prendre</button>
</form>
<h2>Nombre de plats chargés</h2>

<?php 
$sql = 'SELECT 
    produit.menu_id as id,  
    count(produit.menu_id) as "Quantité",
    menu.plat1,
    menu.dessert1,
    menu.plat2,
    menu.dessert2
FROM produit 
join menu on produit.menu_id = menu.menu_id 
WHERE 
    produit.livreur_id = ' . 
    $_GET['livreur_id'] . 
    ' and 
    produit.commande_id IS NULL
    group by
    produit.menu_id';
if (count(Singleton::getAllData($sql))){
    echo Singleton::getHtmlTable($sql);
} else {
    echo "<p>Aucun plat chargé</p>";
};