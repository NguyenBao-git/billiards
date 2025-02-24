<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        body{display: flex;
            justify-content: center;
            background-color: var(--bg-color);
        }
        form{
            margin-top: 50px;
            display: flex;
            justify-content: center;
            width: 400px;
            background-color: var(--main-color);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(206, 206, 206, 0.24);        }
        h1{
            text-align: center;
            color: var(--text-color);
            margin-top: 20px;
        }
        input{
            margin-top: 5px;
            width: 300px;
            padding: 8px;
            border-radius: 8px;
        }
        button{
            margin-top: 20px;
            width: 320px;
            border-radius: 5px;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-size: 18px;
            padding: 8px;
        }
        p{
            color: var(--text-color);
            margin-top: 10px;
            text-align: center;
        }
        a{color: rgb(0, 183, 255); text-decoration: none;}
    </style>
</head>
<body>
    <form action="">
        <div id="form-register">
            <h1>Đăng kí</h1>
            <input type="text" id="name-register" placeholder="Tên đăng kí" required><br>
            <input type="email" id="email" name="email" required placeholder="Email"><br>
            <input type="number" id="phone-number" name="phone" required placeholder="Số điện thoại"><br>            
            <input type="password" id="password" name="password" required placeholder="Mật khẩu"><br>
            <input type="password" id="confirm-password" name="confirm-password" required placeholder="Nhập lại mật khẩu"><br>
            <button type="submit">Đăng kí</button>
            <p>Bạn đã có tài khoản <a href="signin.php">Đăng nhập</a></p>
        </div>
    </form>
    <?php 
    
    
    ?>
    
</body>
</html>