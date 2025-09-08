<?php
session_start();

$_SESSION['username'] = "jamshaid";
$_SESSION['role'] = "Admin";

echo "Session is created. <a href='dashboard.php'>Go to Dashboard</a>";
?>
