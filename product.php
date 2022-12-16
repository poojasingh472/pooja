<?php
include '../../smarty/libs/Smarty.class.php';
$smarty = new Smarty;
include ('../connection.php');
$query='select * from products';
$selectData=$conn->query($query);
$product_data=$selectData->fetchAll();
$smarty->assign('product',$product_data);
$smarty->display('index.tpl');

// $conn->beginTransaction();
// $result=$conn->exec("INSERT INTO users (name,email,contact,password) values ('pooja','pooja@gmail.com','7052333060','sss')");

// $conn->commit();
// if($conn->errorCode()!=00000){
//         var_dump( $conn->errorInfo()[2]);
// }
// else{
//     echo $result;
   


// }
?>