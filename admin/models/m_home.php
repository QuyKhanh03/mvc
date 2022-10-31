<?php 
    require_once "database.php";
    class m_home extends database {
        public function totalUser() {
            $sql = "select count(*) from nguoi_dung";
            $this->setQuery($sql);
            return $this->loadRecord();
        }
        public function totalPrd() {
            $sql = "select count(*) from san_pham";
            $this->setQuery($sql);
            return $this->loadRecord();
        }
        public function totalCmt() {
            $sql = "select count(*) from binh_luan";
            $this->setQuery($sql);
            return $this->loadRecord();
        }
        public function totalCate() {
            $sql = "select count(*) from loai_san_pham";
            $this->setQuery($sql);
            return $this->loadRecord();
        }
    }


?>