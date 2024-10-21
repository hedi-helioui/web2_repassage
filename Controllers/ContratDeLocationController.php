<?php

include 'models/ContratDeLocation.php';
include '../Config.php';

class ContratDeLocationController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo; // Connexion PDO
    }

    // Lister tous les contrats
    public function index()
    {
        $stmt = $this->pdo->query("SELECT * FROM contrats");
        $contrats = $stmt->fetchAll(PDO::FETCH_CLASS, 'ContratDeLocation');
        return $contrats;
    }

    // Afficher un contrat spécifique
    public function show($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM contrats WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $contrat = $stmt->fetchObject('ContratDeLocation');
        return $contrat;
    }

    // Créer un nouveau contrat
    public function create($idVoiture, $idUtilisateur, $dateDebut, $dateFin, $prixTotal)
    {
        $stmt = $this->pdo->prepare("INSERT INTO contrats (idVoiture, idUtilisateur, dateDebut, dateFin, prixTotal) VALUES (:idVoiture, :idUtilisateur, :dateDebut, :dateFin, :prixTotal)");
        $stmt->execute([
            'idVoiture' => $idVoiture,
            'idUtilisateur' => $idUtilisateur,
            'dateDebut' => $dateDebut,
            'dateFin' => $dateFin,
            'prixTotal' => $prixTotal
        ]);
    }

    // Modifier un contrat
    public function update($id, $idVoiture, $idUtilisateur, $dateDebut, $dateFin, $prixTotal)
    {
        $stmt = $this->pdo->prepare("UPDATE contrats SET idVoiture = :idVoiture, idUtilisateur = :idUtilisateur, dateDebut = :dateDebut, dateFin = :dateFin, prixTotal = :prixTotal WHERE id = :id");
        $stmt->execute([
            'id' => $id,
            'idVoiture' => $idVoiture,
            'idUtilisateur' => $idUtilisateur,
            'dateDebut' => $dateDebut,
            'dateFin' => $dateFin,
            'prixTotal' => $prixTotal
        ]);
    }

    // Supprimer un contrat
    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM contrats WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}