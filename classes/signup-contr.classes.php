<?php
// this class is used to control the signup process (validation and error handling)
class SignupControler extends Signup
{
    private $username;
    private $email;
    private $password;
    private $repeat_password;
    public function __construct($username, $email, $password, $repeat_password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->repeat_password = $repeat_password;
    }

    public function signupUser()
    {
        if ($this->uidTakenCheck() == false) {
            // if the username or email is already taken, show an error message
            $_SESSION['error'] = "Username or Email already exists!";
            header('location: ../signup.php');
            exit();
        }
        if ($this->invalidUsername() == false) {
            $_SESSION['error'] = "Invalid username! Use only letters, numbers, spaces, and underscores.";
            header('location: ../signup.php');
            exit();
        }
        if ($this->invalidEmail() == false) {
            $_SESSION['error'] = "Invalid email format!";
            header('location: ../signup.php');
            exit();
        }
        if ($this->passwordMatch() == false) {
            $_SESSION['error'] = "Passwords do not match!";
            header('location: ../signup.php');
            exit();
        }
        if ($this->emptyInput() == false) {
            $_SESSION['error'] = "Please fill all fields!";
            header('location: ../signup.php');
            exit();
        }

        $this->setUser($this->username, $this->email, $this->password);
    }
    private function uidTakenCheck()
    {
        if (!$this->checkUsers($this->username, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function invalidUsername()
    {
        if (!preg_match("/^[\p{L}\p{N}_ ]+$/u", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function invalidEmail()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function passwordMatch()
    {
        if ($this->password !== $this->repeat_password) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function emptyInput()
    {
        if (empty($this->username) || empty($this->email) || empty($this->password) || empty($this->repeat_password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
