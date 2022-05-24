<?php
$title = "Tableau de bord";
$page = "index";
include "header.php";
?>

<h2>Nombre de plats en stock</h2>

<?php
Singleton::setConfiguration(HOST, 3306, DB, USER, PASS);
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
?>



<!-- END OF MAIN CODE -->
<?php
include 'footer.php';
?>