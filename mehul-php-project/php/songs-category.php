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
    <link rel="stylesheet" href="../css/category.css">
</head>
<body>
    
<?php 
   
   require 'masterpage.php';

    


  
 ?>






        <div class="container">
                <h1 class="H1" style="color:blue; margin-top: 38px;">Music Category</h1>
                   
              </div>
              <div class="cards-list">
               <?php  
                  
                  include_once './includes/dbh.inc.php';
                
                  $result = mysqli_query($conn, "SELECT * FROM songcategorytable");

                       while($row = mysqli_fetch_array($result)){


                      echo " <div class='card 1'>";
                      echo " <div class='card_image'>";
                      echo " <a href='song-category-list.php?id= ".$row['songid']."' class='card_image'>";
                      echo "<img src='../../mehul-php-project/php/db_imgs/song_catgory/".$row['songimage']."' class=imgk>";
                        echo  "</a>";
                        echo "   </div>";
                        echo "  <div class='card_title title-white'>";
                        echo "    <p style='font-size:x-large; ''> ".$row['songtitlename']." </p>";
                        echo  "    </div>";
                        echo " </div>";
                      


                   }
              
                ?>
                   
         </div>
</body>
</html>