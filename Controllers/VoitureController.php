<?php

include 'models/Voitures.php';
include '../Config.php';

class VoitureController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo; // Connexion PDO
    }

    // Lister toutes les voitures
    public function index()
    {
        $stmt = $this->pdo->query("SELECT * FROM voitures");
        $voitures = $stmt->fetchAll(PDO::FETCH_CLASS, 'Voiture');
        return $voitures;
    }

    // Afficher une seule voiture
    public function show($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM voitures WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $voiture = $stmt->fetchObject('Voiture');
        return $voiture;
    }

    // Créer une nouvelle voiture
    public function create($marque, $modele, $annee, $disponibilite, $prixJour)
    {
        $stmt = $this->pdo->prepare("INSERT INTO voitures (marque, modele, annee, disponibilite, prixJour) VALUES (:marque, :modele, :annee, :disponibilite, :prixJour)");
        $stmt->execute([
            'marque' => $marque,
            'modele' => $modele,
            'annee' => $annee,
            'disponibilite' => $disponibilite,
            'prixJour' => $prixJour
        ]);
    }

    // Modifier une voiture
    public function update($id, $marque, $modele, $annee, $disponibilite, $prixJour)
    {
        $stmt = $this->pdo->prepare("UPDATE voitures SET marque = :marque, modele = :modele, annee = :annee, disponibilite = :disponibilite, prixJour = :prixJour WHERE id = :id");
        $stmt->execute([
            'id' => $id,
            'marque' => $marque,
            'modele' => $modele,
            'annee' => $annee,
            'disponibilite' => $disponibilite,
            'prixJour' => $prixJour
        ]);
    }

    // Supprimer une voiture
    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM voitures WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}