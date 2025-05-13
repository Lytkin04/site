<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
include '../includes/db.php';
$result = $conn->query("SELECT email FROM users WHERE role = 'fan'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Админка FC Sibiryak</title>
</head>
<body>
    <h1>Список фанатов</h1>
    <ul>
    <?php while($row = $result->fetch_assoc()): ?>
        <li><?php echo $row['email']; ?></li>
    <?php endwhile; ?>
    </ul>
    <a href="../includes/logout.php">Выйти</a>
</body>
</html>
