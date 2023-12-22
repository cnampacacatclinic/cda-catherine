<?php
namespace App\Repository;

use App\Entity\Visit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface; // Added missing import

/**
 * @extends ServiceEntityRepository<Visit>
 *
 * @method Visit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Visit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Visit[]    findAll()
 * @method Visit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VisitRepository extends ServiceEntityRepository
{
    private $entityManager; // Fixed variable name

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $visitManager)
    {
        parent::__construct($registry, Visit::class);
        $this->entityManager = $visitManager;
    }

    public function saveVisit(string $ip, string $origine, string $currentPage, string $cookie): void
    {
        $visit = new Visit();
        $visit->setIp($ip);
        $visit->setOrigine($origine);
        $visit->setCurrentPage($currentPage);
        $visit->setCookie($cookie);

        $this->entityManager->persist($visit);
        $this->entityManager->flush();
    }

    public function add(Visit $visit, bool $flush = false): void
    {
        $this->getEntityManager()->persist($visit);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Visit $visit, bool $flush = false): void
    {
        $this->getEntityManager()->remove($visit);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    //Supprime au bout d'un mois
    public function deleteOldData()
    {
        $twoMonthsAgo = new \DateTime('-2 months');
        $this->getEntityManager()->createQueryBuilder() // Fixed variable name
            ->delete(Visit::class, 'v')
            ->where('v.dateVisit < :twoMonthsAgo')
            ->setParameter('twoMonthsAgo', $twoMonthsAgo)
            ->getQuery()
            ->execute();
    }

//    /**
//     * @return Visit[] Returns an array of Visit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Visit
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
