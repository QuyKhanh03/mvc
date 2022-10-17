<?php 
    require_once "database.php";
    class m_hang_hoa extends database {
        public function doc_hang_hoa() {
            $sql = "select * from hang_hoa";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
    }
?>