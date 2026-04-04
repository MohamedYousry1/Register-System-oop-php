<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
use App\LoginControler;

if (isset($_POST["submit"])) {

    //Grabbing the data

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Instantiate SignupContr Class
    // include '../classes/dbconn.php';
    // include '../classes/login.classes.php';
    // include '../classes/login-contr.classes.php';
    $loginCtrl = new LoginControler($username, $password);


    // Running errors handlers and user signup
    $loginCtrl->loginUser();
    header('location: ../profile.php');
    exit();
} elseif (basename($_SERVER['PHP_SELF']) == 'login.inc.php') {
    http_response_code(404);
    exit;
}
