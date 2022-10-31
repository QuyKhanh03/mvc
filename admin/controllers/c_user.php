<?php
include("models/m_user.php");
@session_start();
class c_user
{
    public function checkLogin()
    {
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->saveLoginSession($username, $password);
            if (isset($_SESSION['admin'])) {
                header("location:home.php");
            } else {
                $_SESSION['error_login'] = "Sai thông tin đăng nhập";
                header("location:login.php");
            }
        }
        $view = "views/form/v_login.php";
        // include("templates/head1.php");
        include("templates/head.php");
        include("templates/content.php");
    }

    public function logout()
    {
        unset($_SESSION['admin']);
        unset($_SESSION['error_login']);
        header("location:login.php");
    }

    public function saveLoginSession($username, $password)
    {
        $m_user = new m_user();
        $user = $m_user->read_user_by_id_pass($username, $password);
        if (!empty($user)) {
            $_SESSION['admin'] = $user;
        }
    }
    public function deleteUser()
    {
        $deleteUser = new m_user();
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $result = $deleteUser->deleteUser($id);
            if ($result) {
                header("location:user.php");
            }
        }
    }
    public function index()
    {
        $show = new m_user();
        $list_user = $show->viewUser();
        $view = "views/user/v_user.php";
        include("templates/layout.php");
    }
    public function add()
    {
        if (isset($_POST['btn-submit'])) {
            $ten_nguoi_dung = $_POST["ten_nguoi_dung"];
            $ten_dang_nhap = $_POST["ten_dang_nhap"];
            $mat_khau = $_POST["mat_khau"];
            $user = new m_user();
            $result = $user->addUser($ten_nguoi_dung, $ten_dang_nhap, md5($mat_khau));
            if ($result) {
                echo "<script>alert('thành công')</script>";
                header("location:user.php");
            } else {
                echo "<script>alert('thêm không thành công')</script>";
            }
        }
        $view = "views/user/v_addUser.php";
        include("templates/layout.php");
    }

    public function editUsers()
    {
        if (isset($_GET['id'])) {
            $m_user = new m_user();
            $id = $_GET['id'];
            // echo $id;
            $user_detail = $m_user->read_user_by_id_user($id);
            if (isset($_POST['btn-submit'])) {
                $ten_nguoi_dung = $_POST["ten_nguoi_dung"];
                $ten_dang_nhap = $_POST["ten_dang_nhap"];
                $mat_khau = md5($_POST["mat_khau"]);
                $result = $m_user->editUser($ten_nguoi_dung, $ten_dang_nhap, $mat_khau,$id);
                if($result==true) {
                    echo "<script>alert('sửa thành công')</script>";
                    header("location:user.php");
                }else{
                    echo "fail";
                }
            }
            
        }
        $view = "views/user/v_editUser.php";
        include("templates/layout.php");
    }
}
