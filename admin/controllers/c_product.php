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
        if (isset($_POST['btn-submit'])) {
            $ten_san_pham = $_POST['ten_tieu_de'];
            $ma_loai = $_POST['trang_thai'];
            $mo_ta_chi_tiet = $_POST['trang_thai'];
            $don_gia = $_POST['trang_thai'];
            $giam_gia = $_POST['trang_thai'];
            $hinh = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] :"";
            $product = new m_product();
           $result = $product->addProduct($ten_san_pham,$ma_loai,$mo_ta_chi_tiet,$don_gia,$hinh,$giam_gia);
           if ($result) {
               if ($hinh != "") {
                   move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'],"../public/layout/imageproduct/".$hinh);
               }
               echo "<script>alert('thành công')</script>";
           } else {
               echo "<script>alert('thêm không thành công')</script>";
           }
        }
        $view = "views/product/v_addproduct.php";
        include ("templates/layout.php");
    }

    public function editproduct() {
        $m_product = new m_product();
        if (isset($_GET['ma_tieu_de'])) {
            $ma_tieu_de = $_GET['ma_tieu_de'];
            $product_detail = $m_product->read_prom_product_by_id_product($ma_tieu_de);
            if ($_POST['btn-submit']) {
                $ten_tieu_de = $_POST['ten_tieu_de'];
                $trang_thai = $_POST['trang_thai'];
                $hinh_tieu_de = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] :$product_detail->hinh;
            }
        }
        $view = "views/product/v_editproduct.php";
        include ("templates/layout.php");
    }
    public function deleteProduct() {
        $m_product = new m_product();
        $view = "views/product/v_editproduct.php";
        include ("templates/layout.php");
    }
    // tạo được view editproduct
}