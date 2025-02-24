
<?php
include "view/header.php";
include "view/nav.php";
include "class/product_class.php";
?>
<?php 
$product = new product();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $insert_product = $product ->insert_product($_POST,$_FILES);
}
?>



<div id="container">
        <p> <a href="productadd.php">Thêm sản phẩm</a> / <a href="productlist.php">Danh sách sản phẩm</a></p>
        
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Tạo sản phẩm mới</h2>
            <div class="data-add">
                <div>
                    <figcaption>Tên sản phẩm</figcaption>
                    <input name="product_name" type="text" >
                </div>
                <div>
                    <figcaption>Số lượng</figcaption>
                    <input name="product_number" type="text"> 
                </div>
                <div>
                    <figcaption>Tình trạng</figcaption>
                    <input name="product_status" type="text">
                </div>
            </div>
            <div class="data-add">
                <div>
                    <figcaption>Danh mục</figcaption>
                    <input name="product_category" type="text">
                </div>
                <div>
                    <figcaption>Giá bán</figcaption>
                    <input name="product_price" type="text">
                </div>
                
            </div>
            <div class="data-describe">
                <p><b>Ảnh sản phẩm</b></p>
                <input name="product_img" multiple type="file">
                <p><b>Mô tả sản phẩm</b></p>
                <textarea  name="product_desc" id="describe" style="width: 90%; height: 200px;"></textarea>
                <button type="submit">Thêm</button>
            </div>
        </form>
    </div>
        
</body>
</html>