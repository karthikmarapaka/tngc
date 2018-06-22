<?php

session_start();
unset($_SESSION['name_ai']);
unset($_SESSION['phone_ai']);

header("location: admin.php")
?>