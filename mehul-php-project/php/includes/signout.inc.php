<?php


if(isset($_POST['sign-out']) ){

session_start();
session_unset();
header("Location: ../sign-in.php");
exit();
}
