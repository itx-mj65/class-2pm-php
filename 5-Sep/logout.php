<?php
session_start();

// Destroy all session data
session_unset();
session_destroy();

echo "You are logged out. <a href='login.php'>Login again</a>";
?>
