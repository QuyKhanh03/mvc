<?php
@session_start();
if (isset($_SESSION['admin'])) {
    include ("controllers/c_product.php");
    $product = new c_product();
    $product->showproduct();
} else {
    header("location:login.php");
}
?>