<?php
require_once ("database.php");
class m_detail_product extends database
{
    public function read_product() {
        $id = $_GET["id"];
        // echo $id;
        $sql = "select * from san_pham where id = '$id'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function ma_loai() {
        $sql1 = "select * from san_pham,loai_san_pham where san_pham.ma_loai = loai_san_pham.ma_loai";
        $this->setQuery($sql1);
        return $this->loadAllRows();
    }
}