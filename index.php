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
    $created = false;
    if (!empty($_POST)) {
        $viewParams = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        ];
        $created = true;
    }
    $viewParams['created'] = $created;
} else {
    $page = 'list';

}

$view = new View();
$view->render($page, $viewParams);

?>
