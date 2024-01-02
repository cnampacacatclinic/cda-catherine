<?php

use App\Service\VisitService;
use App\Repository\VisitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use PHPUnit\Framework\TestCase;

class VisitServiceTest extends TestCase
{
    private $visitRepositoryMock;
    private $entityManagerMock;

    public function __construct()
    {
        parent::__construct();
        
        // On créait un mock pour l'objet EntityManagerInterface
        $this->entityManagerMock = $this->createMock(EntityManagerInterface::class);

    }

    public function testVisitCookie(VisitRepository $visitRepositoryMock,RequestStack $requestStackMock)
    {
        // on veut obtenir le mock pour retourner une valeur lors de l'appel à la méthode saveOneVisit
        $this->visitRepositoryMock->expects($this->once())
            ->method('saveOneVisit')
            ->willReturn('1, 127.0.0.1,/,2023-12-30 19:09:04,ref_49846546'); // La valeur attendue

        // On créait un objet VisitService
        $visitService = new VisitService($this->entityManagerMock, $visitRepositoryMock, $requestStackMock);

        // la methode à tester
        $visitService->cookiiie();

        // une assertions pour vérifier que la méthode saveOneVisit donne le résultat attentes
        $this->assertEquals('1, 127.0.0.1,/,2023-12-30 19:09:04,ref_49846546', $visitService->cookiiie()); // 'cookieTest' est la valeur attendue
    }
}
