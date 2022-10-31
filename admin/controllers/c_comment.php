<?php
class c_comment {
    public function index() {
        include ("models/m_comment.php");
        $m_cmt = new m_comment();
        $cmt = $m_cmt->Cmt();
        $view = "views/comment/v_comment.php";
       include ("templates/layout.php");
    }
    public function DeleteCmt() {
        include("models/m_comment.php");
        $m_cmt = new m_comment();
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $result = $m_cmt->deleteCmt($id);
            if($result) {
                echo "<script>alert('thành công')</script>";
                header("location:comment.php");
            }else {
                echo "fail";
            }
        }
    }
}
