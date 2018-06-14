<?php
include_once "Controller.php";

class CartController extends Controller{

    function getShoppingCart(){
        return $this->loadView('shopping-cart');
    }
}


?>