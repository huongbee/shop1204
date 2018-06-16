<?php
include_once "Controller.php";
include_once "model/IndexModel.php";

class IndexController extends Controller{

    function index(){
        $model = new IndexModel;
        $slide = $model->getSlide();
        $name = "Huong";
        
        $data = [
            'slide'=>$slide,
            'name'=>$name
        ];
        return $this->loadView('index',$data);
    }
}


?>