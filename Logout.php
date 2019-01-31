<?php
session_start();
session_destroy();
$_SESSION['username']='';
header('Location: ../login.php');