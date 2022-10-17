<?php 
    class c_hang_hoa{
        public function index() {
            include ("./models/m_hang_hoa.php");
            $m_hang_hoa = new m_hang_hoa();
            $hang_hoas = $m_hang_hoa->doc_hang_hoa();
            // echo "<pre>";
            // echo print_r($hang_hoas);
            // trả về mảng dữ liệu hàng hóa
            //gọi đường dẫn views
            // $view = "./views/hang_hoa/v_hang_hoa.php";
            $view = "views/hang_hoa/v_hang_hoa.php";
            include ("./templates/front-end/layout.php");
        }
    }


?>