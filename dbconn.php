<?php
    $server_name="localhost";
    $db_user_name="root";
    $db_password="";
    $db_name="cruddb";

    $conn = new mysqli($server_name, $db_user_name, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // print success massage in console using javascript
    echo "
        <script>
            console.log('Db connection succesfull');
        </script>
    "; 

?>