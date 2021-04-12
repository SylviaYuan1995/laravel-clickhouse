<?php

declare(strict_types=1);

namespace Sylvia\LaravelClickHouse\Tests\Database;

use PHPUnit\Framework\TestCase;
use Sylvia\LaravelClickHouse\Database\Connection;
use Sylvia\LaravelClickHouse\Database\Query\Builder;

class ConnectionTest extends TestCase
{
    public function testQuery()
    {
        $connection = new Connection(['host' => 'localhost']);

        $this->assertInstanceOf(Builder::class, $connection->query());
    }
}
