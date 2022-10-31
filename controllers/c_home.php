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
    // public function index1()
    // {
    //     include("models/m_search.php");
    //         $search = "";
    //         if (isset($_GET["search"])) {
    //             $search = $_GET["search"];
    //             echo $search;
    //            $m_search = new m_search();
    //            $result = $m_search->search($search);
               
    //            echo print_r("âcks".$result);
    //         }
    //     $view = "views/product/v_listprouct.php";
    //     include("templates/front-end/layout.php");
    // }
}
?>
