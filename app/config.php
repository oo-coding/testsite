<?php

//don't think I need this?
//namespace PMAN;

require_once __DIR__ . '\..\vendor\autoload.php';

use PMAN\User as User;

session_start();

//require_once __DIR__  . '/../../../htother/testing.htm';

//define('USER_FILE',     'user.php');
define('USER_FILE', '../app/controllers/user.php');
define('LOGIN_FILE', '../app/controllers/login.php');

//template files
define('INDEX_HEAD', '../app/views/indexhead.htm');
define('INDEX_TOP', '../app/views/indextop.htm');
define('LOGIN_FORM', '../app/views/loginform.php');
define('INDEX_FOOTER', '../app/views/indexfooter.htm');
define('USER_PAGE', __DIR__ . '../views/userpage.php');//define('USER_PAGE',     '../app/views/userpage.php');

//error configuration
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once 'pman_defs.php';
//require_once 'C:/Apache24/htdocs/pman/pman_defs.php';
require_once __DIR__  . '/../../../htother/pman_defs.php';

$pdo = new \PDO(DB_CON, DB_USR, DB_PWD);
$user = new User();
$user->dbConnect(DB_CON, DB_USR, DB_PWD);



//a way to store environment variables in a .env file (via composer require /vlucas/phpdotenv)
//Dotenv::load(__DIR__ . "/../");

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => DB_DRV,
    'host' => DB_HST,
    'database' => DB_DB,
    'username' => DB_USR,
    'password' => DB_PWD,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
