<?php
session_start();
unset($_SESSION['employe']);
session_destroy();
header("Location: index.php");
exit();
?>
