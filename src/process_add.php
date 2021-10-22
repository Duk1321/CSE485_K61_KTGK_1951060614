<?php
    $exam_title = $_POST['txtExamName'];
    $exam_date = $_POST['input_date_on'];
    $time = $_POST['txtDuration'];
    $question = $_POST['txtQuestion'];
    $score = $_POST['txtScore'];
    $status = $_POST['txtStatus'];
    $exam_code = $_POST['ExamCode'];
    $date = date("Y/m/d");
    
    include '../reuse/connect.php';

    $sql = "INSERT INTO `exams`(`exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status`, `exam_code`) 
    VALUES ('$exam_title','$exam_date','$time','$question','$score', '$date', '$status', '$exam_code')";

    $result = mysqli_query($conn,$sql);

    if($result >0){
        header("Location:../index.php");
    }
?>