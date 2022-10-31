<?php
require_once ("database.php");
class m_product extends database
{
    public function read_product($search) {
        $sql = "select * from san_pham where san_pham.ten_san_pham like '%$search%'";
        $this->setQuery($sql);
        return $this->loadAllRows(array($search));
    }
    public function read_product_woman() {
        $sql = "select * from san_pham,loai_san_pham where san_pham.ma_loai =15 and loai_san_pham.ma_loai=15";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_product_Man() {
        $sql = "select * from san_pham,loai_san_pham where san_pham.ma_loai =9 and loai_san_pham.ma_loai=9";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}