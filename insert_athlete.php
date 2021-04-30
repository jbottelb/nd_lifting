<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("db.cse.nd.edu", "ggavenda", "gridlockmain", "ggavenda");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$sport = mysqli_real_escape_string($link, $_REQUEST['sport']);
$year = mysqli_real_escape_string($link, $_REQUEST['year']);

// Attempt insert query execution
$sql = "INSERT INTO athlete (name, sport, year) VALUES ('$name', '$sport', '$year')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
