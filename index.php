<?php
require_once "utils/common.php";
require_once "views/nav.php";

$uri = getRootURI();

switch ($_SERVER['REQUEST_URI']) {

    case $uri . '':
    case  '/time-tracker/':
        require __DIR__ . '/views/index.php';
        break;

    case $uri . '/projects/list':
        require __DIR__ . '/controllers/project_list.php';
        break;

    case $uri . '/tasks/list':
        require __DIR__ . '/controllers/task_list.php';
        break;

    case $uri . '/projects/add':
        require __DIR__ . '/controllers/project.php';
        break;

    case $uri . '/tasks/add':
        require __DIR__ . '/controllers/task.php';
        break;

    case $uri . '/reports':
        require __DIR__ . '/controllers/reports.php';
        break;

    case preg_match('/^projects\/\?id=\d/', $_SERVER['REQUEST_URI']):
        require __DIR__ . '/controllers/project.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}