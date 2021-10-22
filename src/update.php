<?php
    $id = $_POST['txtID'];
    $exam_title = $_POST['txtExamName'];
    $exam_date = $_POST['input_date_on'];
    $time = $_POST['txtDuration'];
    $question = $_POST['txtQuestion'];
    $score = $_POST['txtScore'];
    $date = $_POST['txtDate'];
    $status = $_POST['txtStatus'];
    $exam_code = $_POST['ExamCode'];
    
    include '../reuse/connect.php';

    $sql = "UPDATE exams SET exam_title ='$exam_title', exam_datetime ='$exam_date', duration ='$time', total_question ='$question', marks_per_right_answer ='$score', created_on ='$date', status ='$status', exam_code ='$exam_code'
    WHERE id = $id";

    echo $sql;

    $result = mysqli_query($conn,$sql);

    if($result >0){
        header("Location:./info.php");
    }
?>