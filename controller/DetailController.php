<?php
include_once "Controller.php";

class DetailController extends Controller{

    function getDetail(){
        return $this->loadView('detail');
    }
}


?>