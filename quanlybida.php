<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="container.css" type="text/css">
    <title>Billiard Club</title>
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
        /* nav phần đầu của trang */
        body{background-color: var(--bg-color); margin: 0; padding: 0;}

        #signin-register{
            display: flex;
            align-items: end;
            position: absolute;
            left: 80%;
            background-color: rgba(255, 255, 255, 0.178);
            border-radius: 10px;
        }
        #form{margin: 10px;
            border: 3px solid rgba(0, 0, 0, 0.281);
            border-radius: 7px;
            background-color: #7f5af0;
            border-radius: 5px;
            padding: 8px 20px 8px 20px;   
        }
        #form>a{text-decoration: none; color: var(--text-color);}


        #nav{
            background-image: url('.../images/background.jpg');
            width: 100%;height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;

        }
        #nav>ul{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin-bottom: 40px;
            list-style-type: none;
        
        }
            
        #nav>ul>li>a{
            text-decoration: none;
            color: var(--text-color);
            font-size: 20px;
            font-family: 'SF-Pro-Display-Semibold';
            background-color: #7f5af0;
            padding: 7px 20px;
            border-radius: 8px;
        
        }
        #nav>ul>li>a:hover{
            background-color: #fffffe;
            color: rgba(255, 0, 0, 0.86);
        }


        .content{
            margin: 0 100px 0 100px;
        }
        h2{
            margin: 10px 0 ;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: #fffffe;
        }
        #news-text{margin: 50px 0 50px 100px;}
        .content>p{color: #94a1b2;}

        /* tìm kiếm */
        #search{
            margin-top: 20px;
            display: flex;
            justify-content: center;
            height: 50px;
        }

        a{text-decoration: none;}
        input{padding: 5px; border-radius: 5px; width: 500px;}
        button{padding: 7px; border: 1px solid var(--bgr-color); border-radius: 5px; background-color: var(--bgr-color); color: var(--text-color);}
        /* Content- product-list */


        #product-list{display: flex; justify-content: space-between;}
        #product-list>img{width: 200px;height: 160px;}
        .one>a{
            display: flex;
            flex-direction: row;
            position: absolute;    
        }
        .one{
            background-color: #7f5af0;}

        .six:hover{background-size: 220px;} 
        #product-list>a{
            margin-top: 111px;
            padding: 10px 25px 5px 24.5px;
            text-decoration: none;
            font-size: 14px;
            color: white;
            text-decoration: none; 
            background-color: #7f5af0b0;}


        /* container chính container-new-list */
        #container{
            margin: 0 20px 0 100px;
        }

        #grid-news-list{
            width: 100%;
            height: 600px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        .grid-news-item-one{
            display: flex;
            flex-direction: column;

        }
        .grid-news-item-one>a{
            position: absolute;
            margin-top: 430px;
            font-size: 25px;
            width: 660px;
            padding: 20px;
            background-color: var(--bd-color);    
        }
        .grid-news-item-one>img{
            width: 700px;
            height: 500px;
        }
        #grid-news-items>img{ width: 270px; height: 150px;}
        #grid-news-items>a{ 
            position: absolute;
            padding: 10px;
            width: 250px; 
            margin-top: 90px;
        }
        #grid-news-col-row{
            display: flex;
            flex-direction: column;
            height: 500px;
            justify-content: space-around;
        }
        .grid-news-item-three{
            display: flex;

        }
        .grid-news-item-three>a{background-color: var(--bd-color);}

        /* =------------ */
        #grid-news-list-row{
            display: flex;
            flex-direction: row;
            justify-content: space-around;}
        .list-four{
            display: flex;
            flex-direction: column;
            justify-content: flex-end;}
        .list-four>img{width: 400px; height: 250px;}
        .list-four>a{
            position: absolute; 
            background-color: var(--bd-color) ;
            padding: 20px;
            width: 360px;}

        .left{background: #72757e;}

        /* footer cuối của trang */
        *{padding: 0; margin: 0;}
        #footer{
            display: flex;
            justify-content: space-around;
            background-color: rgba(128, 128, 128, 0.299);
            padding: 10px;
            margin-top: 20px;}
        .infomation>p{color: var(--text-color);}
        .infomation-link{color: var(--text-color);}
    </style>
