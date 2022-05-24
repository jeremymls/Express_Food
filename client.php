<?php
$title = "Passer une commande";
$page = "client";
include "header.php";
?>
<!-- MAIN CODE -->

<h2>Menu du jour</h2>

<div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Plat 1</h5>
                <h6 class="card-subtitle mb-2 text-muted">NomDuPlat</h6>
                <p class="card-text">Description du plat</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Plat 2</h5>
                <h6 class="card-subtitle mb-2 text-muted">NomDuPlat</h6>
                <p class="card-text">Description du plat</p>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Dessert 1</h5>
                <h6 class="card-subtitle mb-2 text-muted">NomDuDessert</h6>
                <p class="card-text">Description du Dessert</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Dessert 2</h5>
                <h6 class="card-subtitle mb-2 text-muted">NomDuDessert</h6>
                <p class="card-text">Description du Dessert</p>
            </div>
        </div>
    </div>
</div>






<form>
    <div class="mb-3">
        <label for="last" class="form-label">Nom</label>
        <input type="text" class="form-control" id="last">
    </div>
    <div class="mb-3">
        <label for="first" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="first">
    </div>
    <div class="mb-3">
        <label for="adresse" class="form-label">Adresse 1</label>
        <input type="text" class="form-control" id="adresse">
    </div>
    <div class="mb-3">
        <label for="complement" class="form-label">Adresse 2</label>
        <input type="text" class="form-control" id="complement">
    </div>
    <div class="row">
        <div class="col-2">
            <div class="mb-3">
                <label for="codepostal" class="form-label">Code postal</label>
                <input type="text" class="form-control" id="codepostal">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville">
            </div>
        </div>
    </div>



    <button type="submit" class="btn btn-primary">Passer la commande</button>
</form>

<!-- END OF MAIN CODE -->
<?php
include 'footer.php';
?>