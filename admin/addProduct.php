<?php
@session_start();
if (isset($_SESSION['user'])) {
    include ("controllers/c_product.php.php");
    $banner = new c_product();
    $banner->add();
} else {
    header("location:login.php");
}
?>