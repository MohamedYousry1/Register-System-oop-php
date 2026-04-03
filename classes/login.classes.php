<?php
// process the login data
class Login extends DBconn
{
    protected $validation_pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
    protected function getUser($username_or_email, $password)
    {
        if (preg_match($this->validation_pattern, $username_or_email)) {
            $sql = 'SELECT * FROM users WHERE email = ?';
        } else {
            $sql = 'SELECT * FROM users WHERE user_name = ?';
        }

        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute([$username_or_email])) {
            $stmt = null;
            header('location: ../login.php');
            exit();
        }

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            $_SESSION['error'] = "User not found!";
            header('location: ../login.php');
            exit();
        }

        if (!password_verify($password, $user['password'])) {
            $_SESSION['error'] = "Wrong password!";
            header('location: ../login.php');
            exit();
        }

        
        session_start();
        $_SESSION['userid'] = $user['id'];
        $_SESSION['username'] = $user['user_name'];
    }
}



    
/*
User Input Password
        ↓
password_verify() to compare the user input password with the hashed password from the database
        ↓
Hashed Password from DB
*/
