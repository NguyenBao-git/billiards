<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải đấu</title>
    <style>
        :root {
            --bgr-color: #504f4f73;
            --main-color: #191F3A;
            --sub-color: #EAA023;
            --text-color: #ffffff;
            --bg-color: #0C1023;
            --bd-color: #666666b7;
            --bl-color: black;
        }
        body{background-color: var(--bg-color);}
        #nav{
            
            background-color: var(--bd-color);
            display: flex;
            flex-direction: column;
            justify-content: flex-end; 
            }
        #nav>ul{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            list-style-type: none;}  
        #nav>ul>li>a{
            text-decoration: none;
            color: var(--text-color);
            font-size: 20px;
            font-family: 'SF-Pro-Display-Semibold';
            background-color: #7f5af0b7;
            padding: 7px 20px;
            border-radius: 8px;}
            h2{color: var(--sub-color); text-align: center;}
        #table-compete{display: flex;
            justify-content: center;}
        #table-compete>img{width: 80%; height: 600px;}
        #container-row-2{
            width: 100%;
            height: 1000px;
            display: flex;
            flex-direction: row;
            margin-top: 50px;}
        /* compete left cacs giải đấu */

        #container-compete{
            width: 75%;
            display: flex;
            flex-direction: column;}
        #container-compete>h3{margin-left: 50px;
            color: var(--text-color);
            padding-bottom: 5px;
            border-bottom: 1px solid white;
            width: 90%;}
        a{text-decoration: none;
            padding: 10px;}
        p{text-align: center;
            color: rgba(255, 255, 255, 0.521);}

        button{padding: 10px;
            background-color: rgba(33, 253, 81, 0.644);
            border: 1px solid rgba(0, 165, 36, 0.438);
            border-radius: 10px;
            font-size: 15px;}
        #compete-list-left{

            margin-top: 50px;
            margin-left: 50px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;}
        .row-list-one{
            background-color: var(--main-color);
            width: 280px;
            display: flex;
            flex-direction: column;
            border-radius: 10px;}

        .row-list-one>img{
            width: 280px; height: 180px;
            border-radius: 5px;}
        .row-list-one>a>figcaption{
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 5px;
            font-weight: bold;
            color: var(--sub-color);
            font-size: 22px;
            text-align: center;}

        /* compete-right bangr tin nổi bật */
        #compete-list-right{
            padding: 0 30px 30px 30px;
            width: 25%;
            height: 650px;
            border-radius: 7px;
            margin-left: 30px;
            background-color: var(--main-color);
        }
        #compete-list-right>h3{
            color: var(--text-color);
            width: 100%;
            padding-bottom: 5px;
            text-align: center;
            border-bottom: 1px solid white;
        }
        #compete-news{
            margin-top: 30px;
        }
        .compete-news-list{
            display: flex;
            flex-direction: column;
        }

        .news-list-one{
            height: 90px;
            display: flex;
            background-color: #0c102398;
            margin-bottom: 20px;
            align-items: center;
            border-radius: 5px;
        }
        .news-list-one>a>figcaption{
            padding-top: 10px;
            font-size: 18px;
            color: var(--sub-color);
        }
        .news-list-one>img{width: 80px; height: 90px;
            margin-right: 10px;
            border-radius: 5px;}
        #footer{background-color: var(--main-color); padding: 10px;}
    </style>
