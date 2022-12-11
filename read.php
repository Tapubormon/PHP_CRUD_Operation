<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #f7f5f5;
            padding: 1rem 2rem;
        }

        .content{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0rem 2rem;
            margin-bottom: 0.5rem;
            border-radius: 5px;
            background-color: rgb(235, 231, 231);
        }
        .content p{
            color: #000000;
            font-weight: 600;
            font-family: 'Courier New', Courier, monospace;
        }
        .content p span{
            margin-right: 20px;
            color: #7a6c6c;
            font-weight: normal;
        }
        .content .btn a{
            text-decoration: none;
            background-color: rgb(0, 172, 252);
            padding: 0.5rem 1rem;
            font-family: 'Courier New', Courier, monospace;
            color: #ffffff;
            border-radius: 5px;
        }
        .add{
            text-decoration: none;
            background-color: #34c93b;
            padding: 0.5rem 3rem;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 600;
            color: #000;
            border-radius: 5px;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

    <div class='container'>
        <?php
            //read data
            include 'dbconn.php';
            $read="SELECT * FROM student Order by id DESC";
            $result = $conn->query($read);

            if($result->num_rows > 0){

            while($row = $result->fetch_assoc()) {
            //echo " ST ID: ".$row['id']." ST Name: ".$row["name"]." ST REG NO:  ".$row["st_id"]." Semester: ".$row["semester"]." <br>";
        ?>
            
            <div class='content'>
                <p>ID: <span><?php echo$row['id'] ?></span></p>
                <p>Name: <span><?php echo$row['name'] ?></span></p>
                <p>Student ID: <span><?php echo$row['st_id'] ?></span></p>
                <p>Semester: <span><?php echo$row['semester'] ?></span></p>
                <div class='btn'>
                    <a href='delete.php?id=<?php echo$row['id']; ?>'>Delete</a>
                    <a href='update.php?id=<?php echo$row['id']; ?>'>Update</a>
                </div>
            </div>
        <?php
            }}
        ?>

        <a class="add" href="index.php">Add More</a>
    </div>
    
</body>
</html>
      