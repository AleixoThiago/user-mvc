<?php
    require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

    use App\Controllers\HomeController;
    
    $controller = new HomeController;
    
    if (METHOD === 'GET') {
        echo $controller->index();
    }