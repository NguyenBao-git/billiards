
<?php 
include "class/product_class.php";
session_start();
?>
<?php
$user= new user();
if((isset($_POST['dangnhap'])) && ($_POST['dangnhap'])) {  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    
    // Kiểm tra thông tin đăng nhập  
    $role =$user-> check_login($username, $password);  
    $_SESSION['role'] = $role; // Lưu role vào session  

    // Kiểm tra role và điều hướng  
    if ($role == 1) {  
        // Nếu là admin  
        header('location: produclist.php');  
      
    } else {  
        // Nếu không phải admin  
        header('location: ../quanlybida.php');  
       
    }  
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        :root {
            --bgr-color: #504f4f73;
            --main-color: #191F3A;
            --sub-color: #EAA023;
            --text-color: #ffffff;
            --bg-color: #0C1023;
            --bd-color: #ffffff91;
            --bl-color: black;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--bg-color);
        }
        h1{text-align: center; color: var(--text-color);}
        form{
            margin-top: 50px;
            padding: 20px;
            border-radius: 10px;
            background-color: var(--main-color);
            width: 400px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(206, 206, 206, 0.24);
        }
        input[type="text"], input[type="password"]{
            border-radius: 10px;
            border: none;
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
        }
        button{
            background-color: var(--bg-color);
            border-radius: 5px;
            color: var(--text-color);
            padding: 10px 50px;
            border: 1px solid var(--bg-color);
        }
        p{
            color: var(--text-color);
            margin-top: 10px;
        }
        a{text-decoration: none; color: rgb(0, 183, 255);}
    </style>
</head>
<body>
    <form action="" method="post">
    <h1>Đăng nhập</h1>

        <input type="text" name="user" placeholder="Tên đăng nhập" required><br>
        <input type="password" name="pass" placeholder="Mật khẩu" required>
        <button type="submit" name="login">Đăng nhập</button>
        <p>Bạn chưa có tài khoản <a href="register.php">Đăng kí</a></p>
    </form>
    
</body>
</html>