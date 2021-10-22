<?php
        include '../reuse/header.php';
        include '../reuse/connect.php';
?>

<div class="container">
    <h1 class="text-center bg-dark text-light">THÊM BÀI</h1>
</div>
<div class="container pt-5">
    <form action="process_add.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Tên bài thi</label>
            <input type="text" class="form-control" id="txtName" name="txtExamName">
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày thi</label>
            <input type="datetime-local" id="input_date_on" name="input_date_on">
        </div>
        <div class="mb-3">
            <label class="form-label">Thời gian làm bài</label>
            <input type="text" class="form-control" id="txtDuration" name="txtDuration">
        </div>
        <div class="mb-3">
            <label class="form-label">Tổng số câu</label>
            <input type="text" class="form-control" id="txtQuestion" name="txtQuestion">
        </div>
        <div class="mb-3">
            <label class="form-label">Điểm số mỗi câu</label>
            <input type="text" class="form-control" id="txtPhone" name="txtScore">
        </div>
        <div class="mb-3">
            <label class="form-label">Trạng thái:</label>
            <!-- <input type="text" class="form-control" id="txtStatus" name="txtStatus"> -->
            <select name="txtStatus">
                <option value="Pending">Pending</option>
                <option value="Created">Created</option>
                <option value="Started">Started</option>
                <option value="Completed">Completed</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Mã bài thi</label>
            <input type="text" class="form-control" id="ExamCode" name="ExamCode">
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>

<?php
        include '../reuse/footer.php';
?>