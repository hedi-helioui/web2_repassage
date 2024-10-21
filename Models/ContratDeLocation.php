<?php

class ContratDeLocation
{
    private ?int $id = null;
    private ?int $idVoiture = null;
    private ?int $idUtilisateur = null;
    private ?string $dateDebut = null;
    private ?string $dateFin = null;
    private ?float $prixTotal = null;

    public function __construct($id = null, $idVoiture, $idUtilisateur, $dateDebut, $dateFin, $prixTotal)
    {
        $this->id = $id;
        $this->idVoiture = $idVoiture;
        $this->idUtilisateur = $idUtilisateur;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->prixTotal = $prixTotal;
    }

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVoiture(): ?int
    {
        return $this->idVoiture;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function getDateDebut(): ?string
    {
        return $this->dateDebut;
    }

    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    public function getPrixTotal(): ?float
    {
        return $this->prixTotal;
    }

    // Setters
    public function setIdVoiture($idVoiture): self
    {
        $this->idVoiture = $idVoiture;
        return $this;
    }

    public function setIdUtilisateur($idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;
        return $this;
    }

    public function setDateDebut($dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function setDateFin($dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function setPrixTotal($prixTotal): self
    {
        $this->prixTotal = $prixTotal;
        return $this;
    }
}
