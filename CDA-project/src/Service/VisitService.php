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

    
    public function cookiiie() {

        /* On a besoin d'un cookie test en local mais il ne sera pas utilisé sur le server distant
        * Avec ce cookie test, on peut lire dans la console ceci:
        * SameSite=None
        * cela indique que le cookie test peut être envoyé dans des requêtes cross-site */

        // Si le cookie n'existe pas
        if (empty($_COOKIE["cookieTest"])) {
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
        if (empty($_COOKIE["cookieSecure"])) {
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
        return $_COOKIE["cookieTest"];
        // return $_COOKIE["cookieSecure"];
    }

    public function cookieLogin() {

        /* Cookie Login */
        // Si le cookie n'existe pas
        if (empty($_COOKIE["cookieLog"])) {
            // le cookie est accessible uniquement via HTTPS
            $secure = true;

            // le cookie est accessible uniquement via le protocole HTTP
            $httponly = true;
            
            // On génére une valeur aléatoire pour le cookie
            $ref_cookieSecure = rand(1, 100) . '-' . time();
            
            // On donne le nom du cookie
            $nom_cookieSecure = "cookieLog";
            
            // On créait le cookie avec son nom, sa valeur et sa durée de vie
            // Expire dans 24 heures
            setcookie($nom_cookieSecure, $ref_cookieSecure, time() + (86400), $secure, $httponly);
            
            // On obtient la valeur du nouveau cookie
            return $ref_cookieSecure;
        }


        // Récupérer la valeur du cookie PHPSESSID
        $phpSessionId = $this->request->cookies->get('PHPSESSID');

        // Récupérer la valeur du cookie cookieLog
        $cookieLog = $this->request->cookies->get('cookieLog');

        $cookieValue = '["'.$phpSessionId.'"],["'.$cookieLog.'"]';

        return $cookieValue;
    }
    
    public function visitCookie(){
        /* Pour la table visit */
        $currentPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $origine = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'local';
        $ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : '127.0.0.1';

        if(!empty($_COOKIE["cookieLog"])){
            $cookieValue = $_COOKIE["cookieLog"];
            $this->saveOneVisit($ip, $origine, $currentPage, $cookieValue);
        }elseif(!empty($_COOKIE["cookieTest"])){
            $cookieValue = $_COOKIE["cookieTest"];
            $this->saveOneVisit($ip, $origine, $currentPage, $cookieValue);
        }
        else{
            $cookieValue = 'Pas de cookie';
            $this->saveOneVisit($ip, $origine, $currentPage, $cookieValue);
        }
    }
}