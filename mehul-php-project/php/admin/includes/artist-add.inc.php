<?php


$db = mysqli_connect("localhost", "root", "", "mehultest");

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['submith'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $artistnm = mysqli_real_escape_string($db, $_POST['artistnm']);
    $artisttyp = mysqli_real_escape_string($db, $_POST['artisttyp']);
    $artistdesc = mysqli_real_escape_string($db, $_POST['artistdesc']);



    // image file directory
    $target = "../../db_imgs/song_albums/".basename($image);
   
    
    
    $sql = "INSERT INTO artisttab (artistname,artisttype,artistdesc,artistimg) VALUES ('$artistnm','$artisttyp',' $artistdesc','$image')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        header("Location: ../artistadd.php?successfullyadded");
    }else{
        $msg = "Failed to upload image";
    }
}







