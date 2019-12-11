<?php


$db = mysqli_connect("localhost", "root", "", "mehultest");

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['submits'])) {
    // Get image name
    $image = $_FILES['songimage']['name'];
   
    // Get text
    $songname = mysqli_real_escape_string($db, $_POST['songname']);
    $songartist = mysqli_real_escape_string($db, $_POST['songartist']);
    $songtype = mysqli_real_escape_string($db, $_POST['songtype']);
    $songidref = mysqli_real_escape_string($db, $_POST['songidref']);
    $songlink = mysqli_real_escape_string($db, $_POST['awslink']);



    // image file directory
    $target = "../../db_imgs/song_catgory/categorylist/".basename($image);
    
    
    $sql = "INSERT INTO songcategorylisttable (songid,songtype,songimage,songartistname,songlistname,songaudio) VALUES ('$songidref','$songtype','$image',' $songartist','$songname',' $songlink')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['songimage']['tmp_name'], $target)){                                            
        $msg = "Image uploaded successfully and songs also";
        header("Location: ../songcategorylistadd.php?successfullyadded");
    }else{
        $msg = "Failed to upload image";
    }

     





}



