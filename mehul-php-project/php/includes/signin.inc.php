<?php

if(isset($_POST['login-submit']))
{
  
        require 'dbh.inc.php';

      $mailid = $_POST['mailuid'];
      $password = $_POST['pwd'];


    if(empty($mailid) || empty($password) ){
        
      header("Location ../sign-in.php?error=emptystrings");
        exit();
    }

      else{
      $sql ="select * from  users where username=?";
      $stmt = mysqli_stmt_init($conn);

      if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../sign-in.php?error=sqlsomeproblem");              
        exit();
      }
      else{

        mysqli_stmt_bind_param($stmt , "s", $mailid);
        mysqli_stmt_execute($stmt);
        $result= mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($result) ){

           $password;
        // $pwdCheck = password_verify($password, $row['upassword']);

         

          
           //echo $pwdCheck;
            $upass = $row['upassword'];
            $usersess= $row['username'];
           $userid =$row['uid'];
            $usertype = $row['usertype'];
        

          if(password_verify($password, $row['upassword']) == false){

            echo "you are redircting to login page";

              echo " <script>
              setTimeout(function(){
                window.location.href = '../sign-in.php';
              }, 500);
            </script>" ;

            echo "<script>alert('wrong password')</script>";
            
              exit();
          } 
          else if(password_verify($password, $row['upassword']) == true  &&  $usertype=="USER"){

           
            session_start();
          
          echo  $usersess= $row['username'];
           echo $_SESSION['username']= $usersess;
           echo $_SESSION['userid']= $userid ;
          

          header("Location: ../userhome.php");
          exit();
           
           
          }
         
          else if(password_verify($password, $row['upassword']) == true  &&  $usertype=="ADMIN"){

           
            session_start();
          
          echo  $usersess= $row['username'];
           echo $_SESSION['admin']= $usersess;
           echo $_SESSION['adminid']= $userid ;
          

          header("Location:  ../admin/artistadd.php");
          exit();
           
           
          }


          else{

            header("Location: ../sign-in.php?error=worngpassphrase");
            exit();
          }

        }
        else{
            header("Location: ../sign-in.php?error=nouser");              
            exit();
        }



      }


    }

}
else{

    header("Location: ../homepage.php");
    exit();
}
