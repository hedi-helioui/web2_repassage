<?php include 'views/layouts/header.php'; ?>

<h1>Liste des voitures</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Année</th>
            <th>Disponibilité</th>
            <th>Prix par jour</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($voitures as $voiture) : ?>
            <tr>
                <td><?= $voiture->getId(); ?></td>
                <td><?= $voiture->getMarque(); ?></td>
                <td><?= $voiture->getModele(); ?></td>
                <td><?= $voiture->getAnnee(); ?></td>
                <td><?= $voiture->getDisponibilite(); ?></td>
                <td><?= $voiture->getPrixJour(); ?></td>
                <td>
                    <a href="voiture/show/<?= $voiture->getId(); ?>">Voir</a>
                    <a href="voiture/edit/<?= $voiture->getId(); ?>">Modifier</a>
                    <a href="voiture/delete/<?= $voiture->getId(); ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette voiture ?');">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="voiture/create">Ajouter une voiture</a>

<?php include 'views/layouts/footer.php'; ?>
