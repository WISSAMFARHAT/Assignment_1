<?php

namespace App\Repository;

use App\Entity\StudentsGrade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StudentsGrade|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudentsGrade|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudentsGrade[]    findAll()
 * @method StudentsGrade[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentsGradeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudentsGrade::class);
    }

    // /**
    //  * @return StudentsGrade[] Returns an array of StudentsGrade objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StudentsGrade
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
