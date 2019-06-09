<?php
session_start();
unset($_SESSION['sess_user']);
unset($_SESSION['sess_admin']);
session_destroy();
header("Location:front_page.php");
?>