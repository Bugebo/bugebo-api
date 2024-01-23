<?php declare(strict_types=1);

namespace Bugebo\Test\Unit\App\Factory;

use Bugebo\App\Factory\QueryFactory;
use Envms\FluentPDO\Query;
use PDO;
use PHPUnit\Framework\TestCase;
use Bugebo\Test\Unit\Mock\Database\MockPDO;
use Bugebo\Test\Unit\Mock\MockContainer;

class QueryFactoryTest extends TestCase
{
    public function testCanCreateQueryInstance(): void
    {
        $container = new MockContainer();
        $container->add(PDO::class, new MockPDO());

        $query = (new QueryFactory())($container);

        $this->assertInstanceOf(Query::class, $query);
    }
}
