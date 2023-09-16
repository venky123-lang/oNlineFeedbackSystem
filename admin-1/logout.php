<?php

session_start();
unset($_SESSION['adminusername']);
unset($_SESSION['adminpassword']);
session_destroy();
header("location: ../index.html");
?>