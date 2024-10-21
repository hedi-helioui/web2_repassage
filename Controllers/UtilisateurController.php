<?php

include 'models/Utilisateurs.php';
include '../Config.php';

class UtilisateurController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo; // Connexion PDO
    }

    // Lister tous les utilisateurs
    public function index()
    {
        $stmt = $this->pdo->query("SELECT * FROM utilisateurs");
        $utilisateurs = $stmt->fetchAll(PDO::FETCH_CLASS, 'Utilisateur');
        return $utilisateurs;
    }

    // Afficher un utilisateur spécifique
    public function show($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM utilisateurs WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $utilisateur = $stmt->fetchObject('Utilisateur');
        return $utilisateur;
    }

    // Créer un nouvel utilisateur
    public function create($nom, $prenom, $email, $motDePasse, $role)
    {
        $stmt = $this->pdo->prepare("INSERT INTO utilisateurs (nom, prenom, email, motDePasse, role) VALUES (:nom, :prenom, :email, :motDePasse, :role)");
        $stmt->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'motDePasse' => password_hash($motDePasse, PASSWORD_BCRYPT), // Hachage du mot de passe
            'role' => $role
        ]);
    }

    // Modifier un utilisateur
    public function update($id, $nom, $prenom, $email, $motDePasse, $role)
    {
        $stmt = $this->pdo->prepare("UPDATE utilisateurs SET nom = :nom, prenom = :prenom, email = :email, motDePasse = :motDePasse, role = :role WHERE id = :id");
        $stmt->execute([
            'id' => $id,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'motDePasse' => password_hash($motDePasse, PASSWORD_BCRYPT),
            'role' => $role
        ]);
    }

    // Supprimer un utilisateur
    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM utilisateurs WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}