<?php include 'views/layouts/header.php'; ?>
<?php include 'Models/Voitures.php'; ?>
<h1>Détails de la voiture</h1>

<p><strong>Marque :</strong> <?= $voiture->getMarque(); ?></p>
<p><strong>Modèle :</strong> <?= $voiture->getModele(); ?></p>
<p><strong>Année :</strong> <?= $voiture->getAnnee(); ?></p>
<p><strong>Disponibilité :</strong> <?= $voiture->getDisponibilite(); ?></p>
<p><strong>Prix par jour :</strong> <?= $voiture->getPrixJour(); ?></p>

<a href="voiture/index">Retour à la liste des voitures</a>

<?php include 'views/layouts/footer.php'; ?>
