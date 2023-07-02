<?php 
    //echo "String functions in PHP";
    $full_name = 'Bui Hoang Anh';
    // echo "length: ".strlen($full_name); //độ dài của biến
    // echo "<br/>";
    //reverse a string
    // echo strrev($full_name); //đảo ngược giá trị của biến
    //convert to lower
    // echo strtolower($full_name); //đổi thành chữ thường
    // echo strtoupper($full_name); //đổi thành chữ hoa

    //find and replace
    echo str_replace(' ', '-', $full_name); //hàm str_replace() dùng để tìm kiếm phần tử tìm kiếm phần tử và sửa đổi. Đối số thứ nhất là phần tử cần tìm - đối số thứ 2 là giá trị muốn thay thế - đối số thứ 3 là tham số biến cần được áp dụng sửa đổi
    if (str_starts_with(strtolower($full_name), 'bui')) {
        echo "His name start with Bui <br/>";
    } 
    if (str_ends_with(strtolower($full_name), 'anh')) {
        echo "His name end with Anh <br/>";
    }

    echo "<h1>HTML String</h1>";
    // trường hợp muốn lờ đi trình biên dịch của trình duyệt, viết gì in ra đấy
    echo htmlspecialchars("<h1>HTML String</h1>"); // hàm htmlspecialchars() sẽ in ra những gì mình viết ra lên html
    echo "<br/>";
    // echo "<script>alert('This is JavaScript code')</script>";
    echo htmlspecialchars("<script>alert('This is JavaScript code')</script>");
    printf('<br/> %s like %s', 'Anh', 'Poscher');
    printf('<br/> PI = %f', 3.14);

?>