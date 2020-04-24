<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $page = $_SERVER['REQUEST_URI'];
    require_once __DIR__ . '/../includes/navbar.php';
    switch ($page) {
        case '/':
            include_once __DIR__ . '/../views/index.php';
            break;

        default:
            echo '<div style="height: 73.1vh;">
        <h1 style="position: relative;text-align: center;top: 40%;">404 | Not Found</h1>
        </div>';
            break;
    }
    require_once __DIR__ . '/../includes/footer.php';
} else {
    $page = $_SERVER['REQUEST_URI'];
    switch ($page) {
        case '/':
            include_once __DIR__ . '/../Controller/indexController.php';
            break;

        default:
            echo '<div style="height: 73.1vh;">
        <h1 style="position: relative;text-align: center;top: 40%;">404 | Not Found</h1>
        </div>';
            break;
    }
    require_once __DIR__ . '/../includes/footer.php';
}
