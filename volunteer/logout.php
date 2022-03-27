<?php
session_start();
unset($_SESSION["v_email"]);
unset($_SESSION["name"]);
header("Location:login");
?>