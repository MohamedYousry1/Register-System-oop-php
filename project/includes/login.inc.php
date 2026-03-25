<?php
session_start();

if (isset($_POST["submit"])) {

    //Grabbing the data

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Instantiate SignupContr Class
    include '../classes/dbconn.php';
    include '../classes/login.classes.php';
    include '../classes/login-contr.classes.php';
    $loginCtrl = new LoginControler($username, $password);


    // Running errors handlers and user signup
    $loginCtrl->loginUser();
    // Going to profile page with success message
    header('location: ../profile.php');
    exit();
}
