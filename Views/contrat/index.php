<?php include 'views/layouts/header.php'; ?>

<h1>Liste des contrats de location</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Voiture</th>
            <th>Utilisateur</th>
            <th>Date début</th>
            <th>Date fin</th>
            <th>Prix total</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contrats as $contrat) : ?>
            <tr>
                <td><?= $contrat->getId(); ?></td>
                <td><?= $contrat->getIdVoiture(); ?></td>
                <td><?= $contrat->getIdUtilisateur(); ?></td>
                <td><?= $contrat->getDateDebut(); ?></td>
                <td><?= $contrat->getDateFin(); ?></td>
                <td><?= $contrat->getPrixTotal(); ?></td>
                <td>
                    <a href="contrat/show/<?= $contrat->getId(); ?>">Voir</a>
                    <a href="contrat/edit/<?= $contrat->getId(); ?>">Modifier</a>
                    <a href="contrat/delete/<?= $contrat->getId(); ?>" onclick="return confirm('Voulez-vous vraiment supprimer ce contrat ?');">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="contrat/create">Ajouter un contrat</a>

<?php include 'views/layouts/footer.php'; ?>
