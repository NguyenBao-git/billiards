<?php 
include "view/header.php";
include "view/nav.php";
include "class/product_class.php";
?>

<?php 
    if(!isset($_SESSION['login'])){
        header('localtion: productlist.php');
    }
?>

<?php 
$product = new product();
$show_product = $product->show_product();
?>

<div id="container">
        <p><a href="">Danh sách sản phẩm</a></p>
        <form action="" style="border-bottom: 1px solid white;" method="post">
            <div class="btn">
                <button class="btn-add"><a href="productadd.php">Tạo sản phẩm mới</a></button>
                <button class="btn-dele">Xóa tất cả</button>
            </div>
            <div class="nav-product">
                <input name="content" type="text" placeholder="Danh mục">
                <button style="padding: 5px 10px;" type="submit" name="btnSearch"><a href="productSearch.php?product_id=<?php echo $result['product_id'] ?>">Tìm kiếm</a></button>
            </div>
            <table style="margin-top:20px; text-align:center;">
                <tr>
                    <th><input type="radio"></th>
                    <th>STT</th>
                    <th>Mã sản phẩm </th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tình trạng</th>                    
                    <th>Danh mục</th>
                    <th>Giá tiền</th>
                    <th>Hình ảnh</th>
                    <th>Chức năng</th>
                </tr>

                <?php 
                if($show_product){$i=0;
                    while($result = $show_product->fetch_assoc()){$i++;
                        ?>
                            <tr>
                                <td><input type="radio"></td>
                                <td><?php echo $i ?></td>
                                <td><?php echo $result['product_id'] ?></td>
                                <td><?php echo $result['product_name'] ?></td>
                                <td><?php echo $result['product_number'] ?></td>
                                <td><?php echo $result['product_status'] ?></td>
                                <td><?php echo $result['product_category'] ?></td>
                                <td><?php echo $result['product_price'] ?></td>
                                <td> <img style="width: 70px;" src="<?php echo $result['product_img'] ?>" alt=""> </td>
                                <?php 
                                    $product_img_array = explode("*", $result['product_img']);
                                ?>
                                <td><a href="productedit.php?product_id=<?php echo $result['product_id'] ?>">Sửa</a> | <a href="productdelete.php?product_id=<?php echo $result['product_id']?>">Xóa</a></td>
                            </tr>
                            
                        <?php
                    }
                }
                ?> 
            </table>
        </form>
    </div>