<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\DoctrineORMAdminBundle\Datagrid;

use Doctrine\ORM\Query;
use Sonata\AdminBundle\Datagrid\Pager as BasePager;
use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;

/**
 * Doctrine pager class.
 *
 * @author Jonathan H. Wage <jonwage@gmail.com>
 *
 * @final since sonata-project/doctrine-orm-admin-bundle 3.24
 */
class Pager extends BasePager
{
    /**
     * Use separator in CONCAT() function for correct determinate similar records.
     */
    public const CONCAT_SEPARATOR = '|';

    /**
     * NEXT_MAJOR: remove this property.
     *
     * @deprecated since sonata-project/doctrine-orm-admin-bundle 2.4 and will be removed in 4.0
     */
    protected $queryBuilder = null;

    public function computeNbResult(): int
    {
        $countQuery = clone $this->getQuery();

        if (\count($this->getParameters()) > 0) {
            $countQuery->setParameters($this->getParameters());
        }

        if (\count($this->getCountColumn()) > 1) {
            $this->countCompositePrimaryKey($countQuery);
        } else {
            $this->countSinglePrimaryKey($countQuery);
        }

        return array_sum(array_column(
            $countQuery->resetDQLPart('orderBy')->getQuery()->getResult(Query::HYDRATE_SCALAR),
            'cnt'
        ));
    }
    public function countResults($hydrationMode = Query::HYDRATE_OBJECT): int
    {
        $countQuery = clone $this->getQuery();

        if (\count($this->getParameters()) > 0) {
            $countQuery->setParameters($this->getParameters());
        }

        if (\count($this->getCountColumn()) > 1) {
            $this->countCompositePrimaryKey($countQuery);
        } else {
            $this->countSinglePrimaryKey($countQuery);
        }

        return array_sum(array_column(
            $countQuery->resetDQLPart('orderBy')->getQuery()->getResult(Query::HYDRATE_SCALAR),
            'cnt'
        ));
        return $countQuery;
    }

    public function getResults($hydrationMode = Query::HYDRATE_OBJECT): array
    {
        return $this->getQuery()->execute([], $hydrationMode);
    }

    public function getQuery(): ProxyQueryInterface
    {
        return $this->query;
    }

    public function init(): void
    {
        $this->resetIterator();

        $this->setNbResults($this->computeNbResult());

        $this->getQuery()->setFirstResult(null);
        $this->getQuery()->setMaxResults(null);

        if (\count($this->getParameters()) > 0) {
            $this->getQuery()->setParameters($this->getParameters());
        }

        if (0 === $this->getPage() || 0 === $this->getMaxPerPage() || 0 === $this->getNbResults()) {
            $this->setLastPage(0);
        } else {
            $offset = ($this->getPage() - 1) * $this->getMaxPerPage();

            $this->setLastPage((int) ceil($this->getNbResults() / $this->getMaxPerPage()));

            $this->getQuery()->setFirstResult($offset);
            $this->getQuery()->setMaxResults($this->getMaxPerPage());
        }
    }

    private function countCompositePrimaryKey(ProxyQueryInterface $countQuery): void
    {
        $rootAliases = current($countQuery->getRootAliases());
        $countQuery->setParameter('concat_separator', self::CONCAT_SEPARATOR);

        $columns = $rootAliases.'.'.implode(', :concat_separator, '.$rootAliases.'.', $this->getCountColumn());

        $countQuery->select(sprintf(
            'count(%s concat(%s)) as cnt',
            $countQuery instanceof ProxyQuery && !$countQuery->isDistinct() ? null : 'DISTINCT',
            $columns
        ));
    }

    private function countSinglePrimaryKey(ProxyQueryInterface $countQuery): void
    {
        $countQuery->select(sprintf(
            'count(%s %s.%s) as cnt',
            $countQuery instanceof ProxyQuery && !$countQuery->isDistinct() ? null : 'DISTINCT',
            current($countQuery->getRootAliases()),
            current($this->getCountColumn())
        ));
    }
}