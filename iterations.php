<?php 
    // echo "we talk about iterations(loop) <br/>";

    // for ($i = 0; $i <= 10; $i++) {
    //     echo "i = $i <br/>";
    // }

    // $i = 0;
    // while ($i < 20) {
    //     echo "i = $i <br/>";
    //     // never ending
    //     $i++;
    // }

    // do {
    //     echo "i = $i <br/>";
    //     $i++;
    // } while ($i < 30);

    //foreach
    $fruits = ['apple', 'banana', 'orange', 'lemon'];
    // for ($i = 0; $i < count($fruits); $i++) {
    //     echo "$fruits[$i] <br/>";
    // } 

    foreach ($fruits as $index => $fruit) {
        echo "$index - $fruit <br/>";
    }

    $person = [
        'fullname' => 'Bùi Hoàng Anh',
        'email' => 'leancity2004@gmail.com',
        'age' => 19,
    ];
    foreach ($person as $key => $value) {
        echo "<p>$key: $value</p>";
    }
?>