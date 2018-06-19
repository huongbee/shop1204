<?php
include_once "Controller.php";
include_once "model/IndexModel.php";

class IndexController extends Controller{

    function index(){
        $model = new IndexModel;
        $slide = $model->getSlide();
        $specialProducts = $model->selectSpecialProducts();
        $bestSellers = $model->selectBestSeller();

        //print_r($specialProducts); die;
        $data = [
            'slide'=>$slide,
            'specialProducts'=>$specialProducts,
            'bestSellers'=>$bestSellers
        ];
        return $this->loadView('index',$data);
    }
}


?>