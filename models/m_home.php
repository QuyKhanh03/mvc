<?php 
    require_once "database.php";
    class m_home extends database {
        public function read_home() {
            $sql = "select * from san_pham,loai_san_pham where san_pham.ma_loai = loai_san_pham.ma_loai";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
    }
?>