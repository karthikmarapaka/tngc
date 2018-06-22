<?php

session_start();
unset($_SESSION['name_sl']);
unset($_SESSION['phone_sl']);

header("location: login.php")
?>