</head>
<body>
    <div id="nav">
        <ul>
            <li><a href="quanlybida.php">Trang chủ</a></li>
            <li><a href="dichvu.php">Dịch vụ</a></li>
            <li><a href="giaudau.php">Giải đấu</a></li>
            <li><a href="lienhe.php">liên hệ</a></li>
        </ul> 
    </div>
    <h2>NỔI BẬT</h2>
    <div id="table-compete"> 
        <img src="https://cdn.ithethao.vn//uploads/2023/03/03/lich-thi-dau-bida-hom-nay-ngay3-3-co-vu-cac-co-thu-viet-nam-du-giai-the-gioi_154476.jpg" alt="">
    </div>
    <div id="container-row-2">
        <div id="container-compete">
            <h3>GIẢI ĐẤU</h3>
            <div id="compete-list-left">
                <div class="row-list-one">
                    <img src="https://www.bida369.com/wp-content/uploads/2024/08/Dick_jaspers_bida369.jpeg" alt="">
                    <a href="">
                        <figcaption>Giải bi-a Quốc tế</figcaption>
                        <p>Trước khi bước vào World Cup billiards carom 3 băng Porto (Bồ Đào Nha), Trần Quyết Chiến giữ vị trí số 1 thế giới. Anh...</p>
                    </a>
                    <button>Đăng kí</button>
                </div>
                <div class="row-list-one">
                    <img src="https://www.bida369.com/wp-content/uploads/2024/07/giai-dau-bida-carom-3c-duoc-to-chuc-o-noi-khong-tuong-bida-369.jpg" alt="">
                    <a href="">
                        <figcaption>Giải đấu bi-a tại Hà Nội</figcaption>
                        <p>Giải billiards carom 3 băng, thuộc festival thể thao Huế năm 2024 ra đời với mong muốn góp phần vào sự phát triển của bộ...</p>
                    </a>
                    <button>Đăng kí</button>
                </div>
                <div class="row-list-one">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMb6-W5aZcn2oES0yX6w-KeVJYfvZWEoWLpg&s" alt="">
                    <a href="">
                        <figcaption>Giải đấu bi-a hạng A-B</figcaption>
                        <p>Giải Billiards & Snooker WCBS Championship 2024 sẽ diễn ra từ ngày 25 đến 28 tháng 7 tại Kielce, Ba Lan, quy tụ...</p>
                    </a>
                    <button>Đăng kí</button>
                </div>
            </div>
            <div id="compete-list-left">
                <div class="row-list-one">
                    <img src="https://www.bida369.com/wp-content/uploads/2024/08/Dick_jaspers_bida369.jpeg" alt="">
                    <a href="">
                        <figcaption>Giải bi-a Quốc tế</figcaption>
                        <p>Trước khi bước vào World Cup billiards carom 3 băng Porto (Bồ Đào Nha), Trần Quyết Chiến giữ vị trí số 1 thế giới. Anh...</p>
                    </a>
                    <button>Đăng kí</button>
                </div>
                <div class="row-list-one">
                    <img src="https://www.bida369.com/wp-content/uploads/2024/07/giai-dau-bida-carom-3c-duoc-to-chuc-o-noi-khong-tuong-bida-369.jpg" alt="">
                    <a href="">
                        <figcaption>Giải đấu bi-a tại Hà Nội</figcaption>
                        <p>Giải billiards carom 3 băng, thuộc festival thể thao Huế năm 2024 ra đời với mong muốn góp phần vào sự phát triển của bộ...</p>
                    </a>
                    <button>Đăng kí</button>
                </div>
                <div class="row-list-one">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMb6-W5aZcn2oES0yX6w-KeVJYfvZWEoWLpg&s" alt="">
                    <a href="">
                        <figcaption>Giải đấu bi-a hạng A-B</figcaption>
                        <p>Giải Billiards & Snooker WCBS Championship 2024 sẽ diễn ra từ ngày 25 đến 28 tháng 7 tại Kielce, Ba Lan, quy tụ...</p>
                    </a>
                    <button>Đăng kí</button>
                </div>
            </div>
        </div>
        <div id="compete-list-right">
            <h3>BẢNG TIN GIẢI ĐẤU</h3>
            <div id="compete-news">
                <div class="compete-news-list">
                    <div class="news-list-one">
                        <img src="https://www.bida369.com/wp-content/uploads/2024/07/giai-billiards-carom-3-bang-quoc-te-binh-duong-2024-bida369-Large.jpeg" alt="">
                        <a href="">
                            <figcaption>Trần Quyết Chiến đánh mất ngôi vương vào tay Dick Jaspers</figcaption>
                            <p>Chức năng bình luận bị tắt</p>
                        </a>
                    </div>
                    <div class="news-list-one">
                        <img src="https://www.bida369.com/wp-content/uploads/2024/07/giai-billiards-snooker-wcbs-championship-2024_bida369.jpeg" alt="">
                        <a href="">
                            <figcaption>Giải Đấu Bida Carom 3C Được Tổ Chức Ở Nơi Không Tưởng</figcaption>
                            <p>Chức năng bình luận bị tắt</p>
                        </a>
                    </div>
                    <div class="news-list-one">
                        <img src="https://www.bida369.com/wp-content/uploads/2024/07/bo-nut-so-cup-ngan-dai-ngan-BIDA369-01.png" alt="">
                        <a href="">
                            <figcaption>Quy Cách Xếp Hạng Billiards World Championship</figcaption>
                            <p>Chức năng bình luận bị tắt</p>
                        </a>
                    </div>
                    <div class="news-list-one">
                        <img src="https://www.bida369.com/wp-content/uploads/2024/07/giai-billiards-carom-3-bang-quoc-te-binh-duong-2024-bida369-Large.jpeg" alt="">
                        <a href="">
                            <figcaption>Ngô Đình Nại đạt phong độ cao ở giải Billiards PBA Team League</figcaption>
                            <p>Chức năng bình luận bị tắt</p>
                        </a>
                    </div>
                    <div class="news-list-one">
                        <img src="https://www.bida369.com/wp-content/uploads/2024/07/ngo-dinh-nai-dat-phong-do-cao-o-giai-billiards-pba-team-league-bida369.jpeg" alt="">
                        <a href="">
                            <figcaption>Ngô Đình Nại đạt phong độ cao ở giải Billiards PBA Team League</figcaption>
                            <p>Chức năng bình luận bị tắt</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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