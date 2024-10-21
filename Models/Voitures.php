<?php

class Voitures
{
    private ?int $id = null;
    private ?string $marque = null;
    private ?string $modele = null;
    private ?int $annee = null;
    private ?bool $disponibilite = null;
    private ?float $prixJour = null;

    public function __construct($id = null, $marque, $modele, $annee, $disponibilite, $prixJour)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->disponibilite = $disponibilite;
        $this->prixJour = $prixJour;
    }

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function getDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function getPrixJour(): ?float
    {
        return $this->prixJour;
    }

    // Setters
    public function setMarque($marque): self
    {
        $this->marque = $marque;
        return $this;
    }

    public function setModele($modele): self
    {
        $this->modele = $modele;
        return $this;
    }

    public function setAnnee($annee): self
    {
        $this->annee = $annee;
        return $this;
    }

    public function setDisponibilite($disponibilite): self
    {
        $this->disponibilite = $disponibilite;
        return $this;
    }

    public function setPrixJour($prixJour): self
    {
        $this->prixJour = $prixJour;
        return $this;
    }
}
