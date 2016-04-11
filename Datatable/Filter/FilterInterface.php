<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\DatatablesBundle\Datatable\Filter;

/**
 * Interface FilterInterface
 *
 * @package Sg\DatatablesBundle\Datatable\Filter
 */
interface FilterInterface
{
    /**
     * Get template.
     *
     * @return string
     */
    public function getTemplate();

    /**
     * Get alias.
     *
     * @return string
     */
    public function getAlias();
}