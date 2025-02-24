<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
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
        
        body{background-color: var(--bg-color);}
        #nav{
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;}
        #nav>ul{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin-bottom: 40px;    
            list-style-type: none;}
        #nav>ul>li>a{
            transition: all 0.3s;
            text-decoration: none;
            color: var(--text-color);
            font-size: 20px;
            font-family: 'SF-Pro-Display-Semibold';
            background-color: #7f5af0;
            padding: 7px 20px;
            border-radius: 8px;}
        #nav>ul>li>a:hover{
            background-color: #fffffe;
            color: rgba(255, 0, 0, 0.86);}

            /* ảnh backgound lien hệ */
        #background{
            background-image: url('../images/bgrlienhe.png');
            background-size: cover;
            height: 200px; }
            .font{
                height: 100px;   
                display: flex;
                flex-direction: column; 
            }
            .lienhe{
                text-align: center;
                color: var(--text-color);
                font-weight: 600;
                font-family: Arial, Helvetica, sans-serif;}
                .lienhe-btm{text-align: center;
                font-size: 20px;
                margin-top: 1px;
                color: var(--text-color);}
                .lienhe-btm>a{
                color: var(--text-color);
                text-decoration: none;
                }
        /* container chinsh */
        #container{
            display: flex;
            width: 100%;
            height: 400px;
            margin: 50px 100px;
            }
            #container-content{
                width: 40%;
                margin: 10px 20px;
            }
            #container-content>h1{
                width: 500px;
                padding-bottom: 5px;
                color: var(--sub-color);
                border-bottom: 1px solid white;
            }
            #container-content>p{
                color: #dcdcdcb8;
                font-size: 18px; }
        #container-input{
            width: 60%;
            margin-top: 30px;
        }
            .content-input{
                display: flex;
                flex-direction: column;
                margin-right: 200px;
            }
            input[type="text"]{width: 100%; padding: 7px;border-radius: 5px;
                border: 1px solid var(--bg-color);margin-bottom: 5px; }
            button{width: 100px;
                padding: 10px;}
        #footer{display: flex; flex-direction: column; }
            .footer-content{display: flex;
                background-color: var(--main-color);
                justify-content: space-around;}
            .infomation>p{color: var(--text-color);}
            .infomation-link{color: var(--text-color);}

    </style>
</head>
<body>
    <div id="nav">
        <ul>
            <li><a href="quanlybida.php">Trang chủ</a></li>
            <li><a href="dichvu.php">Dịch vụ</a></li>
            <li><a href="giaidau.php">Giải đấu</a></li>
            <li><a href="lienhe.php">liên hệ</a></li>
        </ul> 
    </div>
    <div id="background">   
            <div class="font"> 
                <h1 class="lienhe">Liên hệ</h1> 
                <p class="lienhe-btm"> 
                    <a href="quanlybida.html">Trang chủ >></a> liên hệ
                </p>
            </div>
    </div>
    <div id="container">
        <div id="container-content">
            <h1>GENZ BILLIARD CLUB</h2>
            <p>Địa chỉ: 12 đức thắng - Quận Bắc Từ Liêm- Hà Nội</p>
            <p>Email: genz@billiardclub.com</p>
            <p>SĐT: 024.3456.7890</p>  
        </div>
        <div id="container-input">
            <form class="content-input"  action="">
                <input type="text" placeholder="Họ & Tên">
                <input type="text" placeholder="Số điện thoại">
                <input type="text" placeholder="Email">
                <input style="width: 100%; height: 100px;" type="text" placeholder="Nội dung">
                <button>Gửi tin nhắn</button>
            </form>
        </div>
    </div>
    <div id="footer" width="100%">
        <div class="footer-content">
            <div class="infomation" width="30%" >
                <p>Địa chỉ: ...................</p>
                <p>fanpage: ...............</p>
                <p>Liên hệ:......</p>
            </div>
            <div class="infomation-link" width="50%">
                <p>link đăng kí: <a href=""> http:...</a></p>
            </div>
        </div>
        
    </div>
</body>
</html>