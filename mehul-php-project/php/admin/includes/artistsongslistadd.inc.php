<?php


$db = mysqli_connect("localhost", "root", "", "mehultest");

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['submithh'])) {
    // Get image name
    $image = $_FILES['mehul']['name'];
   
    // Get text
    $artistsongname = mysqli_real_escape_string($db, $_POST['artistsongname']);
    $artistname = mysqli_real_escape_string($db, $_POST['artistname']);
    $artistid = mysqli_real_escape_string($db, $_POST['artistid']);
    $artistsonglink = mysqli_real_escape_string($db, $_POST['artistsonglink']);



    // image file directory
    $targets = "../../../../mehul-php-project/php/db_imgs/song_albums/song_albumslist/".basename($image);
    
    
    $sql = "INSERT INTO artistsonglist (artistsongname,artistname,artistsongimg,artistid,artistsonglink) VALUES ('$artistsongname','$artistname','$image',' $artistid',' $artistsonglink')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['mehul']['tmp_name'], $targets)) {
        $msg = "Image uploaded successfully";
        header("Location: ../artistsongslistadd.php?successfullyadded");
    }else{
        $msg = "Failed to upload image";
    }
     





}



