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

    public function cookiiie()
    {
        
        // Si le cookie n'existe pas
        if (empty($_COOKIE['cookieTest'])) {
            // on genere un cookie random
            $ref_cookie = rand(1, 100) . '-' . time();

            // on nomme le cookie
            $nom_cookie = "cookieTest";

            // on creait une cookie qui va expirer dans 30 jours
            setcookie($nom_cookie, $ref_cookie, time() + 2592000);

            //on obtient la  valeur du cookie
            return $ref_cookie;
        }
        

        // si le cookie existe on renvoie sa valeur actuelle
        return $_COOKIE['cookieTest'];
    }

    /*public function visitCookie() {

        // Pour la table visit
        $currentPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $origine = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'local';
        $ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : '127.0.0.1';
      
      if(!empty($_GET['cookie']) && $_GET['cookie']=='ok'){
        // si le cookie cookieTest existe
        if (!empty($_COOKIE["cookieTest"])) {
          // on utilise la valeur du cookie cookieTest
          $cookieValue = $_COOKIE["cookieTest"];
          $this->saveOneVisit($ip, $origine, $currentPage, $cookieValue);
        }else{
            $cookieValue=$this->cookiiie();
            $this->saveOneVisit($ip, $origine, $currentPage, $cookieValue);
        }
        
      }
    }/** */
    public function visitCookie() {
        // Pour la table visit
        $currentPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $origine = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'local';
        $ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : '127.0.0.1';
      
        if(!empty($_GET['cookie']) && $_GET['cookie'] == 'ok') {
            // Vérifie si le cookie existe
            $cookieValue = !empty($_COOKIE["cookieTest"]) ? $_COOKIE["cookieTest"] : $this->cookiiie();

            // Enregistrez la visite avec les informations obtenues
            $this->saveOneVisit($ip, $origine, $currentPage, $cookieValue);
        }else {
            $cookieValue = !empty($_COOKIE["cookieTest"]) ? $_COOKIE["cookieTest"] : 'pas de cookie';
            $this->saveOneVisit($ip, $origine, $currentPage, $cookieValue);
        }
    }
}