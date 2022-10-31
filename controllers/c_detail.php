<?php

@session_start();
class c_detail_product
{
    public function index()
    {
        include("models/m_detail_product.php");
        $m_detail_product = new m_detail_product();
        $products_detail = $m_detail_product->read_product();
        
        foreach($products_detail as $key => $val) {
            $id_cate = $val->ma_loai;
            $splq = $m_detail_product->san_phamcl($id_cate);
        }
        // $splq = $m_detail_product->splq();
        $ma_loai = $m_detail_product->ma_loai();
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $list_bl = $m_detail_product->read_comment($id);
            $count_bl = $m_detail_product->read_count_comment($id);
        }
        $view = "views/product/v_detail_product.php";
        include("templates/front-end/layout.php");
    }
    // insert
    public function c_insert_cmt()
    {
        include("models/m_detail_product.php");
        if (isset($_POST['btn-comment'])) {
            if (isset($_SESSION["user"])) {
                $message = $_POST['message'];
                $user = $_POST['user'];
                $product = $_POST['product'];
                $m_detail_product = new m_detail_product();
                $result = $m_detail_product->insert_comment($user, $product, $message);
                if ($result) {
                    header('location: detail.php?id=' . $product);
                }
            }else {
                header("location:lognIn.php");
            }
            
        }
    }
    
}
