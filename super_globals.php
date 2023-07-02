<?php 
    echo "<h1>Superglobals in PHP</h1>";
    // print_r($_SERVER);
    // print_r($_GET);
    // print_r($_POST);
    //chúng ta sẽ gửi dữ liệu qua url hoặc form bằng $_GET / $_POST
    // echo $_GET['name'];
    // echo $_GET['age'];
    //check
    //Hàm isset() trong PHP được sử dụng để kiểm tra xem một biến đã được khởi tạo và có giá trị hay không. Nó trả về true nếu biến tồn tại và có giá trị, và trả về false nếu biến không tồn tại hoặc có giá trị là null.
    // if (isset($_GET['name'])) {
    //     echo $_GET['name'];
    // } else {
    //     echo "Biến không tồn tại hoặc không có giá trị";
    // }

    // if (isset($_GET['age'])) {
    //     echo $_GET['age'];
    // } else {
    //     echo "Biến không tồn tại hoặc không có giá trị";
    // }

    //check coalescing
    //có thể sử dụng hàm htmlspecialchars() để trách hacker ăn cắp thông tin
    $email = $_POST['email'] ?? ''; // biến name được gán cho 1 giá trị nếu giá trị đó không có hoặc rỗng thì sẽ lấy giá trị mặc định sau dấu '??'
    echo $email;
    $password = htmlspecialchars($_POST['password']) ?? '';
    echo $password;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- $_SERVER['PHP_SELF'] là một biến siêu toàn cục chứa đường dẫn của tập tin hiện tại được thực thi. -->
    <!-- method="GET": gửi qua trình duyệt, qua đường link URL -->
    <!-- method="POST": không gửi qua trình duyệt, đóng gọi lại bằng 1 obj và gửi đi -->
    <!-- có thể sử dụng hàm htmlspecialchars() để trách hacker ăn cắp thông tin -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <h2>Login to your account</h2>
        <div> 
            <label for="email">Email: </label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" name="password">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
