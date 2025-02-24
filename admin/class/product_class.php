<?php 
include "db/database.php";
?>

<?php

class product{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function insert_product() {
        $product_name = $_POST['product_name'];
        $product_number = $_POST['product_number'];
        $product_status = $_POST['product_status'];
        $product_category = $_POST['product_category'];
        $product_price = $_POST['product_price'];
        $product_img = $_FILES['product_img']['name'];
        move_uploaded_file($_FILES['product_img']['tmp_name'],"uploads/".$_FILES['product_img']['name']);
        $product_desc = $_POST['product_desc'];

        $query = "INSERT INTO tbl_product(
            product_name,
            product_number,
            product_status,
            product_category,
            product_price,
            product_img,
            product_desc) VALUES (
            '$product_name',
            '$product_number',
            '$product_status',
            '$product_category',
            '$product_price',
            '$product_img',
            '$product_desc')";
            if($query == true){
                echo '<script type="text/javascript">
                    window.onload = function () { alert("Thêm sản phẩm thành công"); }
                    </script>';
            }else{
                echo '<script type="text/javascript">
                window.onload = function(){ alert("sản phẩm thêm thất bại!!"); }
                </script>';
            }
            $result = $this -> db->insert($query);
            header('Location:productlist.php');
            return $result;
    }
    public function show_product(){
        $query = "SELECT * FROM tbl_product ORDER BY product_id DESC";
        $result = $this->db->select($query);
        return $result;
    }


    public function get_product($product_id){
        $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
        $result = $this->db->select($query) -> fetch_assoc();
        return $result;
    }
    public function update_product($data,$product_id){
        $product_name = $data['product_name'];
        $product_number = $data['product_number'];
        $product_status = $data['product_status'];
        $product_category = $data['product_category'];
        $product_price = $data['product_price'];
        $product_img = $_FILES['product_img']['name']; 
        move_uploaded_file($_FILES['product_img']['tmp_name'],"uploads/".$_FILES['product_img']['name']);
        $product_desc = $data['product_desc'];
        $query = "UPDATE tbl_product SET 
            product_name = '$product_name',
            product_number = '$product_number',
            product_status = '$product_status',
            product_category = '$product_category',
            product_price = '$product_price',
            product_img = '$product_img',  
            product_desc = '$product_desc' 
            WHERE product_id = '$product_id'";

            if($query == true){
                echo '<script type="text/javascript">
                    window.onload = function () { alert("Cập nhật sản phẩm thành công"); }
                    </script>';
            } else{
                echo '<script type="text/javascript">
                window.onload = function(){ alert("Cập nhật sản phẩm thất bại!!"); }
                </script>';
            }
            header('Location:productlist.php');
            $result = $this -> db->update($query);
            
            return $result;
    }
    public function delete_product($product_id){
        $query = "DELETE FROM tbl_product WHERE product_id = '$product_id'";
        $result = $this->db->delete($query);
        header('Location:productlist.php');
        return $result;
    }    
}


// Class dùng để đăng nhập vào hệ thống
class user{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    function check_login($username, $password) {  
        // Sử dụng prepared statements để bảo vệ khỏi SQL Injection  
        $stmt = $this->db->prepare("SELECT * FROM dangki WHERE user = '".$username."' AND pass = '".$password."'");  
        $stmt->bind_param("sss", $username, $password); // Gán tham số  
        $stmt->execute();  
        $result = $stmt->get_result(); // Lấy kết quả 
        
        $user_data = $result->fetch_assoc(); 
        return  $user_data[0]['role'];
        // if ($result->num_rows > 0) {  
        //     $user_data =$result->fetch_assoc(); // Lấy thông tin người dùng  
        //     return $user_data['role']; // Trả về role  
        // }
        //  else {  
        //     return null; // Không tìm thấy người dùng  
        // }  
    }  
    }


?>