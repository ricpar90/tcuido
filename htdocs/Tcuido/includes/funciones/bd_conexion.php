<?php
    $conn= new mysqli('localhost', 'root', '', 'tcuido');

    if($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }
?>