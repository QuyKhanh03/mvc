<?php
include ("models/m_product.php");
class c_product {
    public function showproduct() {
        $m_product = new m_product();
        $products = $m_product->read_product();
        $view = "views/product/v_product.php";
        include ("templates/layout.php");
    }
    public function add() {
        $product = new m_product();
        $read_prd_cate = $product->read_cate();
        if (isset($_POST['btn-submit'])) {
            $ten_san_pham = $_POST['ten_san_pham'];
            $chose = $_POST['chose'];
            $mo_ta_chi_tiet = $_POST['mo_ta'];
            $don_gia = $_POST['don_gia'];
            $giam_gia = $_POST['giam_gia'];
            $hinh = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] :"";
            
            $result = $product->addProduct($ten_san_pham,$chose,$mo_ta_chi_tiet,$don_gia,$hinh,$giam_gia);
           if ($result) {
               if ($hinh != "") {
                   move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'],"public/layout/img/product/".$hinh);
               }
               echo "<script>alert('thành công')</script>";
               header("location:product.php");
           } else {
               echo "<script>alert('thêm không thành công')</script>";
           }
        }
        $view = "views/product/v_addProduct.php";
        include ("templates/layout.php");
    }

    public function editproduct()
    {
        if (isset($_GET['id'])) {
            $m_product = new m_product();
            $read_prd_cate = $m_product->read_cate();
            $id = $_GET['id'];
            $product_detail = $m_product->read_prom_product_by_id_product($id);
            if (isset($_POST['btn-submit'])) {
                $ten_san_pham = $_POST["ten_san_pham"];
                $chose = $_POST['chose'];
                $mo_ta_chi_tiet = $_POST["mo_ta_chi_tiet"];
                $hinh = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] :"";
                $giam_gia = $_POST["giam_gia"];
                $don_gia = $_POST["don_gia"];
                $result = $m_product->edit_prom_product($ten_san_pham,$chose,$mo_ta_chi_tiet,$hinh,$giam_gia,$don_gia,$id);
                if($result) {
                    if ($hinh != "") {
                        move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'],"../public/layout/img/product/".$hinh);
                    }
                    echo "<script>alert('thành công')</script>";
                    header("location:product.php");
                }else{
                    echo "fail";
                }
            }
            
        }
        $view = "views/product/v_editProduct.php";
        include("templates/layout.php");
    }


    public function deleteProduct() {
        $deletePrd = new m_product();
        if(isset($_GET["id"])) {
            $id=$_GET["id"];
             $result = $deletePrd->delete_product($id);
             if($result) {
                header("location:product.php");
             }else {
                echo "fail";
             }
        }
    }
    // tạo được view editproduct
}
?>
