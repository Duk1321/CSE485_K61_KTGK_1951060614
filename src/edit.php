<?php
    include '../reuse/header.php';
    include '../reuse/connect.php';
?>


<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM exams WHERE id = $id";;
    $result1 = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result1) > 0){
        while($row=mysqli_fetch_assoc($result1)){
            $exam_title = $row['exam_title'];
            $exam_date = $row['exam_datetime'];
            $time = $row['duration'];
            $question = $row['total_question'];
            $score = $row['marks_per_right_answer'];
            $date = $row['created_on'];
            $status = $row['status'];
            $exam_code = $row['exam_code'];
        }
    }

?>

<div class="container">
    <h1 class="text-center bg-dark text-light">Thông tin của người hiến máu</h1>
</div>
<div class="container pt-5">
    <form action="update.php" method="POST">
    <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" id="txtID" name="txtID" value="<?php echo $id ?>" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Tên bài thi</label>
            <input type="text" class="form-control" id="txtName" name="txtExamName" value="<?php echo $exam_title ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày thi:</label>
            <input type="text" class="form-control" id="input_date_on" name="input_date_on" value="<?php echo $exam_date ?>">
            <!-- <input type="datetime-local" id="input_date_on" name="input_date_on" value="<?php echo $exam_date ?>"> -->
        </div>
        <div class="mb-3">
            <label class="form-label">Thời gian làm bài</label>
            <input type="text" class="form-control" id="txtDuration" name="txtDuration" value="<?php echo $time ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Tổng số câu</label>
            <input type="text" class="form-control" id="txtQuestion" name="txtQuestion" value="<?php echo $question ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Điểm số mỗi câu</label>
            <input type="text" class="form-control" id="txtPhone" name="txtScore" value="<?php echo $score ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày tạo:</label>
            <input type="date" id="start" name="txtDate" value="<?php echo $date ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Trạng thái</label>
            <input type="text" class="form-control" id="txtStatus" name="txtStatus" value="<?php echo  $status ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Mã bài thi</label>
            <input type="text" class="form-control" id="ExamCode" name="ExamCode" value="<?php echo  $exam_code ?>">
        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
</div>
</div>

<?php
    include '../reuse/footer.php';
?>