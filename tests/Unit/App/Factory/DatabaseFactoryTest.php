<?php declare(strict_types=1);

namespace Bugebo\Test\Unit\App\Factory;

use Bugebo\App\Factory\DatabaseFactory;
use PDO;
use PDOException;
use PHPUnit\Framework\TestCase;
use Bugebo\Test\Unit\Mock\MockContainer;

class DatabaseFactoryTest extends TestCase
{
    public function testThrowPDOException(): void
    {
        $this->expectException(PDOException::class);

        $config = [
            'database' => [
                'user' => 'testUser',
                'password' => 'testPassword',
                'host' => 'https//example.com',
                'port' => 3306,
                'dbname' => 'example_db',
                'error' => PDO::ERRMODE_EXCEPTION,

            ],
        ];

        $container = new MockContainer();
        $container->add('config', $config);

        $pdo = (new DatabaseFactory())($container);

        $this->assertInstanceOf(PDO::class, $pdo);
    }
}
