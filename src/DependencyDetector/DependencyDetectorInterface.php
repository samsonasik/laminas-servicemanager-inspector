<?php

declare(strict_types=1);

/**
 * @see       https://github.com/laminas/laminas-servicemanager for the canonical source repository
 * @copyright https://github.com/laminas/laminas-servicemanager/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-servicemanager/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\PsalmPlugin\DependencyDetector;

use Laminas\PsalmPlugin\Dependency;

interface DependencyDetectorInterface
{
    /**
     * @param string $serviceName
     * @return Dependency[]
     */
    public function detect(string $serviceName): array;

    /**
     * @param string $serviceName
     * @return bool
     */
    public function canDetect(string $serviceName): bool;
}
