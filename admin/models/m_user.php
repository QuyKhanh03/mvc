<?php
include_once ("database.php");
class m_user extends database {
    //
    public function read_user_by_id_pass($username,$password) {
        $sql = "select * from admin where ten_dang_nhap = ? and mat_khau = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($username,md5($password)));
        //gọi và xử lý tính năng đăng nhập nếu thành công thì hiển thị ra 123 rồi dừng
        //nếu không thành công quay trở lại trang login và hiển thị ra bạn đã sai tài khoản
    }
    public function addUser($ten_nguoi_dung,$ten_dang_nhap,$mat_khau){
        $sql = "insert into nguoi_dung(ten_nguoi_dung,ten_dang_nhap,mat_khau)values(?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ten_nguoi_dung,$ten_dang_nhap,$mat_khau));
    }
    public function deleteUser($id) {
        $sql = "delete from nguoi_dung where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


    public function editUser($ten_nguoi_dung,$ten_dang_nhap,$mat_khau,$id) {
        $sql = "update nguoi_dung set ten_nguoi_dung = ?, ten_dang_nhap = ?,mat_khau =?  where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_nguoi_dung,$ten_dang_nhap,$mat_khau,$id));
    }


    public function viewUser() {
        $sql = "select * from nguoi_dung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_user_by_id_user($id) {
        $sql = "select * from nguoi_dung where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
}

