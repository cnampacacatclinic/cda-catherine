<?php
namespace App\Service;

// Importation des classes nécessaires de Symfony et Doctrine
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface; // Interface pour encoder les mots de passe des utilisateurs
use Doctrine\ORM\EntityManagerInterface; // Interface pour interagir avec l'ORM Doctrine
use App\Service\UserService;
use App\Entity\User;

class BibiConnexionService
{
    private $encoder; // Interface d'encodage des mots de passe
    private $entityManager; // Interface pour gérer les entités et la base de données

    public function __construct(UserPasswordEncoderInterface $encoder, EntityManagerInterface $entityManager)
    {
        // Initialisation des propriétés avec les dépendances injectées
        $this->encoder = $encoder;
        $this->entityManager = $entityManager;
    }

    // Méthode pour crypter un mot de passe
    public function crypterMotDePasse(User $user, $plainPassword)
    {
        // Crypter le mot de passe en utilisant l'encodeur de Symfony
        $encodedPassword = $this->encoder->encodePassword($user, $plainPassword);

        // Retourner le mot de passe crypté
        return $encodedPassword;
    }

    // Méthode pour comparer un mot de passe non crypté avec un mot de passe crypté dans la BDD
    public function comparerMotDePasse($plainPassword, $encodedPassword)
    {
        // Utiliser l'encodeur pour vérifier si le mot de passe non crypté correspond au mot de passe crypté dans la BDD
        return $this->encoder->isPasswordValid(null, $plainPassword, $encodedPassword);
    }
}