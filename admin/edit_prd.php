    <?php
    @session_start();
    if (isset($_SESSION['admin'])) {
        include ("controllers/c_product.php");
        $banner = new c_product();
        $banner->editproduct();
    } else {
        header("location:login.php");
    }
    ?>