<h2>Sélectionner un chef</h2>
<form action="chef.php" method="get">
<?= Singleton::getHtmlSelect('chef_id', 'SELECT chef_id, concat(nom," - ",prenom) FROM chef ');?>
<input type="submit" value="Valider">
</form>
