<?php
namespace App;
// this class is used to control the signup process (validation and error handling)
class LoginControler extends LoginClass
{
    private $username;
    private $password;
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            $_SESSION['error'] = "Please fill all fields!";
            header('location: ../login.php');
            exit();
        }

        $this->getUser($this->username, $this->password);
    }
    private function emptyInput()
    {
        if (empty($this->username) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
