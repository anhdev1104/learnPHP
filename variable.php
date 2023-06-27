<?php 
    // echo "<p>we talk about variable!</p>";
    $name = 'Anh'; //string 
    $age = 19; //int
    // echo $age;
    // $has_car = false;
    // echo $has_car; // không hiển thị ra vì giá trị = false
    $has_smartphone = true;
    // echo $has_smartphone; //1
    // var_dump($has_smartphone); //hiển thị chi tiết kiểu dữ liệu
    $price = 22.55; //float
    var_dump($price);
    echo '<br/>';
    // nối chuỗi 
    // echo $name.' is '.$age.' years old'.'<br/>';
    // this is better
    echo "$name is $age years old";
    echo "<br/>";
    // biểu thức
    echo '1' + '2'; // 3 (php string cộng với nhau ra kết quả của biểu thức khác với JS sẽ trả về nối chuỗi)
    $sum = '5' + '5';
    echo "<br/>";
    echo $sum;

    // constants (hằng số)
    //khác với biến hằng số không cần dấu '$'
    define('SERVER_NAME', 'localhost');
    define('DATABASE_NAME', 'test_db');
    echo "<br/>";
    echo "server: ".SERVER_NAME.', db: '.DATABASE_NAME;
    
    

?>