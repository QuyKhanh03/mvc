<?php
@session_start();
if (isset($_SESSION['admin'])) {
    include ("controllers/c_user.php");
    $user = new c_user();
    $user->add();
} else {
    header("location:login.php");
}
?>