<?php

namespace PMAN\controllers;

//    require_once '../user.php';

    // this makes PHP_SESSION_ACTIVE active again
    require_once '../config.php';

    // require_once '../app/user.php';
    // require_once '../app/config.php';

//session_start();
                // $_SESSION['user']['id'] = 11;
                // $_SESSION['user']['fname'] = 's';
                // $_SESSION['user']['lname'] = 'edwards';
                // $_SESSION['user']['email'] = 'shardest9999@yahoo.com';
                // $_SESSION['user']['user_role'] = 1;

//    if (session_status() != PHP_SESSION_ACTIVE) {
    if (!isset($_SESSION['user']['id']) ||
        !isset($_SESSION['user']['fn']) ||
        !isset($_SESSION['user']['ln']) ||
        !isset($_SESSION['user']['agt']) ||
        $_SESSION['user']['agt'] != hash('sha512', $_SERVER['HTTP_USER_AGENT']) ||
        !isset($_SESSION['user']['uzr']) ||
        !isset($_SESSION['user']['rl'])) {
        echo "no session";
        header('Location: ../../public/index.php');
    } else {
        echo 'cat ' . $_SESSION['user']['uzr'] . ' cat';
           
        if ($_SESSION['user']['id'] !== '') {
            $user->pageUser();
        } else {
            header('Location: ../../public/index.php');
        }
        echo "session " . PHP_SESSION_ACTIVE;
    }

/*
    //if at least one session value is not present, redirect the user
    if (!isset($_SESSION['wri']) ||
        !isset($_SESSION['wrf']) ||
        !isset($_SESSION['wrr']) ||
        !($_SESSION['wrr'] == 0 || $_SESSION['wrr'] == 1 || $_SESSION['wrr'] == 9) ||
        !isset($_SESSION['agnt']) ||
        $_SESSION['agnt'] != sha1($_SERVER['HTTP_USER_AGENT'])) {

        absolute_urlgoto('index.php?nli');
        exit();
    }
 */
