<?php
session_start();
$_SESSION['Key_id'] = '';
session_regenerate_id();
$_SESSION['idUtilizador'] = '';
header('Location:exemplo.php');
?>