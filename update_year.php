<?php

$link = mysqli_connect("db.cse.nd.edu", "ggavenda", "gridlockmain", "ggavenda");

if($link === false) {
  die("Error: could not connect " . mysqli_connect_error() );
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$year = mysqli_real_escape_string($link, $_REQUEST['year']);

$sql = "update athlete set year='$year' where name='$name'";

if(mysqli_query($link, $sql)){
    echo "Year updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
