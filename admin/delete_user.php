<?php
@session_start();
if (isset($_SESSION['admin'])) {
    include ("controllers/c_user.php");
    $banner = new c_user();
    $banner->deleteUser();
} else {
    header("location:login.php");
}
?>