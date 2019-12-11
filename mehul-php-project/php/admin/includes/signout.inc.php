<?php


if(isset($_POST['adminbts']) ){

session_start();
session_unset();
header("Location: ../../sign-in.php");
exit();
}
