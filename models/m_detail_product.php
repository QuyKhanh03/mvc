<?php
require_once ("database.php");
class m_detail_product extends database
{
    public function read_product() {
        $id = $_GET["id"];
        $sql = "select * from san_pham where id = '$id'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function ma_loai() {
        $sql = "select * from san_pham,loai_san_pham where san_pham.ma_loai = loai_san_pham.ma_loai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function san_phamcl($id_cate) {
        $id = $_GET["id"];
        $sql = "select * from san_pham,loai_san_pham where
         san_pham.ma_loai = '$id_cate' and loai_san_pham.ma_loai = '$id_cate' and san_pham.id <> '$id'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    // =============================================
    // bình luận
    public function insert_comment($id_user, $id_product, $desc) {
        $sql = "insert into binh_luan(noi_dung, id_user, id_product)
                values ('$desc', '$id_user', '$id_product')";
        $this->setQuery($sql);
        return $this->execute(array($id_user, $id_product, $desc));
    } 

    // laays ra tất cả bình luận
    public function read_comment($id) {
        // echo $id;
        $sql = "select * from binh_luan where id_product = '$id'";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    // đếm số lượng bình luận
    public function read_count_comment($id) {
        // echo $id;
        $sql = "select count(*) from binh_luan where id_product = '$id'";
        $this->setQuery($sql);
        return $this->loadRecord(array($id));
    }
    // sản phẩm liên quan

    
}