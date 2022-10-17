<?php
@session_start();
include ("controllers/c_lognIn.php");
if($_GET['func']) {
    $c_user = new c_lognIn();
    $c_user->logout();
}