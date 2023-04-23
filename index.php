<?php

declare(strict_types=1);

spl_autoload_register(function (string $name) {
    $name = str_replace(['\\', 'App/'], ['/', ''], $name);
    $path = "src/$name.php";
    require_once($path);
});

include_once('./src/utils/debug.php');
require_once('./config/config.php');

use App\Exception\appException;
use App\Exception\StorageException;
use App\Exception\ConfigurationException;
use App\Controller\AbstractController;
use App\Controller\NoteController;
use App\Request;



$request = new Request($_GET, $_POST, $_SERVER);

try {
    AbstractController::initConfiguration($configuration);
    $controller = new NoteController($request);
    $controller->run();
} catch (appException $e) {
    echo "<h1>Wystąpił błąd w aplikacji!</h1>";
    echo '<h3>' . $e->getMessage() . '</h3>';
} catch (\Throwable $e) {
    echo "<h1> Wystąpił błąd w aplikacji!</h1>";
    dump($e);
}
