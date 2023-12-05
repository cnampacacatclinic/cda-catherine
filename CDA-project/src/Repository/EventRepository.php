<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @extends ServiceEntityRepository<Event>
 *
 * @method Event|null find($id, $lockMode = null, $lockVersion = null)
 * @method Event|null findOneBy(array $criteria, array $orderBy = null)
 * @method Event[]    findAll()
 * @method Event[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventRepository extends ServiceEntityRepository
{
    public $int=0;
    private $entityManager;
    
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
        $this->entityManager = $registry->getManager();
    }

    public function add(Event $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Event $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Recherche les événements avec la condition active=1 et lorsque le mot correspond à la recherche
     *
        * @param string $word
     * @return Event[] Returns an array of Event objects
     */
    public function findByActiveAndLikeWord($word): array
    {
        return $this->createQueryBuilder('e')
            ->select('e.descriptionEvent', 'e.titleEvent, e.id')
            ->andWhere('e.descriptionEvent LIKE :searchText')
            ->orWhere('e.titleEvent LIKE :searchText')
            ->andWhere('e.active = 1')
            ->setParameter('searchText', '%' . $word . '%')
            ->getQuery()
            ->getResult();
    }
    
    /*La fonction save() n'existe pas par defaut j'ai du l'ajouter*/
    public function save($int)
    {
        /*Pour Doctrine "persist" signifie que l'objet sera enregistré par Doctrine et suivi pour les modifications. */
        $this->entityManager->persist($int);
        /*Pour Doctrine "flush" signifie que toutes les modifications en attente sont exécutées et les objets sont synchronisés avec la base de données. */
        $this->entityManager->flush();
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
//     * @return Event[] Returns an array of Event objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Event
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
