<?php
class c_home {
    public function index() {
        include "models/m_home.php";
        $m_home = new m_home();
        $totalUser = $m_home->totalUser();
        $totalPrd = $m_home->totalPrd();
        $totalCmt= $m_home->totalCmt();
        $totalCate= $m_home->totalCate();
        $view = "views/home/v_home.php";
       include ("templates/layout.php");
    }
}

