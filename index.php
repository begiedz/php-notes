<?php
declare(strict_types=1);
namespace App;

include_once('./src/View.php');
include_once('./src/utils/debug.php');

// dump('test');
// dump('=== test 2 ===');

const DEFAULT_ACTION = 'list';

$action = $_GET['action'] ?? DEFAULT_ACTION;

$viewParams = [];

if ($action === 'create') {
    $page = 'create';
    $viewParams['resultCreate'] = 'Udało się dodać notatkę!';
} else {
    $page = 'list';
    $viewParams['resultList'] = 'Wyświetlamy listę notatek!';
}

$view = new View();
$view->render($page, $viewParams);

?>
