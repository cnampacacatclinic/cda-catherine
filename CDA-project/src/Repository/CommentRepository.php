<?php

namespace App\Repository;
use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Comment>
 *
 * @method Comment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comment[]    findAll()
 * @method Comment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentRepository extends ServiceEntityRepository
{
    public $id=0;
    private $entityManager;
    
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comment::class);
        $this->entityManager = $registry->getManager();
    }

    public function add(Comment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Comment $entity, bool $flush = false): void
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

    // Méthode pour supprimer un élément par son fkArticle
    public function deleteByFkArticle(Article $id)
    {
        // L'EntityManager est une classe fournie par Doctrine. Elle gère les entités dans une application Symfony
        $entityManager = $this->getEntityManager();

        // Cherche grâce à l'fkArticle
        $comments = $this->findBy(['fkArticle' => $id]);

        // Si des éléments sont trouvés
        if ($comments) {
            foreach ($comments as $comment) {
                // On supprime chaque élément
                $entityManager->remove($comment);
            }
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
//     * @return Comment[] Returns an array of Comment objects
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

//    public function findOneBySomeField($value): ?Comment
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
