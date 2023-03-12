<?php
declare(strict_types=1);
namespace App;

/* 
include
include_once
require
require_once
*/



include_once('./src/utils/debug.php');



dump('test');
dump('=== test 2 ===');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = null;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header> Moje notatki </header>
    <main>
        <nav>
            <ul>
                <li><a href="/">Lista notatek</a></li>
                <li><a href="/?action=create">Nowa notatka</a></li>
            </ul>
        </nav>

        <article>
            <?php if ($action === 'create') : ?>
                <h3>Nowa notatka</h3>
            <?php else : ?>
                <h3>Lista notatek</h3>
            <?php endif; ?>
        </article>
        <main>
   
</body>
</html>