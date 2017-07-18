<?php
// shardest9999@yahoo.com

    //point to bootstrap/init file
    require_once '../app/init.php';


/*
Home page
    -- slider
        -- some highlights of products/services
Registration page
    -- allow users to register
    -- collect 
        -- first name, last name, email, password
Login page
    -- allow users to login with email/password
About page
    -- some info about the company
    -- display infomration from the database
Testimonials page
    -- display customer testimonials
    -- allow logged in users to post testimonials
    -- testimonial consists of title & text
*/




/*
//basic routing - but a little better

//put this in init.php
//    $router = new AltoRouter();

    // need slash for "root dir", routes don't need to be same as filenames
    $router->map('GET', '/pman/public/', function() {
        include(__DIR__ . "/../app/views/home.php");
    });
    $router->map('GET', '/pman/public/yellow-sub', function() {
        include(__DIR__ . "/../app/views/apple.php");
    });
    $router->map('POST', '/pman/public/doapple', function() {
        include(__DIR__ . "/../app/views/doapple.php");
    });
    $router->map('GET', '/pman/public/banana', function() {
        include(__DIR__ . "/../app/views/banana.php");
    });

    $match = $router->match();

//    list($controller, $method) = explode("@", $match['target']);

    if ($match && is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    }
    else {
        // no matching route found!
        echo $_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found';
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);

        http_response_code(404);
        echo http_response_code() . 'cat';
    }

    //echo "<pre>";
    //print_r($_SERVER);
*/


/*
//basic routing
    #$url = $_SERVER['REQUEST_URI'];
    #for now, use QUERY_STRING
    #$url = explode('/',$_SERVER['QUERY_STRING']);
    // echo '<br/>' . '$_SERVER[\'REQUEST_URI\'] :     ' . $_SERVER['REQUEST_URI'];
    // echo '<br/>' . '$_SERVER[\'QUERY_STRING\'] : ' . $_SERVER['QUERY_STRING'];
    // $url = explode('/',$_SERVER['QUERY_STRING']);
    // var_dump($url);

    // echo "<pre>";
    // print_r($_SERVER);
    // echo '<br/>' . '$_SERVER[\'REQUEST_URI\'] :     ' . $_SERVER['REQUEST_URI'];
    // echo '<br/>' . '$_SERVER[\'HTTP_USER_AGENT\'] : ' . $_SERVER['HTTP_USER_AGENT'];

    $url = explode('/',$_SERVER['REQUEST_URI']);
    var_dump($url);

    // simple routing
    if ($url[3] == "") {
        // display a home page
        include(__DIR__ . "/../app/views/home.php");
        exit();
    }
    else if ($url[3] == "apple") {
        // display a register page
        include(__DIR__ . "/../app/views/apple.php");
        exit();
    }
    else if ($url[3] == "banana") {
        // display a login page
        include(__DIR__ . "/../app/views/banana.php");
        exit();

    }
*/
