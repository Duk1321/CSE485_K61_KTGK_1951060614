<?php
        include './reuse/header.php';
        include './reuse/connect.php';
?>

<div class="container">
    <h1 class="text-center bg-dark text-light">THÊM BÀI</h1>
</div>
<div class="container pt-5">
    <form action="" method="POST">
        <div class="mb-3">
            <label class="form-label">Tên bài thi</label>
            <input type="text" class="form-control" id="txtName" name="txtExamName">
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày thi</label>
            <input type="text" class="form-control" id="txtE_Date" name="txtE_Date">
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
            <label class="form-label">Trạng thái</label>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item" type="button">Action</button></li>
                    <li><button class="dropdown-item" type="button">Another action</button></li>
                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                </ul>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Mã bài thi</label>
            <input type="text" class="form-control" id="ExamCode" name="ExamCode">
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>

<?php
        include './reuse/footer.php';
?>