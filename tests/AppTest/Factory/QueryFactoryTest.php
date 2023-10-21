<?php declare(strict_types=1);

namespace Bugebo\AppTest\Factory;

use Bugebo\App\Factory\QueryFactory;
use Bugebo\AppTest\Mock\Database\MockPDO;
use Bugebo\AppTest\Mock\MockContainer;
use Envms\FluentPDO\Query;
use PDO;
use PHPUnit\Framework\TestCase;

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
