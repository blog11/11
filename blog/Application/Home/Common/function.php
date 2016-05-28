<?php 
	function init(){
        $con=new MongoClient("mongodb://127.0.0.1:27017");
        $db=$con->firstdatabase;
        $collection=$db->wish;
        $result=$collection->find();
        $con->close();
        return $result;
    }

    function add($params){
    	$con=new MongoClient("mongodb://127.0.0.1:27017");
        $db=$con->firstdatabase;
        $collection=$db->wish;
        $result=$collection->insert($params);
        $con->close();
        return $result;
    }





 ?>