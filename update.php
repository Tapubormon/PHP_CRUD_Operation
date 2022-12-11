<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test For PHP</title>
</head>
<body>

    <h1> Update form</h1>
    
    
    <form action="" method="POST">
        <?php 
        include 'dbconn.php';

        $id = $_GET['id'];
        
        $update="SELECT * FROM student WHERE id=$id";
        $result = $conn->query($update);
        $row = $result->fetch_assoc();
        if(isset($_POST['submit'])){
            $id = $_GET['id'];
            $st_name = $_POST['name'];
            $st_id = $_POST['st_id'];
            $semester = $_POST['semester'];

            $update = "UPDATE student SET name='$st_name',st_id=$st_id,semester='$semester' WHERE id=$id";
            $updateQuery = $conn->query($update);
            if($updateQuery){
                header('location:read.php');
            }
        }

        
        
        ?>
        <input type="text" name="name" placeholder="Name" value="<?php echo$row['name'] ?>">
        <input type="text" name="st_id" placeholder="Student ID" value="<?php echo$row['st_id'] ?>">
        <input type="text" name="semester" placeholder="Semester" value="<?php echo$row['semester'] ?>">
        <button type="submit" name="submit"> Update </button>
    </form>

</body>
</html>
