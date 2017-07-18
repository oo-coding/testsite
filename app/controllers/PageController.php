<?php 
namespace PMAN\controllers;

use PMAN\models\Tmp as Tmp;

class PageController extends BaseController
{

    public function getShowHomePage()
    {
        //include(__DIR__ . "/../app/views/home.php");
        //require_once __DIR__ . '\..\views\home.php';
        echo $this->twig->render('h_home.html');

    }

    public function getShowBearPage()
    {
        //include(__DIR__ . "/../views/h_bear.html");
        echo $this->twig->render('h_bear.html');        
    }

    // public function getShowApplePage()
    // {
    // 	include(__DIR__ . "/../views/apple.php");
    // }

    //temporary
    public function getTestDB()
    {
        //echo "shelly";
        $user = Tmp::find(2);
        echo "User's name is " . $user->first_name . ' ' . $user->last_name . '.';
    }

//     //temporary
//     public function getTestDB() {
//         try {
//             $pdo = new \PDO(DB_CON, DB_USR, DB_PWD);

//         }catch(PDOException $e) {
//             die('Connection did not work out!' . $e->getMessage());
//         }
//         $first_name = "";
//         $tmp = 'mjones';
//         $stmt = $pdo->prepare('SELECT * FROM uzrs');
// //            $stmt = $pdo->prepare('SELECT first_name, last_name FROM uzrs WHERE uzr = :uzr limit 1');
// //            $stmt->bindParam(':uzr', $tmp);
//         $stmt->execute();
// //            $stmt->execute([$email]);
           
// //            $rows = $stmt->fetch();
//         $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

//         foreach ($rows as $row) {
//              $first_name = $row['first_name'];
// //                echo $row;
// //                echo $rows['first_name'];
//         }
//         echo "it works! first name is " . $first_name;
//     }
}






        //capture user info, validate data
        // $errors = [];

        // // if (Validator::numeric()->validate($_REQUEST['first_name']) == false) {
        // //     $errors[] = "First name must be numeric!";
        // // }
        // // if (Validator::numeric()->validate($_REQUEST['last_name']) == false) {
        // //     $errors[] = "Last name must be numeric!";
        // // }
        // if (Validator::stringType()->length(3, null)->validate($_REQUEST['first_name']) == false) {
        //     $errors[] = "First name must be at least 3 characters long!";
        // }
        // if (Validator::stringType()->length(3, null)->validate($_REQUEST['last_name']) == false) {
        //     $errors[] = "Last name must be at least 3 characters long!";
        // }
        // if (Validator::email()->validate($_REQUEST['tmpmail']) == false) {
        //     $errors[] = "You must enter a valid email address!!";
        // }
        // if (Validator::equals($_REQUEST['tmpmail'])->validate($_REQUEST['vermail']) == false) {
        //     $errors[] = "Email and Verify email do not match!";
        // }
        // if (Validator::stringType()->length(3, null)->validate($_REQUEST['tmppwd']) == false) {
        //     $errors[] = "Password must be at least 3 characters long!";
        // }
        // if (Validator::equals($_REQUEST['tmpmail'])->validate($_REQUEST['verpwd']) == false) {
        //     $errors[] = "Password and Verify password do not match!";
        // }
        // echo "<pre>";
        // print_r($errors);
        // echo '</pre>';
        // //print_r($errors);
        // //var_dump($result);
        // exit;
