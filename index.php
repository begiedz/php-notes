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

// dump('test');
// dump('=== test 2 ===');

$action = $_GET['action'] ?? null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Notes app</title>
</head>
<body>
    <header>
        <h1> Moje notatki </h1> 
    </header>
    <main>
        <nav>
            <ul>
                <li>
                    <a href="/">Lista notatek</a>
                </li>
                <li>
                    <a href="/?action=create">Nowa notatka</a>
                </li>
            </ul>
        </nav>

        <article>
            <?php if ($action === 'create') : ?>
                <h3>Nowa notatka</h3>
                <?php echo htmlentities($action) ?>
            <?php else : ?>
                <h3>Lista notatek</h3>
                <?php echo htmlentities($action ?? '') ?>
            <?php endif; ?>
        </article>
        <main>

        <footer>Stopka</footer>
   
</body>
</html>