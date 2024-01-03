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
    private $visitService;

    public function setUp(): void
    {
        parent::setUp();

        // On créé un mock pour l'objet EntityManagerInterface
        $this->entityManagerMock = $this->createMock(EntityManagerInterface::class);
        // On créé un mock pour l'objet VisitRepository
        $this->visitRepositoryMock = $this->createMock(VisitRepository::class);

        // On créé une instance de VisitService en injectant les mocks
        $this->visitService = new VisitService($this->entityManagerMock, $this->visitRepositoryMock, $this->createMock(RequestStack::class));
    }

    public function testFindAllVisits()
    {
        // Définir le comportement du mock pour findAll
        $expectedVisits = [/* mettez ici des objets Visit fictifs pour simuler le résultat de la base de données */];
        $this->visitRepositoryMock->expects($this->once())
            ->method('findAll')
            ->willReturn($expectedVisits);

        // Appeler la méthode à tester
        $result = $this->visitService->findAllVisits();

        // Assertions pour vérifier que le résultat de la méthode correspond à ce que retourne le mock du repository
        $this->assertEquals($expectedVisits, $result);
    }
}
