<?php
session_start();
session_destroy(); // Destroys the session
header("Location: login.php"); // Redirects to the login page
exit;
?>
