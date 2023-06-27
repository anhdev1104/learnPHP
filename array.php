<?php 
    // echo "we talk about Arrays";
    // echo "<br/>";
    // $some_numbers = [1, 2, 3, 4, 5];
    // print_r($some_numbers); //in ra theo format cây array
    // echo "<br/>";
    // $fruits = ['apple', 'banana', 'melon'];
    // print_r($fruits);
    // echo $fruits[1]; //banana

    // //associative array 
    // $color = [
    //     1 => 'Red',
    //     3 => 'Blue',
    //     5 => 'Pink',
    // ];
    // echo "<br/>";
    // echo $color[3];

    // $person = [
    //     "fullName" => "Bui Hoang Anh",
    //     "age" => 19,
    //     "address" => "Quang Nam"
    // ];

    // echo "<br/>";
    // echo $person["age"];

    $listPersons = [
        [
            "fullName" => "Bui Hoang Anh",
            "age" => 19,
            "address" => "Quang Nam"
        ],
        [
            "fullName" => "Tran Anh Duoc",
            "age" => 19,
            "address" => "Quang Nam"
        ],
        [
            "fullName" => "Huynh Dinh Cong Huy",
            "age" => 19,
            "address" => "Quang Nam"
        ],
    ];
    // print_r($listPersons);
    // print_r($listPersons[1]);

    // echo $listPersons[1]["fullName"];
    // echo $listPersons[2]["address"];

    var_dump(json_encode($listPersons)); //chuyển dữ liệu code thành chuỗi JSON
?>

