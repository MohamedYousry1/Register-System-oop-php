<?php
namespace App;
// process the signup data
class SignupClass extends DBConn
{

    protected function setUser($username, $email, $password){   
        $sql = 'INSERT INTO users (user_name, email, password) VALUES (?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
        if(!$stmt->execute(array($username, $email, $hashedPassword))){ // $hashedPassword is the hashed password that is stored in the database
            $stmt = null;
            header('location: ../signup.php?error=stmtfailed');
            exit();
        }
    }
    protected function checkUsers($username, $email)
    {
        $sql = "SELECT user_name FROM users WHERE user_name = ? OR email = ?"; // query to check if user is exists in database before or not  (validation)
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute(array($username, $email))) {
            $stmt = null; // break the connection with the database , clear the object from the memory
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() > 0) { // check if user is exists in database before or not  (validation)
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}
