<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'fan') {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Фан-зона FC Sibiryak</title>
</head>
<body>
    <h1>FC Sibiryak Bratsk</h1>
    <p>ФК «Сибиряк» Братск был российским футбольным клубом, основан в 1967 году и расформирован в 2014 году...</p>
    <a href="../includes/logout.php">Выйти</a>
</body>
</html>
