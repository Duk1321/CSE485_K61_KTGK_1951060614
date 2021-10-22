<?php
        include '../reuse/header.php';
        include '../reuse/connect.php';
?>

<div class="container">
    <h1 class="text-center bg-dark text-light">HỆ THỐNG QUẢN LÝ TRẮC NGHIỆM TRỰC TUYẾN</h1>
</div>

<div class="container pt-5">
    <a href="add.php"><button type="button" class="btn btn-success">Thêm</button></a>
</div>


<div class="container pt-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên bài thi</th>  
                <th scope="col">Exam DateTime</th>
                <th scope="col">Duration(Minutes)</th>
                <th scope="col">Total Question</th>
                <th scope="col">Mark per Answer</th>
                <th scope="col">Create On</th>
                <th scope="col">Status</th>
                <th scope="col">Exam Code</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $sql = "SELECT * FROM exams";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                         while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<td>'.$row['id'].'</td>';
                            echo '<td>'.$row['exam_title'].'</td>';
                            echo '<td>'.$row['exam_datetime'].'</td>';
                            echo '<td>'.$row['duration'].'</td>';
                            echo '<td>'.$row['total_question'].'</td>';
                            echo '<td>'.$row['marks_per_right_answer'].'</td>';
                            echo '<td>'.$row['created_on'].'</td>';
                            echo '<td>'.$row['status'].'</td>';
                            echo '<td>'.$row['exam_code'].'</td>';
                            echo 
                            '<td>
                                <form>
                                    <button type="button" class="btn btn-success">Chỉnh sửa</button>
                                    <button type="button" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>';
                        echo '</tr>';
                        }
                    }
            ?>
        </tbody>
    </table>
</div>

<?php
        include '../reuse/footer.php';
?>