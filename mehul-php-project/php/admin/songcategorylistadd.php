<?php

session_start();
if(!isset($_SESSION['admin'])){
   // not logged in
   header('Location: ../sign-in.php');
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
    <link rel="stylesheet" href="../admin/admin-css/songcategory.css">
</head>

<body>

<?php  require 'admasterpage.php';  ?>

    <form action="includes/song-caplist.inc.php" method="post" enctype="multipart/form-data" >

                 <center><h1> enter songs category details.  </h1></center>
             <center><h3> (Note in this page songid (4'th field) has foreign key relationship.. )  </h3></center>

    <b>input image</b>
    <input type="file" name="songimage" required>

    </br>
     <input type="text" class="txtbox" name="songname" placeholder="Enter song name eg.. kesari , diamonds" required>

     
    </br>
     <input type="text" class="txtbox" name="songartist" placeholder="Enter artist name eg.. argit singh , rihanna" required>

     
    </br>
     <input type="text" class="txtbox" name="songtype" placeholder="Enter song type eg.. hindi , englsh" required>

     
    </br>
     <input type="text" class="txtbox" name="songidref" placeholder="Enter song id eg.. this field has foreign key primary key relation" required>

     </br>
     <input type="text" class="txtbox" name="awslink" placeholder="Enter song id link.. amazon webservices" required>

</br>

</br>
    <button type="submit" class="btn" name="submits">Add data</button>













    </form>






</body>
</html>