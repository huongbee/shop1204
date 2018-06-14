<?php
include_once "Controller.php";

class TypeController extends Controller{
    function getType(){
        return $this->loadView('type');
    }
}


?>