<?php 

$router->map('GET', '/pman/public/',     'PMAN\controllers\PageController@getShowHomePage', 'home');
$router->map('GET', '/pman/public/register', 'PMAN\controllers\RegisterController@getShowRegisterPage', 'register');
$router->map('POST', '/pman/public/register', 'PMAN\controllers\RegisterController@postShowRegisterPage', 'register_post');
$router->map('GET', '/pman/public/bear', 'PMAN\controllers\PageController@getShowBearPage', 'bear');
$router->map('GET', '/pman/public/testdb', 'PMAN\controllers\PageController@getTestDB', 'testdb');

// $router->map('GET', '/pman/public/', 'PageController@getShowHomePage', 'home');
// $router->map('GET', '/pman/public/register', 'PageController@getShowRegisterPage', 'register');
// $router->map('POST', '/pman/public/register', 'PageController@postShowRegisterPage', 'register_post');
// $router->map('GET', '/pman/public/bear', 'PageController@getShowBearPage', 'bear');
// $router->map('GET', '/pman/public/testdb', 'PageController@getTestDB', 'testdb');



//Introduction to Modern Programming with PHP by Trevor Sawler - sections 41, 42, 43

//better routing
//$router = new AltoRouter();
//include(__DIR__ . "/../app/routes.php");
$match = $router->match();
if ($match) {
    list($controller, $method) = explode("@", $match['target']);

    //var_dump(list($controller, $method));
    // var_dump($match['target']);
    // var_dump($match['params']);
    // var_dump($match['name']);
    /*
        "autoload": {
            "psr-4": {
                "PMAN\\" : "app/"
            },
            "classmap": ["app/controllers"]
        }, 
    */

     // this line below should not be in index.php
     $controller = $controller;

//     $controller = "PMAN\\controllers\\" . $controller;
     
    if (is_callable(array($controller, $method))) {
        //echo "going to $controller -> $method";
        $object = new $controller();
        call_user_func_array(array($object, $method), array($match['params']));
    } else {
        // no matching route found!
        // header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        echo "Cannot find $controller -> $method";
        exit();
    }
} else { //doesn't match
    //var_dump($router->match());
    //echo '<br/>' . '$_SERVER[\'REQUEST_URI\'] :     ' . $_SERVER['REQUEST_URI'];
    echo '<br/>' . substr($_SERVER['QUERY_STRING'], 4) . ' is not validvalidvalid';
}

// use PMAN\controllers\PageController as PageController;
// $pc = new PageController();
// $pc->getShowHomePage();
// $a = "apple";
// $b = "bear";
// echo "apple" . $controller;
// echo "<br/>";
// echo $controller . "<br/>";
// $controller = "PMAN\\controllers\\" . $controller;
// echo $method . "<br/>"
//$pc2 = new $controller();
//$pc2->$method();
