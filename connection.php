<?php 

try{
    $dbhost='localhost';
    $dbname="webkuldata";
    $dbuser='root';
    $dbpass='webkul';
    $conn=new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e) {
  
    echo "Error :".$e->getMessage()."<br/>";
    die();

}

?>