<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT role FROM users WHERE email=? AND password=?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($role);
    $stmt->fetch();
    $_SESSION['email'] = $email;
    $_SESSION['role'] = $role;
    if ($role === 'fan') {
        header("Location: ../pages/fan.php");
    } else {
        header("Location: ../pages/admin.php");
    }
} else {
    echo "Неверный логин или пароль";
}
?>
