<?php
    $conn = mysqli_connect("localhost","root","","auditoria");

    if(!$conn){
        die("Connection error: " . mysqli_connect_error());	
    }
?>