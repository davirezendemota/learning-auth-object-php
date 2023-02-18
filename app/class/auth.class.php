<?php

class Auth
{
  private $sha1_key = 'ola';

  public function __construct()
  {

  }

  public function authenticate()
  {
    // GO TO LOGIN PAGE
    if (!isset($_SESSION['uid'])) header('Location:'. WWW_ROOT . '/login.php');

    // LOGOUT
    if (isset($_GET['auth']) && $_GET['auth'] == 'logout') {
      unset($_SESSION['uid']);
      // GO TO INDEX PAGE
      header('Location:'. WWW_ROOT);
    }
  }


  public function login($us, $pwd)
  {
    $pwd_SHA1 = sha1($this->sha1_key . $pwd);

    // DUMMY DATABASE RESPONSE
    $db_user_pwd = sha1($this->sha1_key . 'davi');
    
    if($us == 'davi' && $pwd_SHA1 == $db_user_pwd){
      
      $_SESSION['uid'] = session_id();

      header('Location:'. WWW_ROOT . '/admin.php');
    }
  }
}