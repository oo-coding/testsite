<?php

namespace PMAN\controllers;

//    require_once '../user.php';
     require_once '../config.php';

     $user->logout();

     header('location: ../../public/index.php');
