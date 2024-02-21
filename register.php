<?php

session_start();
$_SESSION = [];

include 'connection.php';


foreach ($_POST as $input) {
    if ($input == '') {
        $_SESSION['err'] = 'All fields are required';
        header('location: sign_up.php');
        exit();
    }
}


$name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];


$select_staffs = "SELECT * FROM staffs";
$staffs = mysqli_query($conn, $select_staffs);

if ($staffs->num_rows == 0) {
    $role = 'admin';
} else {
    $role = 'staff';
}

$sql = "INSERT INTO staffs (name, email, password, phone, role) VALUES ('$name', '$email', '$password', '$phone', '$role')";
$insert_staff = mysqli_query($conn, $sql);


if ($insert_staff) {
    $_SESSION['success'] = 'User Registered Successfully';
    header('location: login.php');
    exit();
} else {
    $_SESSION['err'] = 'Registration failed';
    header('location: sign_up.php');
    exit();
}
