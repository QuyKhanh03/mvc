<?php
session_start();
include ("models/m_lognIn.php");


class c_lognIn {
    public function checkLogin() {
        if (isset($_POST['login'])) {
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $mat_khau = $_POST['mat_khau'];
            $this->saveLoginSession($ten_dang_nhap,$mat_khau);
            if (isset($_SESSION['user'])) {
                header('location:index.php');
            }  else {
                $_SESSION['error_login'] = "Sai thông tin đăng nhập";
                header("location:lognIn.php");
            }

        }
        $view = "views/form/v_lognIn.php";
        include("templates/front-end/head1.php");
        include("templates/front-end/head.php");
        include("templates/front-end/content.php");
    }
    

    public function logout() {
        unset($_SESSION['user']);
        unset($_SESSION['error_login']);
        header("location:lognIn.php");
    }

    public function saveLoginSession($ten_dang_nhap,$mat_khau) {
        $m_lognIn = new m_lognIn();
        $user = $m_lognIn->read_user_by_id_pass($ten_dang_nhap,$mat_khau);
        if(!empty($user)) {
              $_SESSION['user'] = $user;
        }
    }
}