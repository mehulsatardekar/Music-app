<?php


$db = mysqli_connect("localhost", "root", "", "mehultest");

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['submit'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['filetitle']);

    // image file directory
    $target = "../../db_imgs/song_catgory/".basename($image);
   
    
    
    $sql = "INSERT INTO songcategorytable (songtitlename,songimage) VALUES ('$image_text','$image')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        header("Location: ../songscategory.php?successfullyadded");

    }else{
        $msg = "Failed to upload image";
    }
}



