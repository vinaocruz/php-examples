<?php
session_start();

setcookie('total', $_SESSION['total']);
setcookie('data', date("d/m/Y"))

session_destroy();

header("Location: index.php");