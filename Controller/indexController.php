<?php
namespace Controller;
require_once __DIR__.'/FormHandler.php';

$FormHandler = new FormHandler();

if (isset($_POST['method'])) {
    switch ($_POST['method']) {
        case 'store':
            $FormHandler->store($_POST);
            break;
        case 'store':
            // $FormHandler->;
            break;
        case 'store':
            // $FormHandler->;
            break;
        
        default:
        echo '<div style="height: 73.1vh;">
        <h1 style="position: relative;text-align: center;top: 40%;">404 | Not Found</h1>
        </div>';
            break;
    }
} else {
    header('location:error');
}
