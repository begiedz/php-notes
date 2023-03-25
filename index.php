<?php
declare(strict_types=1);
namespace App;

/* 
include
include_once
require
require_once
*/
include_once('./src/View.php');
include_once('./src/utils/debug.php');

// dump('test');
// dump('=== test 2 ===');

$action = $_GET['action'] ?? null;

$view = new View();
$view->render($action);

?>
