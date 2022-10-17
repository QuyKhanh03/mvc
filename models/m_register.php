<?php 
    include "database.php";
    class m_register extends database {
        public function add_user($ten_nguoi_dung,$ten_dang_nhap,$mat_khau) {
            $sql = "insert into nguoi_dung(ten_nguoi_dung,ten_dang_nhap,mat_khau) 
            values(?,?,?)";
            $this->setQuery($sql);
            return $this-> execute(array($ten_nguoi_dung,$ten_dang_nhap,$mat_khau,)); 
        }
        public function read_Re() {
            $sql1 = "select * from nguoi_dung";
            $this->setQuery($sql1);
            return $this->loadAllRows();
        }
    }
?>