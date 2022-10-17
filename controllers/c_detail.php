<?php
class c_detail_product {
    public function index() {
        include ("models/m_detail_product.php");
        $m_detail_product = new m_detail_product();
        $products_detail = $m_detail_product->read_product();
        $m_detail_product1 = new m_detail_product();
        $ma_loai = $m_detail_product->ma_loai();
        $view = "views/product/v_detail_product.php";
        include ("templates/front-end/layout.php");
    }
}
?>