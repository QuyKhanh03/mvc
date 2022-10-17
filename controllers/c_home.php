<?php
class c_home {
    public function index() {
        include ("models/m_home.php");
        $m_home = new m_home();
        $list_product = $m_home->read_home();
        // $men = $m_home->read_home();
        $view = "views/home/v_home.php";
        include ("templates/front-end/layout.php");
    }
}
?>
