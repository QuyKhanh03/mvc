<?php
require_once ("database.php");
class m_product extends database {
    public function insert_prom_product($ma_tieu_de,$ten_tieu_de,$hinh,$trang_thai) {
        $sql = "insert into tieu_de values (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_tieu_de,$ten_tieu_de,$hinh,$trang_thai));
    }
    public function addProduct($ten_san_pham,$ma_loai,$mo_ta_chi_tiet,$don_gia,$hinh,$giam_gia) {
        $sql = "insert into san_pham values(?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ten_san_pham,$ma_loai,$mo_ta_chi_tiet,$don_gia,$hinh,$giam_gia));
    }
    public function read_product() {
        $sql = "select * from san_pham";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_prom_product_by_id_product($ma_tieu_de) {
        $sql = "select * from tieu_de where ma_tieu_de = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_tieu_de));
    }
    public function edit_prom_product($ma_tieu_de,$ten_tieu_de,$hinh,$trang_thai) {
        $sql = "update tieu_de set ten_tieu_de = ?,hinh = ?,trang_thai = ? where
                ma_tieu_de = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_tieu_de,$hinh,$trang_thai,$ma_tieu_de));
    }
    public function delete_product($id) {
        $sql = "delete from san_pham where id = ?";
        $this->setQuery($sql);
        return $this->execute($id);
    }
}