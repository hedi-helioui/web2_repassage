<?php

class Utilisateurs
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $email = null;
    private ?string $motDePasse = null;
    private ?string $role = null; // Administrateur, Agent de location, Client

    public function __construct($id = null, $nom, $prenom, $email, $motDePasse, $role)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->motDePasse = $motDePasse;
        $this->role = $role;
    }

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    // Setters
    public function setNom($nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setMotDePasse($motDePasse): self
    {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    public function setRole($role): self
    {
        $this->role = $role;
        return $this;
    }

    // Vérifier si l'utilisateur est un administrateur
    public function estAdministrateur(): bool
    {
        return $this->role === 'administrateur';
    }

    // Vérifier si l'utilisateur est un agent de location
    public function estAgentDeLocation(): bool
    {
        return $this->role === 'agent_de_location';
    }

    // Vérifier si l'utilisateur est un client
    public function estClient(): bool
    {
        return $this->role === 'client';
    }
}
