<?php 
namespace PMAN\controllers;

use PMAN\Validator as Validator;
//use Respect\Validation\Validator as Validator;

class RegisterController extends BaseController
{

    public function getShowRegisterPage()
    {
        //include(__DIR__ . "/../views/h_register.html");
        echo $this->twig->render('h_register.html');        
    }

    public function postShowRegisterPage()
    {
        //capture user info, validate data
        $validation_data = [
            'first_name' => 'min:3',
            'last_name' => 'min:3',
            'tmpmail' => 'email|equalTo:vermail',
            'vermail' => 'email',
            'tmppwd' => 'min:3|equalTo:verpwd',
        ];

        $validator = new Validator;
        $errors = $validator->isValid($validation_data);
        // echo "<pre>";
        // print_r($errors);
        // echo '</pre>';

        if (sizeof($errors) > 0) {
            //$_SESSION['msg'] = $errors;
            //header ("Location: /pman/public/register");
            echo $this->twig->render('h_register.html', ['errors' => $errors]);
            exit();
        }

        //exit;

        // }
        // else {
        //     die("Data not valid");
        // }
      
        //if validation fails, go back to register page and display error Message
        //save this data into a database
        $user = new Tmp;
        $user->first_name = $_REQUEST['first_name'];
        $user->last_name = $_REQUEST['last_name'];
        $user->tmpmail = $_REQUEST['tmpmail'];
        $user->tmppwd = password_hash($_REQUEST['tmppwd'], PASSWORD_DEFAULT);
        $user->save();
        // var_dump($user);

        // var_dump($user);
        // echo '<br/>';
        // echo "<pre>";
        // print_r($user);
        // //echo '<br/>';
        // echo '</pre>';
        //echo $user->tmpmail;

        echo "Posted!" . '<br/>';
        //include(__DIR__ . "/../views/register.php");
    }
}

