<?php
$id = $_GET['id'];
$date = $_GET['date'];
$desc = $_GET['desc'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "test");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$sql = "UPDATE table
        SET dateRec = '$date' ,
        description = '$desc'
        WHERE idReclamation = '$id'";
if(mysqli_query($link, $sql)){
    header('Location:afficher reclamtion.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>