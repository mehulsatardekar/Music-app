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

    <form action="includes/song-catup.inc.php" method="post" enctype="multipart/form-data" >

                          <center><h1> enter songs  category details.  </h1></center>

    <input type="file" name="image" required>

    </br>
     <input type="text" class="txtbox" name="filetitle" placeholder="Enter song category eg.party song, old song" required>

</br>
    <button type="submit" class="btn" name="submit">Add data</button>













    </form>






</body>
</html>