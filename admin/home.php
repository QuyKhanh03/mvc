<?php
@session_start();
if (isset($_SESSION['admin'])) {

include ("controllers/c_home.php");
$home = new c_home();
$home->index();
} else {
    header("location:login.php");
}
?>