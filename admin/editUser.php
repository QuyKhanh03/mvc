<?php
@session_start();
if (isset($_SESSION['admin'])) {
    include ("controllers/c_user.php");
    $banner = new c_user();
    $banner->editUsers();
} else {
    header("location:login.php");
}
?>