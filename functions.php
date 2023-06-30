<?php 
    // echo "This lesson in about functions";
    // $y = 2004;
    // function sayHello($name) { //function with "arguments"
    //     // $x = 125;
    //     // echo $y; // không thể truy cập biến $y vì không cùng phạm vi
    //     // global $y; // sử dụng global để có thể truy cập biến $y nằm ngoài phạm vi block
    //     echo "Hello! $name";
    // }
    // // echo $x; //undefined. Không thể truy cập biến nằm ngoài phạm vi block
    // sayHello('Anh'); //call function with "parameters"

    // function sum($a = 0, $b = 0) { //có thể truyền giá trị mặc định cho tham số
    //     return $a + $b;
    // }       
    // echo sum(10, 20);

    // $multiply = function($a, $b) {
    //     return $a * $b;
    // }; // khi 1 function gán cho 1 biến thì bắt buộc phải có dấu ';' ở cuối function
    // echo $multiply(50, 2);

    //arrow function 
    // $substract = fn($a, $b) => $a - $b;
    // echo $substract(6, 2);

    // Hàm có sẵn
    // $listName = ['Anh', 'Huy', 'Tiến', 'Được'];
    // echo "number of items: ".count($listName); //hàm count() dùng để tính ra tổng số phần tử có trong mảng
    // search inside array
    // var_dump(in_array('Huy', $listName)); // hàm in_array() dùng để tìm kiếm phần tử có trong mảng và trả về giá trị bool
    // thêm phần tử vào mảng
    // array_push($listName, 'Tín', 'Trình'); // hàm array_push() dùng để thêm phần tử vào mảng, giá trị thứ 1 là tên mảng cần thêm, giá trị thứ 2 là tên phần tử cần thêm, có thể thêm nhìêu phần tử
    // array_unshift($listName, 'itachi'); //Hàm array_unshift() dùng để thêm phần tử vào đầu mảng
    // array_pop($listName); //hàm array_pop() dùng để xoá phần tử cuối cùng của mảng
    // array_shift($listName); //hàm array_shift() dùng để xoá đi phần tử đầu tiên
    // unset($listName[3]); //hàm unset() dùng để xoá phần tử chỉ định trong mảng và xoá cả index biến mất hoàn toàn khỏi mảng
    // print_r($listName);
    // $chunked_array = array_chunk($listName, 2); //hàm array_chunk dùng để băm nhỏ mảng ra đối số thứ 1 là mảng muốn băm nhỏ, đối số thứ 2 là số phần tử chiếm tối đa của 1 mảng nhỏ
    print_r($chunked_array);

    $array_one = [1, 3, 5];
    $array_two = [2, 4, 6];
    $merged_array = array_merge($array_one, $array_two); //hàm array_merge() dùng để gộp 2 mảng lại, đối số là 2 mảng muốn gộp
    
    // toán tử rãi mảng
    $array_three = [...$merged_array]; //nhân bản của mảng, các phần tử của mảng nhân bản đều giống mảng ban đầu, tạo ta 1 vùng nhớ mới nếu sửa lại 1 trong 2 mảng thì không liên quan gì nhau vì nằm ở 2 vùng nhớ khác nhau. 
    $merged_array[0] = 1111111;
    print_r($merged_array);
    print_r($array_three);
    $array_four = [...$array_one, ...$array_two];
    print_r($array_four);

    //combine two array (kết hợp 2 array)
    $a = ['name', 'email', 'age'];
    $b = ['Anh', 'hoanganhdev04@gmail.com', 19];
    $c = array_combine($a, $b); //hàm array_combine() dùng để kết hợp 2 mảng, đối số thứ nhất là mảng key, đối số thứ 2 là mảng value
    print_r($c);
    print_r(array_keys($c));
    print_r(array_values($c));

    print_r(array_flip($c)); //ít dùng, tác dụng dùng để đổi ngược vị trí key và value cho nhau

    //array form a range
    $numbers = range(0, 10);
    print_r($numbers);

    //map an array to another array 
    // with the same size, but other values
    // array_map() tạo ra 1 mảng mới có độ rộng mảng giống với mảng cũ, nhưng khác nhau về value
    $squared_numbers = array_map(function($each_number) { 
        return $each_number * $each_number;
    }, $numbers);
    print_r($squared_numbers);

    //filter an array. //dùng để lọc ra phần tử muốn lấy 
    $filtered_numbers = array_filter($numbers, 
    fn($each_number) => $each_number % 2 == 0);
    print_r($filtered_numbers);
?>