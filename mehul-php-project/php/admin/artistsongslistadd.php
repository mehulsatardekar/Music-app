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

<form action="includes/artistsongslistadd.inc.php" method="post" enctype="multipart/form-data" >

             <center><h1> enter artist songs details.  </h1></center>
             <center><h3> (Note in this page artistid has foreign key relationship..)  </h3></center>



<b>input image</b>
<input type="file" name="mehul" required>

</br>
 <input type="text" class="txtbox" name="artistsongname" placeholder="Enter Artist Song name eg. maganta riddim, kabhi kabhi mere dil me" required>

</br>

<input type="text" class="txtbox" name="artistname" placeholder="Enter Artist name eg. dj snake, lata mangeshkar" required>

</br>
<input type="text" class="txtbox" name="artistid" placeholder="Enter Artist id eg. this is primary foreign key relation id" required>

</br>
<input type="text" class="txtbox" name="artistsonglink" placeholder="Enter song link " required>

</br>
<button type="submit" class="btn" name="submithh">Add data</button>













</form>



</body>
</html>