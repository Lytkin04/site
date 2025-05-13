<?php
session_start();
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] === 'fan') {
        header("Location: pages/fan.php");
    } else if ($_SESSION['role'] === 'admin') {
        header("Location: pages/admin.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>FC Sibiryak Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Вход в FC Sibiryak</h2>
    <form action="includes/login.php" method="post">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Пароль" required><br>
        <button type="submit">Войти</button>
    </form>
</body>
</html>
