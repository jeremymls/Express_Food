<?php
include_once('constants.php');
include_once('singleton.class.php');
include_once('model.class.php');
Singleton::setConfiguration(HOST, 3306, DB, USER, PASS);
$table_produit = new Model(HOST, 3306, DB, USER, PASS, 'produit');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Express Food<?= $title ? " - " . $title : "" ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <header>

    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Express Food</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?= $page == "chef" ? "active" : "" ?>" href="chef.php">Chef</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $page == "commandes" ? "active" : "" ?>" href="commandes.php">Commandes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $page == "client" ? "active" : "" ?>" href="livreur.php">Livreur</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <h1 class="text-center"><?= $title ?></h1>
  </header>
  <main>
    <div class="container my-3">