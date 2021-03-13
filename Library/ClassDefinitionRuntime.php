<?php

/**
 * This file is part of the Zephir.
 *
 * (c) Phalcon Team <team@zephir-lang.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Zephir;

/**
 * Class Definition in Runtime
 *
 * Represents a class/interface that only exists in runtime.
 */
final class ClassDefinitionRuntime extends AbstractClassDefinition
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
