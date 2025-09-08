<?php
session_start();

// Check if session exists
if (isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "!<br>";
    echo "Your role is: " . $_SESSION['role'] . "<br>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "You are not logged in. <a href='login.php'>Login</a>";
}
