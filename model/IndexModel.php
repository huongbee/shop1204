<?php

require_once "DBConnect.php";
class IndexModel extends DBConnect{

    function getSlide(){
        $sql = "SELECT * FROM slide WHERE status=1";
        return $this->loadMoreRows($sql);
    }
}





?>