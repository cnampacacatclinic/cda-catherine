<?php

namespace App\Service;

use App\Repository\VisitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class VisitService
{
    private $visitRepository;
    private $entityManager;
    private $request;

    public function __construct(EntityManagerInterface $entityManager, VisitRepository $visitRepository, RequestStack $request)
    {
        $this->visitRepository = $visitRepository;
        $this->entityManager = $entityManager;
        $this->request = $request;
    }

    public function deleteData2M()
    {
        return $this->visitRepository->deleteOldData();
    }

    public function findAllVisits()
    {
        return $this->visitRepository->findAll();
    }

    public function deleteById($id)
    {
        return $this->visitRepository->delete($id);
    }

    public function saveOneVisit($ip,$origine,$currentPage,$cookie){
        return $this->visitRepository->saveVisit($ip,$origine, $currentPage, $cookie);
    }

    
    /*public function cookiiie() {

        /* On a besoin d'un cookie test en local mais il ne sera pas utilisé sur le server distant
        * Avec ce cookie test, on peut lire dans la console ceci:
        * SameSite=None
        * cela indique que le cookie test peut être envoyé dans des requêtes cross-site */
       
        // Si le cookie n'existe pas
    /*    if (empty($_COOKIE["cookieTest"])) {
            // On génére une valeur aléatoire pour le cookie
            $ref_cookie = rand(1, 100) . '-' . time();
            
            // On donne le nom du cookie
            $nom_cookie = "cookieTest";
            
            // On créait le cookie avec son nom, sa valeur et sa durée de vie
            // Expire dans 30 jours
            setcookie($nom_cookie, $ref_cookie, time() + (2592000));
            
            // On obtient la valeur du nouveau cookie
            return $ref_cookie;
        }

        /* Cookie securisé */
        // Si le cookie n'existe pas
   /*     if (empty($_COOKIE["cookieSecure"])) {
            // le cookie est accessible uniquement via HTTPS
            $secure = true;

            // le cookie est accessible uniquement via le protocole HTTP
            $httponly = true;
            
            // On génére une valeur aléatoire pour le cookie
            $ref_cookieSecure = rand(1, 100) . '-' . time();
            
            // On donne le nom du cookie
            $nom_cookieSecure = "cookieSecure";
            
            // On créait le cookie avec son nom, sa valeur et sa durée de vie
            // Expire dans 30 jours
            setcookie($nom_cookieSecure, $ref_cookieSecure, time() + (2592000), $secure, $httponly);
            
            // On obtient la valeur du nouveau cookie
            return $ref_cookieSecure;
        }
        
        // Si le cookie existe déjà, on retourne sa valeur actuelle
        if (empty($cookieValue) && !empty($_COOKIE["cookieTest"])) {
            $cookieValue = $_COOKIE["cookieTest"];
        }
    
        return $cookieValue;
        // return $_COOKIE["cookieSecure"];
    }
/** */

public function cookiiie()
{
    
        // If the cookieTest does not exist
      if (empty($_COOKIE["cookieTest"])) {
            // Generate a random value for the cookie
            $ref_cookie = rand(1, 100) . '-' . time();

            // Set the name of the cookie
            $nom_cookie = "cookieTest";

            // Create the cookie with its name, value, and expiration time (expires in 30 days)
            setcookie($nom_cookie, $ref_cookie, time() + 2592000);

            // Return the value of the new cookie
            return $ref_cookie;
       }
    

    // If the cookieTest already exists, return its current value
    return $_COOKIE["cookieTest"];
}

    public function visitCookie() {

        // Pour la table visit
        $currentPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $origine = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'local';
        $ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : '127.0.0.1';
      
      if(!empty($_GET['cookie']) && $_GET['cookie']=='ok'){
        // Vérifie si le cookie cookieTest existe
        if (!empty($_COOKIE["cookieTest"])) {
          // Utilise la valeur du cookie cookieTest
          $cookieValue = $_COOKIE["cookieTest"];
          return $this->saveOneVisit($ip, $origine, $currentPage, $cookieValue);
        }else{
            $cookieValue=$this->cookiiie();
            $this->saveOneVisit($ip, $origine, $currentPage, $cookieValue);
        }
      
        // Si aucun cookie n'existe, définit la valeur du cookie à "Aucun cookie"
        $cookieValue = 'Aucun cookie';
        return $this->saveOneVisit($ip, $origine, $currentPage, $cookieValue);
      }
    }
}