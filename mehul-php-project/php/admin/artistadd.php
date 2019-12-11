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



<form action="includes/artist-add.inc.php" method="post" enctype="multipart/form-data" >

    <center><h1> enter artist details. </h1></center>

<b>input image</b>
<input type="file" name="image" required>

</br>
 <input type="text" class="txtbox" name="artistnm" placeholder="Enter Artist name eg. rihanna, kygo" required>

</br>

<input type="text" class="txtbox" name="artisttyp" placeholder="Enter Artist type eg. english artist, hindi artist" required>

</br>
<input type="text" class="txtbox" name="artistdesc" placeholder="Enter Artist desc eg. About him/her life or achievements" required>

</br>
<button type="submit" class="btn" name="submith">Add data</button>













</form>



</body>
</html>