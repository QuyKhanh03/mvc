<?php 
    require ("database.php");
    class m_comment extends database {
        public function addComment($id_bl,$noi_dung,$ten_nguoi_dung,$id) {
            $sql = "insert into binh_luan (id_bl,noi_dung,id,ten_nguoi_dung) values (?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute(array($id_bl,$noi_dung,$ten_nguoi_dung,$id));
        }
    }
?>