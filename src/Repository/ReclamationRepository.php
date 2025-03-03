<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    /**
     * @return Reclamation[] Returns an array of Reclamation objects
    */
    public function findByExampleField($value): array
    {
       return $this->createQueryBuilder('r')
            ->andWhere('r.user = :val')
            ->setParameter('val', $value)
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    

//    public function findOneBySomeField($value): ?Reclamation
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
        public function findById($id){
            return $this->createQueryBuilder('r')
                        ->andWhere('r.user = :val')
                        ->setParameter('val', $id)
                        ->getQuery()
                        ->getOneOrNullResult()
                   ;  
        }
}
