<?php
                                                                                                                                                                                                         
if(isset($_POST['logout-submit'])) {


   require 'dbh.inc.php';

$username = $_POST['username'];
$uemail = $_POST['email-id'];
$upasswd = $_POST['password'];
$uphn = $_POST['phone-number'];


if(empty($username) ||  empty($username) || empty($username) || empty($username) ){

    echo "<script> alert('enter all information') </script>";

}
else{

    $sql= "select username from users where username=?";
    $stmt = mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt, $sql)){

            header("Location: ../sign-up.php?error=someproblem");              
             exit();
         }
          else{
           mysqli_stmt_bind_param($stmt, "s", $username);
           mysqli_stmt_execute($stmt); 
           mysqli_stmt_store_result($stmt);
           $resultcheck =mysqli_stmt_num_rows($stmt);
           
           if($resultcheck > 0){
            header("Location: ../sign-up.php?error=useralreadytken".$username);              
             exit();
            
           } else {
                 
            $sql= "insert into users(username, ugmail, upassword, userphnnum, uact_creat_time, usertype)  Values(?,?,?,?,?,?) ";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){

                echo "<script> alert('SOME SQL PROBLEM OCCURED')</script>";
             } else{
                 
                $datetime = date("d/m/y")."=" .date("l")."=" .date("h:i:sa");
                $usertyp ="USER";
               
                $me= password_hash($upasswd, PASSWORD_DEFAULT);
                
                mysqli_stmt_bind_param($stmt, "ssssss", $username,$uemail,$me,$uphn,$datetime,$usertyp);
                mysqli_stmt_execute($stmt);
                
                  echo "<script> alert('account has been created')</script>";
                 header("Location: ../sign-in.php");
                 exit();

                   }

               
                }


          }

  }

          mysqli_stmt_close($stmt);
          mysqli_close($conn);

 

}
else{

    header("Location: ../sign-up.php");              
    exit();

}

