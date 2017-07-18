<?php
/**
* Secure login user class.
*/

namespace PMAN;

class User
{
    /** @var object $pdo Copy of PDO connection */
    private $pdo;
    /** @var object of the logged in user */
    private $user;
    /** @var string error msg */
    private $msg;
    /** @var int number of permitted wrong login attemps */
    private $permitedAttemps = 5;

    /**
    * Connection init function
    * @param string $DB_CON DB connection string.
    * @param string $user DB user.
    * @param string $pass DB password.
    *
    * @return bool Returns connection success.
    */
    public function dbConnect($DB_CON, $user, $pass)
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            try {
                $pdo = new \PDO($DB_CON, $user, $pass);
                $this->pdo = $pdo;
                return true;
            } catch (PDOException $e) {
                $this->msg = 'Connection did not work out!';
                return false;
            }
        } else {
            $this->msg = 'Session did not start.';
            return false;
        }
    }

    /**
    * Return the logged in user.
    * @return user array data
    */
    public function getUser()
    {
        return $this->user;
    }

    /**
    * Login function
    * @param string $email User email.
    * @param string $password User password.
    *
    * @return bool Returns login success.
    */
    public function login($email, $password)
    {
        if (is_null($this->pdo)) {
            $this->msg = 'Connection did not work out!';
            return false;
        } else {
            $pdo = $this->pdo;
            $stmt = $pdo->prepare('SELECT uzr_id, first_name, last_name, uzr, phsh, rl_id 
                FROM uzrs WHERE uzr = :uzr limit 1');
            $stmt->bindParam(':uzr', $email);
            $stmt->execute();
//            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if (password_verify($password, $user['phsh'])) {
                $this->user = $user;

                //session_regenerate_id();
                $_SESSION['user']['id'] = $user['uzr_id'];
                $_SESSION['user']['fn'] = $user['first_name'];
                $_SESSION['user']['ln'] = $user['last_name'];
                $_SESSION['user']['uzr'] = $user['uzr'];
                $_SESSION['user']['rl'] = $user['rl_id'];
                $_SESSION['user']['agt'] = hash('sha512', $_SERVER['HTTP_USER_AGENT']);
             
                return true;
            } else {
                $this->msg = 'Invalid login information or the account is not activated.';
                return false;
            }
        }
    }


    /**
    * Password hash function
    * @param string $password User password.
    * @return string $password Hashed password.
    */
    private function hashPass($pass)
    {
        return password_hash($pass, PASSWORD_DEFAULT);
    }

    /**
    * Print error msg function
    * @return void.
    */
    public function printMsg()
    {
        print $this->msg;
    }

    /**
    * Logout the user and remove it from the session.
    *
    * @return true
    */
    public function logout()
    {
        $_SESSION['user'] = null;
        //session_regenerate_id();

    session_regenerate_id(true);

    // session_unset();
     session_destroy();
    // session_write_close();
    // setcookie(session_name(),'',0,'/');
    // session_regenerate_id(true);

        return true;
    }


    /**
    * Simple template rendering function
    * @param string $path path of the template file.
    * @return void.
    */
    public function render($path, $vars = '')
    {
        ob_start();
        include($path);
        return ob_get_clean();
    }

    /**
    * Template for index head function
    * @return void.
    */
    public function indexHead()
    {
        print $this->render(INDEX_HEAD);
    }

    /**
    * Template for index top function
    * @return void.
    */
    public function indexTop()
    {
        print $this->render(INDEX_TOP);
    }

    /**
    * Template for login form function
    * @return void.
    */
    public function formLogin()
    {
        print $this->render(LOGIN_FORM);
    }

    /**
    * Template for index footer function
    * @return void.
    */
    public function indexFooter()
    {
        print $this->render(INDEX_FOOTER);
    }

    /**
    * Template for user page function
    * @return void.
    */
    public function pageUser()
    {
        $users = [];
        print $this->render(USER_PAGE, $users);
    }
}
