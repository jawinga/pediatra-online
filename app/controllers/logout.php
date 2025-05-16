<?php

session_start();
session_unset(); // remove all session variables
session_destroy(); // destroy the session
$inicio = '../views/inicio.php';
header("Location: $inicio");
exit();

?>