<?php
include ("models/m_user.php");
@session_start();
class c_user {
    public function checkLogin() {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->saveLoginSession($username,$password);
            if (isset($_SESSION['user'])) {
                //nhảy vào trang index // kiểm tra có session mới cho nhảy
                //xử lý nút đăng xuất
                header("location:product.php");
            }  else {
                $_SESSION['error_login'] = "Sai thông tin đăng nhập";
                header("location:login.php");
            }
        }
        $view = "views/form/v_login.php";
        // include("templates/head1.php");
        include("templates/head.php");
        include("templates/content.php");
    }

    public function logout() {
        unset($_SESSION['user']);
        unset($_SESSION['error_login']);
        header("location:login.php");
    }

    public function saveLoginSession($username,$password) {
        $m_user = new m_user();
        $user = $m_user->read_user_by_id_pass($username,$password);
        if(!empty($user)) {
              $_SESSION['user'] = $user;
        }
    }
}