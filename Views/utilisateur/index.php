<?php include 'views/layouts/header.php'; ?>

<h1>Liste des utilisateurs</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Rôle</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($utilisateurs as $utilisateur) : ?>
            <tr>
                <td><?= $utilisateur->getId(); ?></td>
                <td><?= $utilisateur->getNom(); ?></td>
                <td><?= $utilisateur->getPrenom(); ?></td>
                <td><?= $utilisateur->getEmail(); ?></td>
                <td><?= $utilisateur->getRole(); ?></td>
                <td>
                    <a href="utilisateur/show/<?= $utilisateur->getId(); ?>">Voir</a>
                    <a href="utilisateur/edit/<?= $utilisateur->getId(); ?>">Modifier</a>
                    <a href="utilisateur/delete/<?= $utilisateur->getId(); ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="utilisateur/create">Ajouter un utilisateur</a>

<?php include 'views/layouts/footer.php'; ?>
