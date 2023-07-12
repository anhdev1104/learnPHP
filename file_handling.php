<?php
    echo "<h1>File Handling in PHP</h1>";
    // read / write file on the server
    $file_path = './fruits.txt'; // chứa đường dẫn chi tiết đến file txt
    if (file_exists($file_path)) { // hàm file_exists() dùng để kiểm tra xem đã có đường dẫn hay chưa
        // echo readfile($file_path); // hàm readfile() dùng để in ra nội dung của file txt, in ra 31 là dung lượng tính theo bytes
        $file_handle = fopen($file_path, 'r'); // hàm fopen() dùng để mở file tại đường dẫn đó, đối số thứ 2 là 'r' chỉ để đọc
        $file_content = fread($file_handle, filesize($file_path)); //hàm fread() dùng để đọc nội dung của $file_handle , hàm filesize() dùng để lấy kích thước tệp muốn đọc
        fclose($file_handle); // hàm fclose() dùng để đóng file lại
        echo $file_content;
    } else {
        // not exists thì sẽ tạo 1 file mới
        $file_handle = fopen($file_path, 'w'); // mở file, 'w' dùng để ghi file
        $file_content = 'kiwi' . PHP_EOL . 'mango' . PHP_EOL . 'Cherry'; // PHP_EOL dùng để xuống dòng
        fwrite($file_handle, $file_content); // fwrite() dùng để ghi file vào nội dung 
        fclose($file_handle); // có hàm fopen() bắc buộc phải có fclose() có thể đưa ra ngoài if else vì trước sau gì cũng đóng file

    }
?>