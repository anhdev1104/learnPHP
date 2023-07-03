<?php 
    /**
     * Cookies: 
     * - Lưu trữ dữ liệu trên trình duyệt ở phía client
     * - Dữ liệu này có thể được lấy ra khi ta mở trang hiện tại 1 lần nữa
     */
    echo "<h1>Cookies in PHP</h1>";
    // save data to cookies
    setcookie('name', 'Anh', time() + 24*3600); //Hàm setcookie() được sử dụng để thiết lập một cookie trong một trình duyệt.
    // tham số thứ 1 là key, thứ 2 là value, thứ 3 là thời hạn kết thúc của cookies
    // 1 month = 24*3600*30
    // check the existing cookie 
    if (isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];
    }
    // cách xoá cookies
    setcookie('name', '', time() - 24*3600); // thời điểm hiện tại trừ đi 24h trước

?>