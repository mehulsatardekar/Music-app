<?php

session_start();

if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: sign-in.php');
    exit();
}
else{

    echo "<script> console.log('hiii huree')</script>";
   
}   




?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artist</title>
    <link rel="stylesheet" href="../css/artist.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
  

</head>
<body>
<?php  require 'masterpage.php';  ?>

<form action="" method="post">
        <div class="jumbotron " style="background-image: url(../../../../mehul-php-project/internal-img/bak.jpg); background-repeat: no-repeat; background-position: center; ">
            

                <div>
                        <h5 style="color: white; text-align: center; font-size: medium;">More than 10 categories and multiple Albums list..</h5>
                </div>
            <div class="container-2">
                
                    <input class=" con1" type="text" name="getqry" placeholder="Search By Artist" style="margin-top:28px;">
                    
                  
               

                     
            </div>
            <div class="container-2">
            <a href="#"><button  class="bts" name="qurysrch">Search</button></a>
        




        </div>
         </div>


         <div class='container-2 carddata'  style='padding-top: 50px;'>
   <?php 







            if (isset($_POST['qurysrch'])) {

                include_once './includes/dbh.inc.php';

             
                $inptqry = mysqli_real_escape_string($conn, $_POST['getqry']);

                $result1 = mysqli_query($conn, "SELECT * FROM artisttab WHERE artistname LIKE '%$inptqry%'");
             
                while($row1 = mysqli_fetch_array($result1)){

                    
                    echo "     <div class='container-2-box b1 '>";
                         
                    echo "    <img src='../../mehul-php-project/php/db_imgs/song_albums/".$row1['artistimg']." '    class='b1'>";
         
                    echo "     <h2 class='title'>".$row1['artistname']."</h2>";
                         
                    echo "    <span class='spantext'>".$row1['artisttype']."</span>";
                    echo "      </br>";
                    echo "     <a href='artistsongs.php?artid=".$row1['artistid']."'><button class='bts1'>Go to the Playlist</button></a>";
                    echo "     </div>";
              
                     
         
                     }
         

             } 

             else{


                
               include_once './includes/dbh.inc.php';
                
               $result = mysqli_query($conn, "SELECT * FROM artisttab");
 
                while($row = mysqli_fetch_array($result)){
 
 
 
           
                     
            echo "     <div class='container-2-box b1 '>";

             echo "      <a href='artistsongs.php?artid=".$row['artistid']."' style:text-decoration:none;>"; 
            echo "    <img src='../../mehul-php-project/php/db_imgs/song_albums/".$row['artistimg']." '    class='b1'>";
            echo "   </a>";

             
            echo "     <h2 class='title'>".$row['artistname']."</h2>";
                 
            echo "    <span class='spantext'>".$row['artisttype']."</span>";
            echo "      </br>";
              
            echo "     <button class='bts1'>Click to image  </button>";
            echo "     </div>";
      
             
 
             }
 

             }
         
     ?> 
       </div>

     
       </form>

</body>
</html>