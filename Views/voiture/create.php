<?php include 'views/layouts/header.php'; ?>

<h1>Ajouter une voiture</h1>

<form action="voiture/store" method="POST">
    <label for="marque">Marque :</label>
    <input type="text" name="marque" required>

    <label for="modele">Modèle :</label>
    <input type="text" name="modele" required>

    <label for="annee">Année :</label>
    <input type="number" name="annee" required>

    <label for="disponibilite">Disponibilité :</label>
    <input type="text" name="disponibilite" required>

    <label for="prixJour">Prix par jour :</label>
    <input type="number" name="prixJour" required>

    <button type="submit">Ajouter</button>
</form>

<?php include 'views/layouts/footer.php'; ?>
