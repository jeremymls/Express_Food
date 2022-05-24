<h2>Sélectionner un livreur</h2>
<form action="livreur.php" method="get">
    <?= Singleton::getHtmlSelect('livreur_id', 'SELECT livreur_id, concat(nom," - ",prenom) FROM livreur ') ?>
    <input type="submit" value="Valider">
</form>