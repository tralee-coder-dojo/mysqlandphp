<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "", "garage");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$price_var = mysqli_real_escape_string($link, $_POST['price']);
$name_var = mysqli_real_escape_string($link, $_POST['name']);
$year_var = mysqli_real_escape_string($link, $_POST['year']);
$img_var = mysqli_real_escape_string($link, $_POST['img']);
$desc_var = mysqli_real_escape_string($link, $_POST['desc']);

 
// attempt insert query execution
$sql = "INSERT INTO cars (price, name, year_, img, desc_) VALUES ($price_var, '$name_var', '$year_var', '$img_var', '$desc_var')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>