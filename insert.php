<?php
    include 'dbconn.php';

    $st_name = $_POST['name'];
    $st_id = $_POST['st_id'];
    $semester = $_POST['semester'];

    //Insert data 
    $insert="INSERT INTO student(name, st_id, semester) values('$st_name',$st_id,'$semester')";
    $conn->query($insert);

    include 'read.php';

?>