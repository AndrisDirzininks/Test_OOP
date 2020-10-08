<?php
// this class handles which page is loaded
class NavBar
{
    private $pageName;
    // run a method as the class is instantiated
    public function __construct()
    {
        // check if for a new page is asked for - a get value is submitted. Or set default value..
        if (isset($_GET["nav"]) && !empty($_GET["nav"])) {
            $this->pageName=$_GET["nav"];
        } else {
            $this->pageName="product_list";}
        // request a page depending from asked page value
        switch ($this->pageName) {
        case 'product_list':
        require_once("../src/view/pages/product_list.php");
        break;
        case 'product_add':
        require_once("../src/view/pages/product_add.php");
        break;
        }
    }
}
