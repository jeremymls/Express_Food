<?php
$chef = $chef->getRow("chef_id", $_GET['chef_id']);
?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Chef <?= $chef['nom'] . " " . $chef['prenom'] ?></h5>
    </div>
</div>

<form action="chef_produit.php" method="get">
    <input type="text" name="chef_id" hidden value=<?=$chef["chef_id"]?>>
    <label for="menu_id">Menu préparé</label>
    <?= Singleton::getHtmlSelect('menu_id', 'SELECT menu_id, concat(plat1," - ",plat2," - ",dessert1," - ",dessert2) FROM menu '); ?>
    <label for="quantity">Nombre</label>
    <input type="number" class="form-control" name="quantity" id="quantity">
    <input type="submit" value="Valider">
</form>