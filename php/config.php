<?php
    $conn = mysqli_connect("localhost", "root", "1234567890",  "chatapp");
    if(!$conn){
        echo "Database not connected" .mysqli_connect_error();
    }
?>