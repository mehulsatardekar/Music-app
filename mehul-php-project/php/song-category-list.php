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
    $id= $_GET["id"];
   
}   




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/pug1.css" class="css">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="../js/jquery.searcher.js"></script>

<style>
 
 body .player{
   margin-top: 24px;
    margin-right: 88px;
    margin-left: 100px;
 }

 hr{

    margin-right: 88px;
    margin-left: 100px;
 }


</style>    
</head>
<body>
    <?php  require 'masterpage.php';  ?>

  




    <div class="background"></div>
    <div class="fling-minislide">
    <section style="height: 280px;">
        <div class="album-info">
           
            <div class="album-details">
                <h1 class="h1" style="margin-top:57px;"> “Where words leave off, music begins.”</h1><span>
                  <div class="txt">
                      <!--  <input type="text" class="txt1" id="cardsearchinput" placeholder="Search by Song Name"> -->


                  </div> 
            </div>
        </div>
        
    </section>
   </div>

    












 <?php
    

    include_once './includes/dbh.inc.php';
                
    $result = mysqli_query($conn, "SELECT songcategorylisttable.songlistname,songcategorylisttable.songartistname,songcategorylisttable.songimage,songcategorylisttable.songaudio
    FROM songcategorylisttable
    INNER JOIN songcategorytable ON songcategorylisttable.songid = songcategorytable.songid where songcategorylisttable.songid=".$id.";
    ");

    while($row = mysqli_fetch_array($result)){

     
       


         echo"   <div class='album-tracks' id='carddata'>";
         echo"     <div class='player pt card'>";
         echo"          <div class='left'>";
         echo"          <img src='../../mehul-php-project/php/db_imgs/song_catgory/categorylist/".$row['songimage']."'        alt=''>";
         echo"         </div>";
                
         echo"         <div class='right'>";
            echo"         <div class='top'>";
            echo"             <a class='song title'>".$row['songlistname']."</a>";
            echo"             <a class='artist' >".$row['songartistname']."</a>";
            echo"         </div>";
         echo"          <div class='bottom'>";
        echo"              <video controls='' _autoplay='' name='media'><source src='".$row['songaudio']."'  type='audio/mpeg'></video>";
         echo"          </div>";
         echo"          </div>";
         echo"      </div>";
         echo"      <hr>";
                
         echo"   </div> ";
       
    }





?>

    

 
<script>

    
window.addEventListener("play", function(evt)
{
    if(window.$_currentlyPlaying && window.$_currentlyPlaying != evt.target)
    {
        window.$_currentlyPlaying.pause();
    } 
    window.$_currentlyPlaying = evt.target;
}, true);

    </script>



<script>
			$("#carddata").searcher({
				itemSelector: ".card",
				textSelector: ".title",
				inputSelector: "#cardsearchinput",
				highlight: "<span class='highlight'>$1</span>",
				toggle: function(item, containsText) {
					if (containsText)
						$(item).fadeIn();
					else
						$(item).fadeOut();
				}
			});
		</script>









</body>
</html>