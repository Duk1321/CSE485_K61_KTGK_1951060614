<?php

    $id = $_GET['id'];
    
    include '../reuse/connect.php';

    $sql = "DELETE FROM exams WHERE id = $id ";

    $result = mysqli_query($conn,$sql);

    if($result >0){
        header("Location:./info.php");
    }
?>