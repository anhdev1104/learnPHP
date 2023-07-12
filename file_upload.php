<?php
    // echo "<h1>File upload in PHP</h1>";
    if (isset($_POST['submit'])) {
        $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif']; // mảng chứa đuôi file được cho upload
        $file_name = $_FILES['upload']['name'];
        //empty() trả về true nêú biến đó rỗng
        if (!empty($file_name)) { //nếu biến đó không rỗng 
            $file_size = $_FILES['upload']['size'];
            $file_tmp_name = $_FILES['upload']['tmp_name'];
            $generated_file_name = time() . '-' . $file_name;
            $destination_path = "uploads/$generated_file_name";
            $file_extensions = explode('.', $file_name);
            // hàm end() dùng để lấy phần tử cuối. hàm explode() dùng để bổ xẻ sâu kí tự, đối số thứ 1 là string muốn bổ xẻ, đối số thứ 2 truyền vào đối số muốn bỏ xẻ.
            $file_extensions = strtolower(end($file_extensions)); //để chắc ăn ta dùng hàm strtolower() để chuyển hết sang chữ thường tránh gặp lỗi.
            // echo "$file_name, <br/> $file_size, <br/> $file_tmp_name, <br/> $destination_path, <br/> $file_extensions";
            // validate file
            if (in_array($file_extensions, $permitted_extensions)) {
                // xử lý việc upload từ phía client tên giống nhau không bị đè và mất file ảnh.

                //hàm in_array() dùng để kiểm tra phần tử trong mảng. tham số thứ 1 là giá trị mà bạn muốn kiểm tra, tham số thứ 2 là mảng trong đó bạn muốn kiểm tra sự tồn tại của giá trị.
                if ($file_size <= 1000000) {
                    //ok, di chuyển từ thư mục tạm thời / upload
                    move_uploaded_file($file_tmp_name, $destination_path);
                    //Hàm move_uploaded_file() trong PHP được sử dụng để di chuyển một tệp tin đã được tải lên từ một biểu mẫu (form) web vào một vị trí mới trên máy chủ.
                    // đối số thứ 1 là đường dẫn tạm thời đến tệp tin đã được tải lên. đối số thứ 2 là đường dẫn tới vị trí mới mà bạn muốn di chuyển tệp tin tới. 
                    $message = '<p style="color: green;">File upload success</p>';
                } else {
                    $message = '<p style="color: red;">File is too big</p>';
                }
            } else {
                $message = '<p style="color: red;">Invalid file type</p>';
            }
        } else {
            $message = '<p style="color: red;">No file selected, please try again</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>
<body>
    <h1>File upload in PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
    enctype="multipart/form-data"> 
    <!-- enctype="multipart/form-data" dùng để chia nhỏ từng biến upload lên  -->
    choose your images to upload
        <input type="file" name="upload">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php echo $message ?? '' //nếu không có $error_message sẽ hiện chuỗi rỗng?> 
</body>
</html>