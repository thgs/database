<?php

declare(strict_types=1);

namespace Cycle\Database\Tests\Functional\Driver\SQLServer\Schema;

// phpcs:ignore
use Cycle\Database\Tests\Functional\Driver\Common\Schema\ConsistencyTest as CommonClass;

/**
 * @group driver
 * @group driver-sqlserver
 */
class ConsistencyTest extends CommonClass
{
    public const DRIVER = 'sqlserver';
}
