<?php
include ("controllers/c_lognIn.php");
$c_user = new c_lognIn();
$c_user->checkLogin();