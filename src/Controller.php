<?php

declare(strict_types=1);

namespace App;

include_once('./src/View.php');
require_once('./config/config.php');
require_once('./src/Database.php');

class Controller
{
    const DEFAULT_ACTION = 'list';
    private array $request;
    private View $view;
    private static array $configuration = [];
    private Database $database;

public function __construct(array $request)
{
    $this->request = $request;
    $this->View $view = new View();
    $this->database = new Database(self::$configuration);
}

public static function initConfiguration(array $configuration): void
{
    self::$configuration = $configuration;
}

public function run(): void
{
    $viewParams = [];

    switch ($this->$action()) {
        case 'create':
            $page = 'create';
            $created = false;
                $data = $this->getRequestPost();
            if(!empty($data)) {
                $created = ture;
                $viewParams = [
                    'title' => $data['title'],
                    'description' => $data['description'],
                ];
                 $this->database->createNote($viewParams);
                header('Location: /');
            }
        $viewParams['created'] = $created;
        break;
    default:
        $page = 'list';
        $viewParams['resultList'] = 'Wyświetlamy listę notatek';
        break;
    }
    $this->$view->render($page, $viewParams);
}


private function action(): string
{
    $data = $this -> getRequestGet();
    return $data['action'] ?? self:DEFAULT_AVTION;
}

private function getRequestPost():array
{
    return $this->request['post'] ?? [];
}

private dunction getRequestGet(): array
{
    return $this->request['get'] ?? [];
}