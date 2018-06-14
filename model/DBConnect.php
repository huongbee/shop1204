<?php

class DBConnect{
    
    private $connect ;

    function __construct($host='127.0.0.1',$dbName='apple2',$username='root',$password =''){
        try{
            $this->connect = new PDO("mysql:host=$host;dbname=$dbName",$username,$password);
            $this->connect->exec('set names utf8');
        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    function setStatement($sql, $params=[]){
        $stmt = $this->connect->prepare($sql);
        if(count($params)>0){
            for($i=1; $i<= count($params); $i++){
                $stmt->bindParam($i,$params[$i-1]);
            }
        }
        return $stmt;
    }

    // INSERT/UPDATE/DELETE
    function executeQuery($sql, $params=[]){
        $stmt = $this->setStatement($sql, $params);
        return $stmt->execute();
    }

    // SELECT 1 row
    function loadOneRow($sql, $params=[]){
        $stmt = $this->setStatement($sql, $params);
        $check = $stmt->execute();
        if($check){
            return $stmt->fetch(PDO::FETCH_OBJ); 
        }
        return false;
    }

    // SELECT more rows
    function loadMoreRows($sql, $params=[]){
        $stmt = $this->setStatement($sql, $params);
        $check = $stmt->execute();
        if($check){
            return $stmt->fetchAll(PDO::FETCH_OBJ); 
        }
        return false;
    }

    
}



?>