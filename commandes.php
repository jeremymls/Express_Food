<?php
$title = "Commande";
$page = "commandes";
include "header.php";
$produit = $table_produit->getRows();
?>
<!-- MAIN CODE -->

<div class="row text-center justify-content-center">
    <div class="col-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Choix du menu</li>
                <li class="breadcrumb-item">Informations de livraison</li>
                <li class="breadcrumb-item">Paiement</li>
            </ol>
        </nav>
    </div>
</div>

<form action="commande_save.php" method="post">
    <section id="menuSelect">
        <div class="row">
            <div class="col text-center">
                <h2>Menu du jour</h2>
                <div class="row justify-content-around">
                    <div class="col-auto">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Plat 1</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $produit[0]["nom"] ?></h6>
                                <p class="card-text"><?= $produit[0]["prix_produit"] ?> €</p>
                                <input type="hidden" name="id" value="<?= $produit[0]["id_produit"] ?>">
                                <button id="plat1" type="button" class="btn btn-success addBtn btn-sm">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Plat 2</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $produit[1]["nom"] ?></h6>
                                <p class="card-text"><?= $produit[1]["prix_produit"] ?> €</p>
                                <input type="hidden" name="id" value="<?= $produit[1]["id_produit"] ?>">
                                <button id="plat2" type="button" class="btn btn-success addBtn btn-sm">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 justify-content-around">
                    <div class="col-auto">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Dessert 1</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $produit[2]["nom"] ?></h6>
                                <p class="card-text"><?= $produit[2]["prix_produit"] ?> €</p>
                                <input type="hidden" name="id" value="<?= $produit[2]["id_produit"] ?>">
                                <button id="dessert1" type="button" class="btn btn-success addBtn btn-sm">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Dessert 2</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $produit[3]["nom"] ?></h6>
                                <p class="card-text"><?= $produit[3]["prix_produit"] ?> €</p>
                                <input type="hidden" name="id" value="<?= $produit[3]["id_produit"] ?>">
                                <button id="dessert2" type="button" class="btn btn-success addBtn btn-sm">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Selection</h2>
                        <ul id="selection" style="min-height: 6rem;" class="list-group">
                            <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                            <input class="form-control-plaintext" name="nom" type="text" readonly  aria-label="input">
                            <input class="form-control" name="prix_produit" type="number" style="width: 5rem;" aria-label="input">
                        </li> -->
                        </ul>
                    </div>
                    <button id="menuOk" type="button" class="btn btn-success mt-3">Valider</button>
                </div>
            </div>
        </div>
    </section>

    <section id="livraison" hidden>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="text" class="form-control" id="telephone" name="telephone">
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Mail</label>
            <input type="text" class="form-control" id="mail" name="mail">
        </div>
        <div class="mb-3">
            <label for="mot_de_passe" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe">
        </div>

        <div class="mb-3">
            <label for="rue" class="form-label">Rue</label>
            <input type="text" name="rue" class="form-control" id="rue">
        </div>
        <div class="mb-3">
            <label for="complement" class="form-label">Complément</label>
            <input type="text" class="form-control" id="complement" name="complement">
        </div>
        <div class="row">
            <div class="col-2">
                <div class="mb-3">
                    <label for="code_postal" class="form-label">Code postal</label>
                    <input type="text" class="form-control" id="code_postal" name="code_postal">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville">
                </div>
            </div>
        </div>
        <!-- <button id="menuOk" type="button" class="btn btn-danger mt-3">Retour</button> -->
        <button id="livraisonOk" type="button" class="btn btn-success mt-3">Valider</button>
    </section>
    <section id="paiement" hidden>
        <button id="paiementOk" type="button" class="btn btn-success mt-3">Payer</button>
    </section>
    <section id="confirmation" hidden>
        <input class="btn btn-primary" type="submit" value="Passer la commande">
    </section>


</form>

<script>
    document.querySelectorAll(".addBtn").forEach((btn) => {
        btn.addEventListener("click", function(e) {
            const id = e.target.previousElementSibling.value;
            const name = e.target.previousElementSibling.previousElementSibling.previousElementSibling.innerText;
            const prix = e.target.previousElementSibling.previousElementSibling.innerText;
            const btn = e.target;
            var selection = document.getElementById("selection");
            var li = `<li id="li${id}" class="list-group-item d-flex justify-content-between align-items-center">
                        <div style="width:100%;">${name} ${prix}</div>
                        <input class="form-control" name="quantite[${id}]" value="1" type="number" style="width: 5rem;" aria-label="input">
                        <button id="trash${id}" type="button" class="btn btn-danger btn-sm ms-2"><i class="bi bi-trash"></i></button>
                        <input type="hidden" name="id_produit[${id}]" value="${id}">
                        <input type="hidden" name="prix_produit[${id}]" value="${prix}">
                    </li>`;
            btn.classList.add("disabled");
            selection.innerHTML += li;
            // addEventListener(id, btn);
        });
    })

    // function addEventListener(id, btn) {
    //     document.getElementById(`trash${id}`).addEventListener("click", function(e) {
    //         document.getElementById(`li${id}`).remove();
    //         btn.classList.remove("disabled");
    //     });
    // }
    document.getElementById("menuOk").addEventListener("click", function(e) {
        document.getElementById("menuSelect").setAttribute("hidden", true);
        document.getElementById("livraison").removeAttribute("hidden");
    });
    document.getElementById("livraisonOk").addEventListener("click", function(e) {
        document.getElementById("livraison").setAttribute("hidden", true);
        document.getElementById("paiement").removeAttribute("hidden");
    });
    document.getElementById("paiementOk").addEventListener("click", function(e) {
        document.getElementById("paiement").setAttribute("hidden", true);
        document.getElementById("confirmation").removeAttribute("hidden");
    });
</script>
<!-- END OF MAIN CODE -->
<?php
include 'footer.php';
?>