<?php
@session_start();
if (isset($_SESSION['admin'])) {
    include ("controllers/c_banner.php");
    $banner = new c_banner();
    $banner->editbanner();
} else {
    header("location:login.php");
}
?>