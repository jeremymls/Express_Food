<?php
$title = "Tableau de bord";
$page = "index";
include "header.php";
$produit = $table_produit->getRows();
?>
<section id="dashboard" class="text-center">
    <div class="row justify-content-center">
        <h2>Back-Office</h2>
        <div class="col-auto">
            <a class="btn btn-secondary btn-lg" href="chef.php" role="button">Chef</a>
<?= Singleton::getHtmlTable('select id_chef as id, prenom, nom from chef'); ?>
        </div>
        <div class="col-auto">
            <a class="btn btn-secondary btn-lg" href="livreur.php" role="button">Livreur</a>
<?= Singleton::getHtmlTable('select id_livreur as id, prenom, nom  from livreur'); ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <h2>Front</h2>
        <div class="col-auto">
            <a class="btn btn-primary btn-lg" href="client.php" role="button">Client (Commande)</a>
            <div class="row">
                <div class="col-auto">
                    <?= Singleton::getHtmlTable('select id_client as id, prenom, nom from client'); ?>
                </div>
                <div class="col-auto">
                    <?= Singleton::getHtmlTable('select id_commande as id, prix_commande as prix, cl.nom as client  from commande co join client cl on co.id_client=cl.id_client '); ?>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="text-center ">
    <h2>Menu du jour</h2>
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Plat 1</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $produit[0]["nom"] ?></h6>
                    <p class="card-text"><?= $produit[0]["prix_produit"] ?> €</p>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Plat 2</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $produit[1]["nom"] ?></h6>
                    <p class="card-text"><?= $produit[1]["prix_produit"] ?> €</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <div class="col-auto">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Dessert 1</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $produit[2]["nom"] ?></h6>
                    <p class="card-text"><?= $produit[2]["prix_produit"] ?> €</p>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Dessert 2</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $produit[3]["nom"] ?></h6>
                    <p class="card-text"><?= $produit[3]["prix_produit"] ?> €</p>
                </div>
            </div>
        </div>
    </div>
</section>









<!-- END OF MAIN CODE -->
<?php
include 'footer.php';
?>