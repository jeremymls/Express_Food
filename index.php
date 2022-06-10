<?php
$title = "Express Food";
$page = "index";
include "header.php";
?>

<h2>Chefs</h2>
<h3>Menu</h3>
    <?= Singleton::getHtmlTable('SELECT * FROM menu '); ?>
    <?= Singleton::getHtmlSelect('menu', 'SELECT *  FROM menu '); ?>


<?php
print_r(phpinfo());
// echo Singleton::getHtmlTable(
//     'SELECT 
//         produit.menu_id as id,  
//         count(produit.menu_id) as "Quantité",
//         menu.plat1,
//         menu.dessert1,
//         menu.plat2,
//         menu.dessert2
//     FROM 
//         produit 
//     join 
//         menu 
//     on 
//         produit.menu_id = menu.menu_id 
//     WHERE 
//         produit.livreur_id IS NULL 
//     and 
//         produit.commande_id IS NULL
//     group by
//         produit.menu_id
// ');
?>



<!-- END OF MAIN CODE -->
<?php
include 'footer.php';
?>