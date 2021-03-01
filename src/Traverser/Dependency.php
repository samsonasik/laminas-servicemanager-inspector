<?php

declare(strict_types=1);

/**
 * @see       https://github.com/laminas/laminas-servicemanager-inspector for the canonical source repository
 * @copyright https://github.com/laminas/laminas-servicemanager-inspector/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-servicemanager-inspector/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ServiceManager\Inspector\Traverser;

final class Dependency
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $isOptional;

    /**
     * @param string $name
     * @param bool $isOptional
     */
    public function __construct(string $name, bool $isOptional = false)
    {
        $this->name = $name;
        $this->isOptional = $isOptional;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isOptional(): bool
    {
        return $this->isOptional;
    }
}
