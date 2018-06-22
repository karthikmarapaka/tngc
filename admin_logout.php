<?php

session_start();
unset($_SESSION['name_as']);
unset($_SESSION['phone_as']);

header("location: sign_up.php")
?>