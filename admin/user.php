<?php
@session_start();
if (isset($_SESSION['admin'])) {
    include("controllers/c_user.php");
    $home = new c_user();
    $home->index();
} else {
    header("location:login.php");
}
