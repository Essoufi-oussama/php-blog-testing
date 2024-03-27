<?php
    $uri = parse_url($_SERVER['REQUEST_URI'])["path"];
    $routes= [
        '/' => 'controllers/index.php',
        '/php-blog-testing/' => 'controllers/index.php',
        '/php-blog-testing/details' => 'controllers/details.php'
    ];

    function routeToController($uri, $routes){
        if(array_key_exists($uri, $routes)){
            require $routes[$uri];
        } else{
            abort();
        }
    }

    function abort(){
        http_response_code(404);
        die();
    }

    routeToController($uri, $routes);
?>