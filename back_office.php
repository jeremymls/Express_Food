<?php
$title = "Back Office";
$page = "backOffice";
include "header.php";

Singleton::setConfiguration(HOST, 3306, DB, USER, PASS);
?>

<!-- Chefs -->
<h2 id="chef">Chefs</h2>
<?php
echo Singleton::getHtmlTable('SELECT * FROM chef ');
?>
<h2>Ajouter un chef</h2>
<form action="chef_add.php" method="post">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<!-- Livreur -->
<h2 id="livreur">Livreurs</h2>
<?php
echo Singleton::getHtmlTable('SELECT * FROM livreur ');
?>
<h2>Ajouter un livreur</h2>
<form action="livreur_add.php" method="post">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom">
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<!-- Menu -->
<h2>Menus</h2>
<?php
echo Singleton::getHtmlTable('SELECT * FROM menu ');
?>
<h2 id="menu">Ajouter un menu</h2>
<form action="menu_add.php" method="post">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="plat1" class="form-label">Plat n°1</label>
            <input type="text" class="form-control" id="plat1" name="plat1">
        </div>
        <div class="col-md-6 mb-3">
            <label for="plat2" class="form-label">Plat n°2</label>
            <input type="text" class="form-control" id="plat2" name="plat2">
        </div>
        <div class="row">
        </div>
        <div class="col-md-6 mb-3">
            <label for="dessert1" class="form-label">Dessert n°1</label>
            <input type="text" class="form-control" id="dessert1" name="dessert1">
        </div>
        <div class="col-md-6 mb-3">
            <label for="dessert2" class="form-label">Dessert n°2</label>
            <input type="text" class="form-control" id="dessert2" name="dessert2">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>



<?php
include 'footer.php';
?>