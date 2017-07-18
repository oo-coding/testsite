<?php

    //here is the BOOTSTRAP file!!
    //loads your project environment
    //configs
    //PSR-4 autoloading
 
    //require_once '../vendor/autoload.php';
    //require_once '../app/config.php';
    require_once __DIR__ . '\..\vendor\autoload.php';
    require_once __DIR__ . '\..\app\config.php';

    $router = new AltoRouter();
    require_once __DIR__ . '\..\app\routes.php';

    //require_once '../app/user.php';

//use PMAN\User as User;
    
//    echo __DIR__;



    // $user->indexHead();
    // $user->indexTop();
    // $user->formLogin();
    // $user->indexFooter();
