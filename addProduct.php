<?php
include '../../smarty/libs/Smarty.class.php';
$smarty = new Smarty;
include ('../connection.php');

if($_POST){
    $data=array();
    if(empty($_POST['name'])){
        $data['name_error']='Name is required';
    }
    if(empty($_POST['price'])){
        $data['price_error']='price is required';
    }
    if(empty($_POST['color'])){
        $data['colorerror']='colour is required';
    }
    $data['name_value']=$_POST['name'];
    $data['price_value']=$_POST['price'];
    $data['color_value']=$_POST['color'];
    if(empty($_POST['name']) || empty($_POST['price'] || empty($_POST['color'])){
        $smarty->assign('data',$data);
        $smarty->display('addProduct.tpl');

    }
    else{
        $conn->beginTransaction();
        $result=$conn->exec("INSERT INTO products (name,price,color) values ($data['name],$data['price],$data['color])");
        if($result==1){
            $smart->assign('success','Product added');
            $smarty->display('product.tpl');
        }

        $conn->commit();
        if($conn->errorCode()!=00000){
                var_dump( $conn->errorInfo()[2]);
        }
        else{
            echo $result;
        


        }
    }

}
else{
    $smarty->display('addProduct.tpl');
}
// $query='select * from products';
// $selectData=$conn->query($query);
// $product_data=$selectData->fetchAll();
// $smarty->assign('product',$product_data);
// $smarty->display('index.tpl');

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