<?php

session_start();
$_SESSION = [];

include 'connection.php';


foreach ($_POST as $input) {
    if ($input == '') {
        $_SESSION['err'] = 'Login failed.';
        header('location: login.php');
        exit();
    }
}


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM staffs WHERE email='$email' AND password='$password'";
$user_details = mysqli_fetch_assoc(mysqli_query($conn, $sql));

if ($user_details) {
    $_SESSION['role'] = $user_details['role'];
    $_SESSION['name'] = $user_details['name'];
    $_SESSION['email'] = $user_details['email'];
    $_SESSION['user_login'] = true;
    $_SESSION['success'] = 'Welcome ' . $user_details['name'];

    if ($user_details['role'] == 'admin') {
        header('location: dashboard');
        exit();
    } elseif ($user_details['role'] == 'staff') {
        header('location: index.php');
        exit();
    }
} else {
    $_SESSION['err'] = 'Email or password mismatched';
    header('location: login.php');
    exit();
}
