<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
use App\SignupControler;

if (isset($_POST["submit"])) {

    //Grabbing the data

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeat_password = $_POST["repeat_password"];

    // Instantiate SignupContr Class
    // include '../classes/dbconn.php';
    // include '../classes/signup.classes.php';
    // include '../classes/signup-contr.classes.php';
    $signupCtrl = new SignupControler($username, $email, $password, $repeat_password);


    // Running errors handlers and user signup
    $signupCtrl->signupUser();
    // Going back to signup page with success message
    header('location: ../login.php');
    exit();
} elseif (basename($_SERVER['PHP_SELF']) == 'signup.inc.php') {
    http_response_code(404);
    exit;
}
