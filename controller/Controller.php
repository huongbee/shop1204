<?php
include_once "model/BaseModel.php";
class Controller{

    function loadView($nameView, $data=[]){
        $model = new BaseModel;
        $menu = $model->getCategories();
        print_r($menu);
        die;
        include_once "view/layout.view.php";
    }
}



?>

