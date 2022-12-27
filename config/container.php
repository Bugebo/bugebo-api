<?php declare(strict_types=1);

use App\Database\PDOFactory;
use Envms\FluentPDO\Query;
use League\Container\Container;

return function (Container $container) {
    $container->add(Container::class, $container);

    $container->add(PDO::class, function ($container) {
        return (new PDOFactory)($container);
    });

    $container->add(Query::class)
        ->addArgument(PDO::class);
};
