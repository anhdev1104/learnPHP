<?php 
    echo "<h1>Sessions in PHP</h1>";
    
    session_start();
    if (isset($_POST['submit'])) { //kiểm tra xem đã bấm submit chưa
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS); // lọc thông tin tránh bị lộ thông tin ra bên ngoài
        $password = $_POST['password'];

        if ($email == 'abcd@gmail.com' && $password == '12345') {
            $_SESSION['email'] = $email;
            header('Location: ./dashboard.php'); // hàm header() dùng để chuyển sang trang khác, Location: là đường link của trang muốn chuyển đến.

        } else {
            echo "Incorrect email/password";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions in PHP</title>
</head>
<body>
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
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>