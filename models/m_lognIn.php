
<?php
include_once ("database.php");
class m_lognIn extends database {
    //
    public function read_user_by_id_pass($ten_nguoi_dung,$mat_khau) {
        $sql = "select * from nguoi_dung where ten_dang_nhap = ? and mat_khau=? ";
        $this->setQuery($sql);
        return $this->loadRow(array($ten_nguoi_dung,md5($mat_khau)));
    }
}