</head>
<body>
    <div id="signin-register">
        <div id="form" class="signin">
            <a href="admin/signin.php">Đăng nhập</a>
        </div>
        <div id="form" class="register">
            <a href="admin/register.php">Đăng kí</a>
        </div>
    </div>
    <div id="nav">
        <ul>
            <li><a href="quanlybida.php">Trang chủ</a></li>
            <li><a href="dichvu.php">Dịch vụ</a></li>
            <li><a href="giaidau.php">Giải đấu</a></li>
            <li><a href="lienhe.php">liên hệ</a></li>
        </ul> 
    </div>
    <div id="search">
        <div class="search-bar" >
            <input type="text" placeholder="Tìm kiếm">
            <button>Tìm kiếm</button>
        </div>
    </div>

        <div class="content">
            <h2>Trang chủ</h2>
            <p>Bi-a (tiếng Pháp: billard /bijar/)[1] hay bida, là nhóm các trò chơi thể thao kỹ năng thường chơi với một cây cơ được sử dụng để tác động vào các quả bóng bi-a, di chuyển chúng xung quanh một bàn bi-a phủ vải bao quanh bởi các đệm cao su.</p>
            <p>Trong lịch sử, tuy thuật ngữ thể thao bi-a quen thuộc vẫn còn được mọi người sử dụng như là một nhãn chung cho tất cả các trò chơi như vậy, việc sử dụng đã tập trung vào các nghĩa hẹp hơn trong các vùng khác nhau của thế giới. Ví dụ, tại Anh và Úc, "bi-a" thường đề cập riêng cho trò chơi bi-a Anh, trong khi tại Mỹ và Canada nó đôi khi được dùng để chỉ một trận đấu đặc biệt hay đẳng cấp cao, hoặc cho tất cả các trò chơi dùng cơ nói chung, phụ thuộc vào phương ngữ và ngữ cảnh. Còn ở nước khác, môn này được chia làm 3 kiểu: carome 3 băng, carome 2 băng hoặc free-shot (dành cho những người chơi tam giác).</p>
        </div>
        <div class="content">
            <h2>Dịch vụ</h2>
            <p>Our billiard club offers a variety of services, including billiards, pool, and snooker. We also have a tennis court available for your convenience.</p>
            <div id="product-list" width="100%">
                <div id="product-list" class="one">
                    <img src="https://kkkingbilliards.vn/wp-content/uploads/2023/08/imperial-min-600x360.jpg" alt="">
                    <a href="">Bàn bi-a KKKing Imperial 
                        <br> 65.000.000 </a>
                </div>
                <div id="product-list" class="one">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmAx_Njg5KQi6C8oVVvxsZO00hgXdZssaoCWgZ2FfjfCGxuK5YUNz96oVvETh3b2VrOtQ&usqp=CAU" alt="">
                    <a href="">Bàn bi-a KKKing Imperial 
                        <br> 65.000.000 </a>
                </div>
                <div id="product-list" class="one">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPm7ZdtXcnnmU0ajjtNc507goCrkm9UFBDFMkvyfaAxTjdLo68-pAb84BHChENj8pT4bI&usqp=CAU" alt="">
                    <a href="">Bàn bi-a KKKing Imperial 
                        <br> 65.000.000 </a>
                </div>
                <div id="product-list" class="one">
                    <img src="https://aplusbilliards.vn/public/upload/product/1686060766z3774928703361_f309eba69d6ea15d679bb6aa63de4e5d.jpg" alt="">
                    <a href="">Bàn bi-a KKKing Imperial 
                        <br> 65.000.000 </a>
                </div>
                <div id="product-list" class="one">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYozUBT9c4wxDLoVTPXgNYomEMX6wg4CwgG2GsEnIwzFJ4YY6su-hh4Ht6nTiK9khJ11E&usqp=CAU" alt="">
                    <a href="">Bàn bi-a KKKing Imperial 
                        <br> 65.000.000 </a>
                </div>
                <div id="product-list" class="one">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQla_Za3l__PblbfoUAYUBUwqe6fPqePbvtDyGa9bIIRXsKRpVmdrrBSia-xzMMJeQGamw&usqp=CAU" alt="">
                    <a href="">Bàn bi-a KKKing Imperial 
                        <br> 65.000.000 </a>
                </div>
            </div>
                
            
        </div>
        <h2 id="news-text">Tin tức mới nhất</h2>
        <section id="container" width="100%">
            <div id="grid-news" width="70%">
                <div id="grid-news-list">
                    <div class="grid-news-item-one">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAyJu-boFks-ZfC7BMlVouJ6Ut6Ycsfjoa2Q&s" alt="">
                        <a href="">Nữ cơ thủ trẻ tuổi gây chú ý ở giải Billiard</a>
                    </div>
                    <div id="grid-news-col-row">
                        <div id="grid-news-items"  class="grid-news-item-three">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnD20Qa9T3YiBnehWPFuJhVWkyCd_gsGqjxQ&s" alt="">
                            <a href="">Nữ cơ thủ trẻ tuổi gây chú ý ở giải Billiard</a>
                        </div>
                        <div id="grid-news-items" class="grid-news-item-three">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2Wa_PXixZQFbs-_JxtTftf1N4dQF5BbWNty7VnZAKGJj8YtS49TJ0UbXMOJJ5QY0QtcU&usqp=CAU" alt="">
                            <a href="">Nữ cơ thủ trẻ tuổi gây chú ý ở giải Billiard</a>
                        </div>
                    </div>
                </div>
            </div>
                <div id="grid-news-list-row">
                    <div class="grid-news list-four">
                        <img src="https://i.ytimg.com/vi/ih-cgJDHoFI/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDfJxZgJkOto180Vz4vPCxpS9j2Fw" alt="">
                        <a href="">Nữ cơ thủ trẻ tuổi gây chú ý ở giải Billiard</a>
                    </div>
                    <div class="grid-news list-four">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOm9t8_SvpRBF5V12O0R56fshazgwEdyO1LMmLLwpcGq3K3szGFNOl5ay2KkVFBwhrm0M&usqp=CAU" alt="">
                        <a href="">Nữ cơ thủ trẻ tuổi gây chú ý ở giải Billiard</a>
                    </div>
                </div>
        </section>

    <div id="footer" width="100%">
        <div class="infomation" width="30%" >
            <p>Địa chỉ: ...................</p>
            <p>fanpage: ...............</p>
            <p>Liên hệ:......</p>
        </div>
        <div class="infomation-link" width="50%">
            <p>link đăng kí: <a href=""> http:...</a></p>
        </div>
    </div>
</body>
</html>