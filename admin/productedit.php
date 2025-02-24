<?php 
include "view/header.php";
include "view/nav.php";
include "class/product_class.php";
?>

<?php 
    $product = new product;
    


    if($_SERVER['REQUEST_METHOD'] =='GET'){
        $product_id = $_GET['product_id'];
        $get_product = $product ->get_product($product_id);
        
    }

    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $product_id = $_GET['product_id'];
        $data = $_POST;
        $update_product = $product -> update_product($data,$product_id);
    }
 
?>


<div id="container">
        <p> <a href="productadd.php">Thêm sản phẩm</a> / <a href="productlist.php">Danh sách sản phẩm</a></p>
        
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Sửa sản phẩm</h2>
            <div class="data-add">
                <div>
                    <figcaption>Tên sản phẩm</figcaption>
                    <input name="product_name" type="text" 
                    value=" <?php echo $get_product['product_name'] ?> ">
                </div>
                <div>
                    <figcaption>Số lượng</figcaption>
                    <input name="product_number" type="text"
                    value=" <?php echo $get_product['product_number'] ?> "> 
                </div>
                <div>
                    <figcaption>Tình trạng</figcaption>
                    <input name="product_status" type="text"
                    value=" <?php echo $get_product['product_status'] ?> ">
                </div>
            </div>
            <div class="data-add">
                <div>
                    <figcaption>Danh mục</figcaption>
                    <input name="product_category" type="text"
                    value=" <?php echo $get_product['product_category'] ?> ">
                </div>
                <div>
                    <figcaption>Giá bán</figcaption>
                    <input name="product_price" type="text"
                    value=" <?php echo $get_product['product_price'] ?> ">
                </div>
                
            </div>
            <div class="data-describe">
                <p><b>Ảnh sản phẩm</b></p>
                <input name="product_img" multiple type="file" 
                value="<?php echo $get_product['product_img'] ?>">
                <div><img src="" alt="" width="100px" height="150px"></div>
                <p><b>Mô tả sản phẩm</b></p>
                <textarea value=" <?php echo $get_product['product_desc'] ?> "  name="product_desc" id="describe" style="width: 90%; height: 200px;"></textarea>
                <button type="submit">Sửa</button>
            </div>
        </form>
    </div>
        
</body>
</html>