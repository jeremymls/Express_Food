<?php
$title = "Livreur";
$page = "livreur";
include "header.php";


if (isset($_GET['livreur_id']) && !empty($_GET['livreur_id'])) {
    include "livreur_form.php";
} else {
    include "livreur_list.php";
}
?>

<h2>Nombre de plats en stock</h2>

<?php
echo Singleton::getHtmlTable(
    'SELECT 
        produit.menu_id as id,  
        count(produit.menu_id) as "Quantité",
        menu.plat1,
        menu.dessert1,
        menu.plat2,
        menu.dessert2
    FROM 
        produit 
    join 
        menu 
    on 
        produit.menu_id = menu.menu_id 
    WHERE 
        produit.livreur_id IS NULL 
    and 
        produit.commande_id IS NULL
    group by
        produit.menu_id
');

include 'footer.php';
?>