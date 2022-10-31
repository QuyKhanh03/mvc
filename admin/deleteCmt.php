<?php
@session_start();
if (isset($_SESSION['admin'])) {
    include ("controllers/c_comment.php");
    $banner = new c_comment();
    $banner->DeleteCmt();
} else {
    header("location:login.php");
}
?>