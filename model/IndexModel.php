<?php

require_once "DBConnect.php";
class IndexModel extends DBConnect{

    function getSlide(){
        $sql = "SELECT * FROM slide WHERE status=1";
        return $this->loadMoreRows($sql);
    }

    function selectSpecialProducts(){
        $sql = "SELECT p.*, u.url 
                FROM products p
                INNER JOIN page_url u
                ON u.id = p.id_url
                WHERE status=1";
        return $this->loadMoreRows($sql);        
    }

    function selectBestSeller(){
        $sql = "SELECT p.*,u.url, SUM(d.quantity) as soluong
                FROM bill_detail d
                INNER JOIN products p 
                ON d.id_product = p.id
                INNER JOIN page_url u 
                ON u.id = p.id_url
                GROUP BY p.id
                ORDER BY soluong DESC
                LIMIT 0,10";
        return $this->loadMoreRows($sql);        
        
    }

}





?>