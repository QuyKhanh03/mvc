<?php 
    require_once "database.php";
    class m_comment extends database {
        public function Cmt() {
            $sql = "select * from binh_luan";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }

        public function deleteCmt($id) {
            $sql = "delete from binh_luan where id_bl = ?";
            // $sql = "delete from san_pham where id = ?";
            $this->setQuery($sql);
            return $this->execute(array($id));
        }

    }


?>