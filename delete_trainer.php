<?php

$link = mysqli_connect("db.cse.nd.edu", "ggavenda", "gridlockmain", "ggavenda");

if($link === false) {
  die("Error: could not connect " . mysqli_connect_error() );
}

$id = mysqli_real_escape_string($link, $_REQUEST['id']);

$sql = "delete from trainer where id=$id";

if(mysqli_query($link, $sql)){
    echo "Trainer removed from database.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
