<?php
class c_product {
    public function __construct()
    {
    }
    public function index() {
        include ("models/m_product.php");
        $m_product = new m_product();
        $search = "";
        if(isset($_GET["search"])) {
            $search = $_GET["search"];
        }
        $products = $m_product->read_product($search);
        $view = "views/listproduct/v_listproduct.php";
        include ("templates/front-end/layout.php");
    }
    public function ProductWoman() {
        include ("models/m_product.php");
        $m_prdWoman = new m_product();
        $prdWoman = $m_prdWoman->read_product_woman();
        $view = "views/product/v_productWoman.php";
        include ("templates/front-end/layout.php");
    }
    public function ProductMan() {
        include ("models/m_product.php");
        $m_prdWoman = new m_product();
        $prdMan = $m_prdWoman->read_product_Man();
        $view = "views/product/v_productMan.php";
        include ("templates/front-end/layout.php");
    }
    
    
}
?>