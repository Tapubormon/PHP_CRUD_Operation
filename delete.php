<?php 
include 'dbconn.php';
$id = $_GET['id'];

$delete = "DELETE FROM student WHERE id=$id";
$deleteQuery = $conn->query($delete);

if($deleteQuery){
    header('location:read.php');
}

?>