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
    <title>Document</title>
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">
</head>
<body>
    
  <?php 
   
    require 'masterpage.php';

     


   
  ?>



    <div class="fling-minislide">
        <div>
            
        <img src="../internal-img/userhome/" alt="Slide 4" />
        
    </div>


    <div>
            <img src="../internal-img/userhome/calvinharris.jpg" alt="Slide 3" />
            
    </div>
       
      
        <img src="../internal-img/userhome/tomorrowland_2019.jpg" alt="Slide 2" style="background-position:center;" />
      
        <img src="../internal-img/userhome/musiccov.png" alt="Slide 1" />
      </div>

      <div class="container" style="margin-top:36px;">
        <h1>Music Category</h1>
          <a href="songs-category.php" class="right" > See more like this </a>   
      </div>
      <div class="cards-list">

      <?php

      include_once './includes/dbh.inc.php';
      $result = mysqli_query($conn, "select * from songcategorytable LIMIT 5");

      while($row = mysqli_fetch_array($result)){

          echo"  <div class='card 1'>";
          echo"     <div class='card_image'>";
          echo " <a href='song-category-list.php?id= ".$row['songid']."' class='card_image'>";

          echo"        <img src='../../mehul-php-project/php/db_imgs/song_catgory/".$row['songimage']."'  class='imgk' />";
          echo "</a>";
          echo"       </div>";
          echo"     <div class='card_title title-white'>";
          echo"       <p style='font-size:x-large;'>".$row['songtitlename']." </p>";
          echo"     </div>";
          echo"   </div>";
      }
       
        ?>
        
        </div>

        <div class="container" style="margin-top:36px;">
            <h1>Music Albums</h1>
              <a href="artist.php" class="right" > See more like this </a>   
          </div>

          <div class="cards-list1" style="margin-bottom:36px;">
          


          <?php
              
              include_once './includes/dbh.inc.php';
              $result = mysqli_query($conn, "select * from artisttab LIMIT 4");

              while($row = mysqli_fetch_array($result)){
            echo"  <div class='card1 4'>";
            echo"      <div class='card1'>";
            echo "     <a href='artistsongs.php?artid=".$row['artistid']."'>";
            echo"          <img src='../../mehul-php-project/php/db_imgs/song_albums/".$row['artistimg']."'  class='imgs' alt='Avatar' style='width:100%'>";
           echo"                 </a>";
            echo"          <div class='container'>";
            echo"            <h4 class='artist-nm'><b>".$row['artistname']."</b></h4>";      
            echo"          </div>";
            echo"        </div>";
            echo"      </div>";
              }
               ?>
            
             
            </div>




</script>
            
</body>
</html>