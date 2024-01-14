<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Article>
 *
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public $int=0;
    public $int2=0;
    private $entityManager;
    
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
        $this->entityManager = $registry->getManager();
    }

    public function add(Article $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Article $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Trouve les trois derniers articles en fonction des trois dates les plus récentes pour une page spécifique.
     *
     * @param int $int Le nombre d'articles à récupérer
     * @param int $int2 L'ID de la page pour laquelle récupérer les articles
     * @return Article[]
     */
    public function findLatestArticles($int, $int2)
    {
    return $this->createQueryBuilder('a')
        ->andWhere('a.fkPage = :int2') //condition WHERE fkPage = :int2
        ->andWhere('a.active = 1') // condition WHERE active = 1
        ->setParameter('int2', $int2)
        ->orderBy('a.dateArticle', 'DESC')
        ->setMaxResults($int)
        ->getQuery()
        ->getResult();
    }

     /**
     * Recherche les articles avec la condition active=1 et lorsque le mot correspond à la recherche
     *
     * @param string $word
     * @return Article[]
     */
    public function findByActiveAndLikeWord($word): array
    {
        return $this->createQueryBuilder('a')
            ->select('a.textArticle', 'a.titleArticle, a.id')
            ->andWhere('a.textArticle LIKE :searchText')
            ->orWhere('a.titleArticle LIKE :searchText')
            ->andWhere('a.active = 1')//Il faut mettre cette condition à la  fin
            ->setParameter('searchText', '%' . $word . '%')
            ->getQuery()
            ->getResult();
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
    public function save($int)
    {
        
        
        /*Pour Doctrine "persist" signifie que l'objet sera enregistré par Doctrine et suivi pour les modifications. */
        $this->entityManager->persist($int);
        /*Pour Doctrine "flush" signifie que toutes les modifications en attente sont exécutées et les objets sont synchronisés avec la base de données. */
        $this->entityManager->flush();
    }

//    /**
//     * @return Article[] Returns an array of Article objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Article
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
