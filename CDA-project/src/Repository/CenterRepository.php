<?php

namespace App\Repository;

use App\Entity\Center;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Center>
 *
 * @method Center|null find($id, $lockMode = null, $lockVersion = null)
 * @method Center|null findOneBy(array $criteria, array $orderBy = null)
 * @method Center[]    findAll()
 * @method Center[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CenterRepository extends ServiceEntityRepository
{
    private $entityManager;
    
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Center::class);
        $this->entityManager = $registry->getManager();
    }

    public function add(Center $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Center $entity, bool $flush = false): void
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
   
     /*La fonction save() n'existe pas par defaut j'ai du l'ajouter*/
     public function save($id)
     {
         /*Pour Doctrine "persist" signifie que l'objet sera enregistré par Doctrine et suivi pour les modifications. */
         $this->entityManager->persist($id);
         /*Pour Doctrine "flush" signifie que toutes les modifications en attente sont exécutées et les objets sont synchronisés avec la base de données. */
         $this->entityManager->flush();
     }

//    /**
//     * @return Center[] Returns an array of Center objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Center
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
