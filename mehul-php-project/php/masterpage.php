<?php 



if(!isset ($_SESSION['username'])){

    header("Location: sign-in.php");
    exit();
}

if(isset ($_POST['sign-out'])){

    session_unset();
    header("Location: sign-in.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/test.css" class="css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    <header >
    <div class="tophead" style="background-color:black;" >
      <div class="brandlogo">
         
      <span class=" menuline" onclick="openNav()"><i class="material-icons icon">
                    reorder
                    </i></span>

      </div>
    <div>
   

   </div>
    </div>
</header>

<div class="sidenav" id="mySidenav">
<img src="../internal-img/userhome/brandlogo.png" style="width: 65px; height: 62px; margin-left: 66px; border-radius: 14px;" alt="brand-logo">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
 &times;

</a>

<form action="includes/signout.inc.php" method="post">
<a href="#"><i class="material-icons" aria-hidden="true" style="padding-top: 44px;">how_to_reg</i> &nbsp; <?php  echo "welcome " .$_SESSION['username'];  ?></a>
<a href="userhome.php"><i class="material-icons" aria-hidden="true" >home</i> &nbsp; Home</a>
<a href="artist.php"><i class="material-icons" aria-hidden="true" >library_music</i>&nbsp;&nbsp;Music Artist</a>
<a href="songs-category.php"><i class="material-icons" aria-hidden="true">queue_music</i>&nbsp;&nbsp;Music Genr</a>
<a href="#"><i class="material-icons" aria-hidden="true">               
</i><button  style="width: 171px; height: 54px; border-radius: 29px;" name="sign-out">Sign-Out</button></a>
</form>
</div>












<script>

const openNav= () => {
    document.getElementById('mySidenav').style.width ="240px";
}

const closeNav = () => {
    document.getElementById('mySidenav').style.width ="0px";
}
</script>

</body>
</html>