<?php

declare(strict_types=1);

/**
 * @see       https://github.com/laminas/laminas-servicemanager for the canonical source repository
 * @copyright https://github.com/laminas/laminas-servicemanager/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-servicemanager/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ServiceManager\Inspector\Exception;

use Psalm\CodeLocation;
use Psalm\Issue\PluginIssue;

interface IssuableInterface
{
    public function toIssue(CodeLocation $codeLocation): PluginIssue;
}
