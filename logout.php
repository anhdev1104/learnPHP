<?php 
    session_start();
    session_destroy(); //Hàm session_destroy() được sử dụng để hủy và xóa tất cả các dữ liệu được lưu trữ trong phiên làm việc hiện tại. 
    header('Location: ./sessions.php');

?>