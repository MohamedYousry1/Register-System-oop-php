<?php session_start(); 
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="src/output.css" rel="stylesheet">
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .error-message {
            background-color: #fee2e2;
            border: 1px solid #ef4444;
            color: #991b1b;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 16px;
            text-align: center;
            font-weight: 500;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">

    <!-- Login Page -->
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Login</h2>
            <p class="text-center text-gray-500 mb-6">Don't have an account yet? <a href="signup.php" class="text-indigo-600 hover:text-indigo-700 font-semibold">Signup here!</a></p>
            <?php
            // Display error message
            if (isset($_SESSION['error'])) {
                echo "<div class=' error-message'>{$_SESSION['error']}</div>";
                unset($_SESSION['error']);
            }
            ?>
            <form action="includes/login.inc.php" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Username</label> <!-- username OR email -->
                    <input type="text" name="username" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200" placeholder="Enter your username">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Password</label>
                    <input type="password" name="password" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200" placeholder="Enter your password">
                </div>

                <button type="submit" name="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-lg transition duration-200 transform hover:scale-105">
                    Login
                </button>
            </form>
        </div>
    </div>

</body>

</html>