<?php

namespace App\Repository;

use App\Entity\Phone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Phone>
 *
 * @method Phone|null find($id, $lockMode = null, $lockVersion = null)
 * @method Phone|null findOneBy(array $criteria, array $orderBy = null)
 * @method Phone[]    findAll()
 * @method Phone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhoneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Phone::class);
    }

    public function add(Phone $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Phone $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // Méthode pour supprimer un élément par son ID
    public function delete($id)
    {
        
        // L'EntityManager est une classe fournie par Doctrine. Elle gère les entités dans une application Symfony
        $entityManager = $this->getEntityManager();

        // Cherche grâce à l' ID
        $e = $this->find($id);

        // Si l'élément est trouvé
        if ($e) {
            // On supprime
            $entityManager->remove($e);

            // Applique les changements à la base de données
            $entityManager->flush();

            // Retourne true si la suppression a réussi
            return true;
        }

        // Retourne false si l'élément n'a pas été trouvé
        return false;
    }
//    /**
//     * @return Phone[] Returns an array of Phone objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Phone
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function findPhonesByCenterId($centerId)
    {
        return $this->createQueryBuilder('phone')
            ->select('phone.phoneNumber', 'fkType.nameType as typeName')
            ->innerJoin('phone.center', 'center')
            ->innerJoin('phone.fkType', 'fkType')
            ->andWhere('center.id = :centerId')
            ->setParameter('centerId', $centerId)
            ->orderBy('typeName')
            ->getQuery()
            ->getResult();
    }

    public function findPhonesByCenter2()
    {
        return $this->createQueryBuilder('phone')
            ->select('phone.phoneNumber', 'fkType.nameType as typeName')
            ->innerJoin('phone.center', 'center')
            ->innerJoin('phone.fkType', 'fkType')
            ->andWhere('center.id = :centerId')
            ->orderBy('typeName')
            ->getQuery()
            ->getResult();
    }
    
}