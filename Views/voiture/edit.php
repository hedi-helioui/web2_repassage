<?php include 'views/layouts/header.php'; ?>

<h1>Modifier la voiture</h1>

<form action="voiture/update/<?= $voiture->getId(); ?>" method="POST">
    <label for="marque">Marque :</label>
    <input type="text" name="marque" value="<?= $voiture->getMarque(); ?>" required>

    <label for="modele">Modèle :</label>
    <input type="text" name="modele" value="<?= $voiture->getModele(); ?>" required>

    <label for="annee">Année :</label>
    <input type="number" name="annee" value="<?= $voiture->getAnnee(); ?>" required>

    <label for="disponibilite">Disponibilité :</label>
    <input type="text" name="disponibilite" value="<?= $voiture->getDisponibilite(); ?>" required>

    <label for="prixJour">Prix par jour :</label>
    <input type="number" name="prixJour" value="<?= $voiture->getPrixJour(); ?>" required>

    <button type="submit">Mettre à jour</button>
</form>

<?php include 'views/layouts/footer.php'; ?>
