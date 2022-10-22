<?php declare(strict_types=1);

namespace App\Tests\Database;

use App\Database\PDOFactory;
use League\Container\Container;
use PDO;
use PDOException;
use PHPUnit\Framework\TestCase;

class PDOFactoryTest extends TestCase
{

    public function testThrowPDOException(): void
    {
        $this->expectException(PDOException::class);

        $testData = [
            'database' => [
                'user' => 'testUser',
                'password' => 'testPassword',
                'host' => 'https//example.com',
                'port' => 3306,
                'name' => 'example_db',
                'error' => PDO::ERRMODE_EXCEPTION,

            ],
        ];

        $container = new Container();
        $container->add('config', $testData);

        $pdo = (new PDOFactory())($container);

        $this->assertInstanceOf(PDO::class, $pdo);
    }
}
