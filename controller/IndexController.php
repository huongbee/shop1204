<?php
include_once "Controller.php";

class IndexController extends Controller{

    function index(){
        return $this->loadView('index');
    }
}


?>