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
    $artid = $_GET['artid'];

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/pug.css" class="css">
</head>
<body>
    
<?php  require 'masterpage.php';  ?>


    <div class="background"></div>
 




            <section style="  background: #ff512f; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #ff512f, #dd2476); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #ff512f, #dd2476);       ">
        <div class="album-info">
            <div class="album-art">
                <?php
                    include_once './includes/dbh.inc.php';

                    $result = mysqli_query($conn, "SELECT artistimg from artisttab where artistid=".$artid."");
       
                    while($row = mysqli_fetch_array($result)){
                    echo" <img src='../../mehul-php-project/php/db_imgs/song_albums/".$row['artistimg']."' />";
                    }
                ?>
                <div class="actions">
                   
                    <div class="play">	&reg; 	&copy;</div>
                </div>
            </div>
            <div class="album-details">
                <?php
                include_once './includes/dbh.inc.php';

                $result = mysqli_query($conn, "SELECT artistname,artistdesc from artisttab where artistid=".$artid."");


                while($row = mysqli_fetch_array($result)){
                echo"<h1 style='text-transform:uppercase;font-weight: bold; color: white;'>".$row['artistname']."</h1><span> <span>Hard Rock </span><span>&copy; 2016 Atlantic Recording Corporation</span></span>";
                echo"<p>".$row['artistdesc']."</p>";
                }
                
                  ?>

                </div>
        </div>
       












        
    </section>





     <?php

        include_once './includes/dbh.inc.php';
        $result = mysqli_query($conn, "SELECT  artistsonglist.artistname, artistsonglist.artistsongname, artistsonglist.artistsongimg, artistsonglist.artistsonglink
        from artistsonglist 
        INNER Join artisttab ON artistsonglist.artistid=artisttab.artistid where artistsonglist.artistid=".$artid.";");

        while($row = mysqli_fetch_array($result)){
         



   echo "<div class='album-tracks'>";
   echo "    <div class='player pt'>";
   echo "        <div class='left'>";
   echo"          <img src='../../../../mehul-php-project/php/db_imgs/song_albums/song_albumslist/".$row['artistsongimg']."'        alt=''>";
   echo "        </div>";
          
   echo "        <div class='right'>";
   echo "           <div class='top'>";
   echo "             <a class='song' >".$row['artistsongname']."</a>";
   echo "              <a class='artist' >".$row['artistname']."</a>";
   echo "           </div>";
   echo "           <div class='bottom'>";
               echo "              <video controls='' _autoplay='' name='media'>";
               echo "              <source src='".$row['artistsonglink']."' type='audio/mpeg'></video>";
               echo "           </div>";
               echo "        </div>";
               echo "      </div>";
               echo "      <hr>";
        
               echo " </div>";
    
    
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


</body>
</html>