<?php 
    session_start();
    include "views/form/v_register.php";
    include "models/m_register.php";
class c_register {
    public function add_user() {
        if(isset($_POST["btn"])){
            $ten_nguoi_dung = $_POST["ten_nguoi_dung"]  ;
            $ten_dang_nhap = $_POST["ten_dang_nhap"];
            $mat_khau = md5($_POST["mat_khau"]);
            $nguoi_dung = new m_register();
            $result = $nguoi_dung->add_user($ten_nguoi_dung,$ten_dang_nhap,$mat_khau);
            header("location:lognIn.php");
        }
        $view = "views/form/v_register";
        include("templates/front-end/head1.php");
    }
    public function showRe() {
        $m_register = new m_register();
        $regiter = $m_register->read_Re();
        $view = "views/form/v_register.php";
        include ("templates/layout.php");
    }
}
?>