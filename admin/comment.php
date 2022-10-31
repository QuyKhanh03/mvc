<?php
@session_start();
if (isset($_SESSION['admin'])) {

include ("controllers/c_comment.php");
$home = new c_comment();
$home->index();
} else {
    header("location:login.php");
}
?>