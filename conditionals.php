<?php 
    echo "we talk about conditionals in PHP <br/>";
    // $age = "20";
    // if ($age >= 18) {
    //     echo "Bạn đã đủ quyền được bầu cử";
    // } else {
    //     echo "Bạn chưa đủ tuổi!";
    // }

    // $dateTime = date("F j"); //hàm date() dùng để hiện thị thời gian (F: Tháng hiện tại, j: Ngày hiện tại)
    // echo $dateTime;
    
    // $hours = date('H'); // H: Giờ hiện tại
    // echo $hours;
    // echo "<br/>";
    // if ($hours < 12) {
    //     echo "Good Morning !";
    // } else if ($hours >= 12 && $hours <= 17) {
    //     echo "Good Afternoon";
    // } else {
    //     echo "Good Evening";
    // }

    // $comments = [
    //     'Good', 'i like it', 'How are you?'
    // ];
    // if (!empty($comments)) { // emty() kiểm tra xem mảng có rỗng hay không, nếu mảng rỗng sẽ trả về true
    //     //not emty()
    //     echo "There are some comment!";
    // } else {
    //     echo "No Comment";
    // }
    
    // Toán tử 3 ngôi
    // echo !empty($comments) ? "There are some comment!" : "No comment";

    // $firstComment = !empty($comments) ? $comments[1] : "No comment";

    // Toán tử coalescing operator: lấy giá trị mặc định nếu nó NULL sẽ đúng với đk
    // $firstComment = $comments[0] ?? "No comment";
    // echo $firstComment;
    $primaryColor = 'Green';
    switch ($primaryColor) {
        case 'Red':
            echo "You choose Red";
            break;
        case 'Purple':
            echo "You choose Purple";
            break;
        case 'Blue': 
            echo "You choose Blue";
            break;
        default: 
            echo "Not Red, Purple, and Blue";
    }

?>