<?php
@session_start();
if (isset($_SESSION['admin'])) {
    include ("controllers/c_banner.php");
    $banner = new c_banner();
    $banner->showbanner();
} else {
    header("location:login.php");
}
?>